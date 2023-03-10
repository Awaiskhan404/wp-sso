<?php

global $current_user;
$second_website_url = 'https://community.aularale.com'; // put your second website url
$user_email = $current_user->user_email;
$user_login = $current_user->user_login;
if($user_email != ''){

    $email_encoded = rtrim(strtr(base64_encode($user_email), '+/', '-_'), '='); //email encryption
    $user_login_encoded = rtrim(strtr(base64_encode($user_login), '+/', '-_'), '='); //username encryption
    echo '<a style="" href="'.$second_website_url.'/sso.php?key='.$email_encoded.'&detail='.$user_login_encoded.'" target="_blank">Connect community</a>';
}

?>