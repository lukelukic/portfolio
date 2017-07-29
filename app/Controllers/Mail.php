<?php

namespace portfolio\app\Controllers;

use portfolio\system\MainController;
use portfolio\system\Libraries as lib;

class Mail extends MainController
{
    public function index()
    {
        if (isset($_REQUEST['mailSubmit'])) {
            $firstName = $_REQUEST['mFirstName'];
            $phone = $_REQUEST['mPhone'];
            $message = $_REQUEST['mMessage'];
            $email = $_REQUEST['mEmail'];

            $validator = new lib\FormValidation();
            $validationData = array(
              array(
                'required' => true,
                'type' => 'name',
                'name' => "First Name",
                'message' => 'Fist name must begin with Capital letter, contains only letters',
                'value' => $firstName
              ),
              array(
                'required' => true,
                'type' => 'email',
                'name' => "Email",
                'message' => 'Invalid email format',
                'value' => $email
              )
            );

            if ($phone) {
                $validator->checkCommon('phone', $phone, "Invalid phone format.");
            }
            $validator->checkCommonBatch($validationData);
            if ($validator->isValid()) {
                if($message) {
                    //Nadovezivanje sadrzaja poruke
                    $msg = "<p><strong>First Name: </strong>$firstName</p>";
                    $msg .= "<p><strong>Email: </strong>$email</p>";
                    if ($phone) $msg .= "<p><strong>Phone: </strong>$phone</p>";
                    $msg .= "<p>$message</p>";

                    //Podesavanje heder-a
                    $headers = "From: lazar.komlenski@gmail.com \r\n";
                    $headers .= "Reply-To: $email \r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                    if(mail($email,"rouhlyCoding Contact Form", $msg, $headers)) {
                      echo "Poslato";
                    }
                } else {
                    echo "<p class='danger'>Message field can't be empty.</p>";
                }
            } else {
              var_dump($validator->getErrorMessages());
            }
        }
    }
}
