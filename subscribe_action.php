<?php include 'partials/_dbconnect.php'; ?>
<?php
if (isset($_POST['email_subscribe'])) {
    $errorMsg = '';
    $response = array(
        'status' => 'err',
        'msg' => 'Something went wrong, please try after some time.'
    );

    if (empty($_POST['name'])) {
        $pre = !empty($msg) ? '<br/>' : '';
        $errorMsg .= $pre . 'Please enter your full name.';
    }

    if (empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $pre = !empty($msg) ? '<br/>' : '';
        $errorMsg .= $pre . 'Please enter a valid email.';
    }

    if (empty($errorMsg)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $token = md5(uniqid(mt_rand()));

        $subscriber->email = $email;
        if ($subscriber->getSusbscriber()) {
            $response['msg'] = 'Your email already exists in our subscribers list.';
        } else {

            $subscriber->name = $name;
            $subscriber->verify_token = $token;
            $insert = $subscriber->insert();

            if ($insert) {

                $siteName = 'PHPZAG Site';
                $siteEmail = 'abc@phpzag.com';

                $siteURL = ($_SERVER["HTTPS"] == "on") ? 'https://' : 'http://';
                $siteURL = $siteURL . $_SERVER["SERVER_NAME"] . dirname($_SERVER['REQUEST_URI']) . '/';

                $verifyLink = $siteURL . 'verify_email.php?email_verify=' . $token;
                $subject = 'Confirm Subscription';

                $message = '<h1 style="font-size:22px;margin:18px 0 0;
				padding:0;text-align:left;color:#3c7bb6">Email Confirmation</h1> 
                <p style="color:#616471;text-align:left;padding-top:15px;
				padding-right:40px;padding-bottom:30px;padding-left:40px;font-size:15px">
				Thank you for signing up 
				with ' . $siteName . '! Please confirm your email address 
				by clicking the link below.</p> 
                <p style="text-align:center;"> 
                    <a href="' . $verifyLink . '" style="border-radius:.25em;
					background-color:#4582e8;
					font-weight:400;min-width:180px;font-size:16px;
					line-height:100%;padding-top:18px;
					padding-right:30px;padding-bottom:18px;padding-left:30px;
					color:#fffffftext-decoration:none">Confirm Email</a> 
                </p> 
                <br><p><
				strong>' . $siteName . ' Team</strong></p>';

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: $siteName" . " <" . $siteEmail . ">";

                $mail = mail($email, $subject, $message, $headers);
                if ($mail) {
                    $response = array(
                        'status' => 'ok',
                        'msg' => 'A verification link has been 
						sent to your email address, please check your email and verify.'
                    );
                }
            }
        }
    } else {
        $response['msg'] = $errorMsg;
    }
    echo json_encode($response);
}


?>