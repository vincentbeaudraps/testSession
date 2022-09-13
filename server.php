<?php


session_start();


$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";


$db = mysqli_connect('localhost', 'root', 'root', 'registration');


if (isset($_POST['reg_user'])) {


    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    if (empty($username)) { array_push($errors, "Un nom d'utilisateur est nécessaire"); }
    if (empty($email)) { array_push($errors, "Un Email est nécessaire"); }
    if (empty($password_1)) { array_push($errors, "Un mot de passe est nécessaire"); }

    if ($password_1 != $password_2) {
        array_push($errors, "Les deux mots de passe sont différents");

    }


    if (count($errors) == 0) {


        $password = md5($password_1);


        $query = "INSERT INTO users (username, email, password)
                  VALUES('$username', '$email', '$password')";

        mysqli_query($db, $query);


        $_SESSION['username'] = $username;


        $_SESSION['success'] = "Vous êtes connecté";


        header('location: index.php');
    }
}


if (isset($_POST['login_user'])) {


    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    if (empty($email)) {
        array_push($errors, "Un Email est requis");
    }
    if (empty($password)) {
        array_push($errors, "Votre mot de passe est requis");
    }


    if (count($errors) == 0) {


        $password = md5($password);

        $query = "SELECT * FROM users WHERE email=
                '$email' AND password='$password'";
        $results = mysqli_query($db, $query);


        if (mysqli_num_rows($results) == 1) {


            $_SESSION['username'] = $username;


            $_SESSION['success'] = "Vous êtes connecté";


            header('location: index.php');
        }
        else {


            array_push($errors, "Email ou mot de passe incorrect");
        }
    }
}
?>