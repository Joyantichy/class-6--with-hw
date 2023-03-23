
<?php

$input =$_POST['email'];
$email = 'admingmail.com';

if(strpos($email,'@')){
    // echo 'valid email';

    if(strpos($email,'.com')){
        echo 'ok valid email';
    }
    else{
        echo
            'you should enter a right email with .com';
        
    }

}
else {
    echo 'please enter @';
}
