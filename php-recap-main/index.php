<?php

session_start();

// Funzione per recuperare un'attività dall'API
function recuperaAttivita()
{
    // effetture una richiesta http all'api e ottenere un'attività
    $response = file_get_contents('http://www.boredapi.com/api/activity');
    // convertire json in un array associativo
    $data = json_decode($response, true);
    return $data['activity'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--/axios -->
    <style>
        .list-group-item {
            background-color: transparent !important;
            border: none !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
            <h1 class="text-body-emphasis">Full-width jumbotron</h1>
            <p class="col-lg-8 mx-auto lead">
                This takes the basic jumbotron above and makes its background edge-to-edge with a <code>.container</code> inside to align content. Similar to above, it's been recreated with built-in grid and utility classes.
            </p>

            <div class="d-flex justify-content-center">
                <ul class="list-group list-group-horizontal list-group-flush" id="activity-badges">
                    <!-- ----------------------------------- -->
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                       
                      <?php $attivita = recuperaAttivita() ?>  
                        
                        <?php echo '<li class="list-group-item"><span class="badge rounded-pill text-bg-primary">'.  $attivita   . '</span></li>'?>
                    <?php  } ?>
                </ul>
            </div>

            <div class="d-flex justify-content-center">
                <ul class="list-group list-group-horizontal list-group-flush">
                    <li class="list-group-item"><span class="badge rounded-pill text-bg-primary">INSERIRE BADGE QUI</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="username" name="username">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>
   
</body>



</html>