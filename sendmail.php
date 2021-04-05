<?php

// // dummy details
// $user_name = 'niki';
// $user_email = 'nnikitharani21@gmail.com';
// $user_num = 9099090;
// $user_compName = 'mucom';
// $user_business = 'mucom.co.uk';
// $user_add = '192e';
// $user_city = 'bir';
// $user_country = 'BG';
// $user_zip = 'ni7878';
// $user_date = '23/07/2021';
// $user_info = 'information';
// //  $user_interest = $_POST["person_interest" 

if(isset($_POST["submit"])){
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
//  $user_interest = $_POST["person_interest"];  




$to = "vaijayanti.mahajan@vymahajan.co.uk";
$subject = "psn page details";
$message ="Name: ".$user_name. "</br>" . "Email:" .$user_email. "</br>" . "Phone_Num:". $user_num. "</br>" . "Company Name:". $user_compName. "</br>" . 
"Business Domain:". $user_business. "</br>". "Address:". $user_add. "</br>". "City:". $user_city. "</br>"."Country:". $user_country. "</br>"."Brief:". $user_info;
$message = wordwrap($message, 70, "\r\n");

$from = $user_email;
$headers = 'From : '. $from;

// echo $message.'</br>';
// echo $headers.'</br>';
// echo $subject.'</br>';

if(mail($to,$subject,$message, $header)){
    // echo "<div>This is a primary alert—check it out!</div>";
    // echo "<div class="alert alert-primary" role="alert">This is a primary alert—check it out!</div>";
    echo "<h1>Sent Sucessfully! Thank you"." ".$user_name.", We will contact you shortly!</h1>";
    // echo '<div class="alert alert-primary" role="alert">
    // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    // This is a primary alert—check it out!</div>';
}
else{
    echo "Something went wrong!";
    // echo '<div class="alert alert-primary" role="alert">
    // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    // Something went wrong!</div>';
};
}


?>




