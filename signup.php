<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$birthday = filter_input(INPUT_POST ,'birthday');
$Email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST, 'password');
if(strlen($firstname) == 0){
    echo  (" the firstname is required.");
    echo "\n";

}
if (strlen($lastname)== 0){
    echo nl2br(" last name is required. /n");

}
if (strlen($birthday)== 0){
    echo" birthday is required";
}
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
