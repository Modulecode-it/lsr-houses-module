<?php
/**
 * бутстрап для любых консольных скриптов под Битрикс
 */
define("NO_KEEP_STATISTIC", true);
define ('NOT_CHECK_PERMISSIONS', true);
define ('NO_AGENT_CHECK', true);
//define("NOT_CHECK_PERMISSIONS", true); //Если инициализировать данную константу значением "true" до подключения пролога, то это отключит проверку прав на доступ к файлам и каталогам.
// это отключает исполнение агентов
//define("BX_CLUSTER_GROUP", 2);

$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/../..");
$_SERVER['SERVER_NAME'] = 'lsr-houses.tv3.modulecode.ru/';
$_SERVER['HTTP_HOST'] = $_SERVER['SERVER_NAME'];
chdir($_SERVER["DOCUMENT_ROOT"]);


/**
 * при запуске битрикса в phpunit, все переменные, у которые не задано явно, что они глобальные через global -
 * становятся локальными, потому что phpunit запускает бутстрап из функции.
 * чтобы поправить это, здесь соберем все такие переменные.
 *
 * @see https://github.com/sebastianbergmann/phpunit/issues/325
 */
global $DBType;
global $DBDebug;
global $DBDebugToFile;
global $DBHost;
global $DBName;
global $DBLogin;
global $DBPassword;

define ('IS_UCHMET_ADAPTIVE_TEMPLATE', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

@set_time_limit(0);
@ignore_user_abort(true);


/**
 * Если сайт, в котором находится скрипт, имеет адрес uchmag.dev1.devs.uchmag.ru, то вернет dev1
 * @param string $docRootDir
 * @return string
 */
function sandboxDirName($docRootDir)
{
	$sandboxDir = $docRootDir . '/..';
	$sandboxRealDir =  realpath($sandboxDir);
	return basename($sandboxRealDir);
}