<?php


if(isset($_POST['submit'])){
$user_name = $_POST["cusName"];
$user_email = $_POST["cusEmail"];
$user_num = $_POST["cusNum"];
$user_compName = $_POST["cusCompName"];
$user_business = $_POST["cusBusiness"];
$user_add = $_POST["cusAdd"];
$user_city = $_POST["cusCity"];
$user_country = $_POST["cusCountry"];
$user_zip = $_POST["cusZip"];
$user_date = $_POST["inputDate"];
$user_info = $_POST["inputBrief"];


$to ="rockingkrish5@hotmail.com" ;
  //"vaijayanti.mahajan@vymahajan.co.uk"
$subject = "psn page details";
$message ="Name: ".$user_name. "\n" . "Email: " .$user_email. "\n" . "Phone_Num: ". $user_num. "\n" . "CompanyName: ". $user_compName. "\n" . 
"BusinessDomain: ". $user_business. "\n". "Address: ". $user_add. "\n". "City: ". $user_city. "\n"."Country: ". $user_country. "\n"."Brief: ". $user_info;
$message = wordwrap($message, 70, "\r\n");


$headers = "From:".$user_email; 
    
  mail($to,$subject,$message,$headers);
  header("Location:index.html?mailsend");
   
  
  
  
  
}





?>
