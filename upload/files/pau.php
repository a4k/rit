<?// файл /bitrix/php_interface/init.php
/*require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    //указываем ID инфоблока, в котором будем хранить данные о голосованиях. Инфоблок должен иметь текстовые свойства voteid и userid
    $iblockid = 3;

    //получаем ID текущего пользователя
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
 
   //изначально пользователь считается не голосовавшим
   $voted = false;

   //проверяем, имеется ли факт голосования по данному опросу
   CModule::IncludeModule('iblock');

       $el = new CIBlockElement;

       $properties[1] = $ip;  //118 это код свойства 'userid'
       $properties[2] = 'link_test'; //117 это код свойства 'voteid'

       $arFields = Array(
         "IBLOCK_ID"      => $iblockid,
         "PROPERTY_VALUES"=> $properties,
         "NAME"           => "user ".$ip." voted in poll link_test",
       );

       $element_id = $el->Add($arFields);*/
       print_r('test');
// $link = $_GET['link'];
// $link = 'http://localhost/upload/files/pau.exe';
// header('Location: ' . $link);
 


?>