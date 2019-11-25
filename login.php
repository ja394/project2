<?php
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST ,'password');

$t = stripos($email,'@');
if (empty($email)){
    echo("please type in email");
}
else if ($t == false){
    echo ("there is no @ in the email");
}
if (empty($password)){
    echo("please type in password");
}
if (strlen($password) <= 8){
    echo("the password has to be greater than 8 characters");
}
?>
<html
<head><title> Display form </title></head>
<Body>

<h2> Text Input </h2>
<div>

</div>
<div>
    Email:<?php echo $email; ?>
</div>
<div>
    password:<?php echo $password; ?>
</div>
</Body>
</html>
