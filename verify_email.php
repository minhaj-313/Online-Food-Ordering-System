<?php include 'partials/_dbconnect.php'; ?>
<?php
$verifyMessage = '';
if (!empty($_GET['email_verify'])) {
    $token = $_GET['email_verify'];
    $subscriber->verify_token = $token;
    if ($subscriber->isValidToken()) {
        $subscriber->is_verified = 1;
        if ($subscriber->update()) {
            $verifyMessage = '<p class="success">Your email 
			address has been verified successfully.</p>';
        } else {
            $verifyMessage = '<p class="error">Some problem 
			occurred on verifying your email, please try again.</p>';
        }
    } else {
        $verifyMessage = '<p class="error">You have clicked on 
		the wrong link, please check your email and try again.</p>';
    }
}
?>