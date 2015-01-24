<?php
  require_once('./config.php');

  
  //mail("president@compsa.queensu.ca","FROM THE STORE","$name\n\n$email\n\n$size\n\n$shirt");
  
  $token  = $_POST['stripeToken'];
  session_start();
  $type = $_SESSION['type'];
  if($type==""){
    die("Type empty");
  }
  if($type =="Delegate Fee + Accommodation"){
    $amount = 21800; //convert to cents
  }else if($type =="Delegate Fee (no Accommodation)"){
    $amount = 12300;
  }else{
    die("Error 2001: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");

  }
  /*
  $appCode1  = $_SESSION['appCode'];
  $code1 = $_SESSION['code'];
  */
  
  $name = $_POST['name_textbox'];
  $email = $_POST['email_textbox'];
  $appCode = $_POST['appCode'];
  $code = $_POST['code'];

  $name = contentCheck($name);
  $email = contentCheck($email);
  $appCode = contentCheck($appCode);
  $code = contentCheck($code);


  $strLen = strlen($code);
  $code = substr($code, 1, ($strLen-1));
  if($name == ""){
    die("Error 2002: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");

  }
  if($email == ""){
    die("Error 2003: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");

  }
  if($appCode == ""){
    die("Error 2004: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");

  }
  if($code == ""){
    die("Error 2005: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");

  }
  /*
  if($appCode1 == ""){
    die("session app code is empty");
  }
  if($code1 == ""){
    die("session app code is empty");
  }
  if($code1 != $code){
    die("codes dont match");
  }
  if($appCode1 != $appCode){
    die("app code dont match");
  }
  */
  //echo '<script>alert("CODE:' . $code . '");</script>';
  //echo '<script>alert("APPCODE:' . $appCode . '");</script>';
  include_once('./include/conn.php');
  mysqli_query($con, "UPDATE pay SET paid='Yes', name='$name', email='$email', dType='$type' WHERE appCode='$appCode' AND code='$code'") or die("Error 2006: Please try again, you have not been charged. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
;

  $customer = Stripe_Customer::create(array(
      'email' => '$email',
      'card'  => $token
  ));



  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => "$amount",
      'currency' => 'cad'
  ));


  //echo '<script>alert("Thanks");</script>';


  $to =$email;
  $subject = "QCOP Payment Received";
  if($amount == 21800){
    $a = "$218.00";
  }else{
    $a = "$123.00";
  }

  $txt = "Congratulations, you are officially a delegate for the Queen's Conference on Philanthropy 2015! Thank you for submitting your payment. The $a has been received. Please retain this email as a copy for your records.\n
  We are looking forward to welcoming you to the QCOP family and meeting you at the conference!\n\n Sincerely,\n the QCOP 2015 Executive Team";
  $headers = "From: qcopexternal@gmail.com" . "\r";

  mail($to,$subject,$txt,$headers);


  echo '<script>window.location.replace("./thanks?c=pay");</script>';
  //header('Location: http://www.compsa.queensu.ca');
  die("<a href='./index'>Return Home</a>");

  function contentCheck($data){
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
