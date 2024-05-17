<?php

session_start();

$username = $_SESSION['username'];

    // Dati fake per il login
    $fake_users = array(
        'mario' => 'pwd',
        'luigi' => '1234',
        'luca' => '4321',
    );

    // controllare se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // controllare se l'utente esiste e la password corrisponde
    if (isset($fake_users[$username]) && $fake_users[$username] == $password) {
        // inizializza la sessione
        $_SESSION['username'] = $username;

        // reindirizza alla pagina home
        header('Location: home.php');
        exit();
    } else {
        // se l'utente non esiste o la password non corrispond reindirizza alla pagina errore
        header('Location: errore.php');
    }
}
?>