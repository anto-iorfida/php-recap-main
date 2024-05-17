<?php
session_start();

// controllare se l'utente è già autenticato
if (!isset($_SESSION['username'])) {
    // se l'utente non è autenticato reindirizzalo alla pagina di errore
    header('Location: errore.php');
    exit(); 
}

// se l'utente è autenticato ottiene il nome utente dalla sessione
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Document</title>
</head>
<body>
<h1>benvenuto <?php echo $username?></h1>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>