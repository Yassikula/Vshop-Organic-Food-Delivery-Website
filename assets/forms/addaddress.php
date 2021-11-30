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
  $contact->from_name = $_POST['name'];
  $contact->from_name = $_POST['lname'];
  $contact->from_name = $_POST['cname'];
  $contact->from_name = $_POST['aname'];
  $contact->from_name = $_POST['tname'];
  $contact->from_name = $_POST['pname'];
  $contact->from_name = $_POST['phname'];
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

  $contact->add_message( $_POST['name'], );
  $contact->add_message( $_POST['lname'], );
  $contact->add_message( $_POST['cname'], );
  $contact->add_message( $_POST['aname'], );
  $contact->add_message( $_POST['tname'], );
  $contact->add_message( $_POST['pname'], );
  $contact->add_message( $_POST['phname'], );
  

  echo $contact->send();
?>
