<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");

$classToEdit = \Lsr\Model\HouseTable::class;
$imagesClass = \Lsr\Model\HouseImageTable::class;
$backurl = '/bitrix/admin/lsr_houses_list.php';
$tabName = 'Дом';
$tabTitle = 'Параметры:';

require_once($_SERVER["DOCUMENT_ROOT"]."/local/admin/common_edit.php");


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
?>
