<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('./PHPMailer/class.phpmailer.php');

/*--------------------------------------------------------*/
/*-----Initial setup, test values
/*--------------------------------------------------------*/

$email = new PHPMailer();

$post = $_POST;
//test the infos to kill jql / js injections
foreach ($post as $postinfo) {
  $postinfo = test_input($postinfo);
}

//ADDING THE GOOGLE CAPTCHA CHECK
    
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcD0h0TAAAAAL_XJ3-xuBAsZAViQMkyWJI4_l1G&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$googleobj = json_decode($response);
$verified = $googleobj->success;

if ($verified === true){
  // if google is verified, do everything

  /*--------------------------------------------------------*/
  // Email Template for Client
  /*--------------------------------------------------------*/
  $email_user = '';
  // intro
    $email_user .= '<p>Hello!</p>';
  // name
  if (isset($post['name']) && strlen($post['name'])>0) {
    $email_user .= '<p>Your name is '.$post['name'] . '<br />';
  }
  // email
  if (isset($post['email']) && strlen($post['email'])>0) {
    $email_user .= 'And your email adress is: '.$post['email'] . '</p>';
  }
  // outro
    $email_user .= '<p>Goodbye!</p>';


/*--------------------------------------------------------*/
// Sending the emails
/*--------------------------------------------------------*/

  //sending mail to user
  $email->Subject = 'Your awesome data';
  $email->From = 'thomas.miller147@gmail.com';
  $email->FromName = 'Thomas Miller';
  $email->Body = $email_user;
  $email->isHTML(true);
  $email->CharSet = "UTF-8";
  $email->AddAddress($post['email']);
  $email->send();


}// ending google recaptcha check

/*--------------------------------------------------------*/
// Function declarations
/*--------------------------------------------------------*/

function test_input($data){
  if(is_array($data)){
    $array=[];
    foreach($data as $key => $row){
      $row = trim($row);
      $row = stripslashes($row);
      $row = htmlspecialchars($row);
      $array[$key]=$row;
    }
    $data=$array;
  }
  else{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  }
  return $data;
}

?>