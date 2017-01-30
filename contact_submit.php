<?php
  $fullName = $_REQUEST['fullName'];
  $purdueEmail = $_REQUEST['email'];
  $submittedInfo = $_REQUEST['message'];

  $config = parse_ini_file('../config.ini', true);
  $accounts = $config['accounts'];

  // Send email to webmaster.
  $to = $accounts["webmaster_email"];
  $subject = "PSSC Contact Submission";

  $body = "We have received the following message from {$purdueEmail}:\n\n";
  $body .= "Message:\n$submittedInfo";

  if (!mail($to, $subject, $body)) {
    echo "There were as error sending your feedback. Please notify {$to}.";
    return;
  }

  // Send confirmation email.
  $to = $purdueEmail;
  $subject = "PSSC Contact Confirmation";
  $body = "Thank you for contacting us! We will get back to you as soon as possible.\n\nHave a great day!\n~PSSC";

  if (!mail($to, $subject, $body)) {
    echo "We were unable to confirm your email. ";
    echo "Please return to the form and provide a valid email.";
    return;
  }

  header("Location: contact_confirm.php");
?>
