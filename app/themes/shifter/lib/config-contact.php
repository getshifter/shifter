<?php
function sendContactFormToSiteAdmin () {
  try {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
      throw new Exception('Oops! Something looks off. Can you check the form?');
    } else {
      alert('iworked');
    }
    if (!is_email($_POST['email'])) {
      throw new Exception('Email address not formatted correctly.');
    }

    $headers[] = 'From: '. $_POST['name'] .' <'. $_POST['email'] .'>';
    $send_to = "support@getshifter.zendesk.com";
    $subject = "Contact Form: " .$_POST['name'];
    $message =  "Message from ".$_POST['name'] . ": \n\n ". $_POST['message'] .
                  " \n\n Reply to: " . $_POST['email'] .
                  " \n\n Company: " . $_POST['company'] .
                  " \n\n URL: " . $_POST['url'];

    if (wp_mail($send_to, $subject, $message, $headers)) {
      echo json_encode(array('status' => 'success', 'message' => 'Contact message sent.'));
      exit;
    } else {
      throw new Exception('Failed to send email.');
    }
  } catch (Exception $e) {
    echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
    exit;
  }
}
add_action("wp_ajax_contact_send", "sendContactFormToSiteAdmin");
add_action("wp_ajax_nopriv_contact_send", "sendContactFormToSiteAdmin");
