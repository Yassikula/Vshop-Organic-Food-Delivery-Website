<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['email'];
  $contact->from_name = $_POST['name'];
  $contact->from_name = $_POST['dname'];
  $contact->from_name = $_POST['toname'];
  $contact->from_name = $_POST['mname'];
//   $contact->from_name = $_POST['card1'];
  $contact->from_name = $_POST['card2'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['email'], );
  $contact->add_message( $_POST['name'], );
  $contact->add_message( $_POST['dname'], );
  $contact->add_message( $_POST['toname'], );
  $contact->add_message( $_POST['mname'], );
//   $contact->add_message( $_POST['card1'], );
  $contact->add_message( $_POST['card2'], );
  

  echo $contact->send();
?>
