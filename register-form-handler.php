<?php
require_once('db-connect.php');
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirmation']) && !empty($_POST['confirmation'])) {
    $username = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $confirmation = strip_tags($_POST['confirmation']);


    if ($password == $confirmation) {
        $password_encrypt = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(username,email,password)VALUES(:username,:email,:password)";
        $query = $db->prepare($sql);
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password_encrypt, PDO::PARAM_STR);
        $query->execute();
        echo 'c\'est ok';
        echo ' <br><a href="index.php"> retour</a>';
    } else {
        echo 'les mots de passe ne correspondent pas';
    }
} else {
    echo 'remplissez tous les champs du formulaire';
}





// if (password_verify('test', $password_encrypt)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
