<?php
require('pdo.php');
$firstName = filter_input(INPUT_POST,'firstName');
$lastName = filter_input(INPUT_POST,'lastName');
$birthday = filter_input(INPUT_POST ,'birthday');
$Email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST, 'password');

if(strlen($password)>= 8) {
    echo "First Name: $firstName <br>";
    echo "First Name: $lastName <br>";
    echo "Birthday: $ birthday <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";

    $query = 'INSERT INTO accounts
(email,fname,lname,birthday,password)
VALUES
(:email,:fname,:lname,:birthday,:password)';

// CREATE PDO STATEMENT
    $statement = $db->prepare($query);

//bind form values to sql
    $statement->bindValue(':fname', $firstname);
    $statement->bindValue(':lname', $lastname);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);

// execute the sql
    $statement->execute();
//close database
    $statement->closecursor();
} else {
    echo"form is invalid";
}