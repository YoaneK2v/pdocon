<?php

try {

 $host = "localhost";
 $username = "formdb_user";
 $passwords = "abc123";
 $dbname = "form_connect";

 $db =new  PDO('mysql:localhost; dbname=form_connect;$username; $passwords');
}
catch(exception $e) {
    die('erreur de connection')
}

if (isset($_POST['submit'])) {

    $name= $_POST['name'];
    $password= $_POST['password'];

    $enreg=$db->prepare('INSERT INTO user_connect(email_user, password_user) values (:name, :password)');
    $enreg->excute([
        'name'=>$name,
        'password'=>$password
    ]);
    echo "enregistrer "

}


?>