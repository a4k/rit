<?// ���� /bitrix/php_interface/init.php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    //��������� ID ���������, � ������� ����� ������� ������ � ������������. �������� ������ ����� ��������� �������� voteid � userid
    $iblockid = 3;

    //�������� ID �������� ������������
    global $USER;
    $userid = $USER->GetID();
    function getRealIP() {
      $ip = false;
      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         $ips = explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
         for ($i = 0; $i < count($ips); $i++) {
            if (!preg_match("/^(10|172\\.16|192\\.168)\\./", $ips[$i])) {
               $ip = $ips[$i];
               break;
            }
         }
      }
      return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
   }
 
   //���������� ������������ ��������� �� ������������
   $voted = false;

   //���������, ������� �� ���� ����������� �� ������� ������
   CModule::IncludeModule('iblock');

       $el = new CIBlockElement;

       $properties[1] = $ip;  //118 ��� ��� �������� 'userid'
       $properties[2] = 'pau.exe'; //117 ��� ��� �������� 'voteid'
       $ip = getRealIP();
       $arFields = Array(
         "IBLOCK_ID"      => $iblockid,
         "PROPERTY_VALUES"=> $properties,
         "NAME"           => "������������ ".$ip." ������ upload/files/pau.exe",
       );

       $element_id = $el->Add($arFields);
$link = $_GET['link'];
if(!isset($link)) {
  $link = '/upload/files/pau.exe';
}
header('Location: ' . $link);
 exit;


?>