<!--
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->



<?php
include __DIR__ . '/functions.php';

//var_dump($_GET);

if (isset($_GET['pass_length'])) {
    $length = $_GET['pass_length'];
    $password = generatePassword($length);
    //var_dump($password);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body style="background-color: #001632;">


    <div class="container">

        <h1 class="text-center p-3 text-secondary text-opacity-50">Strong Password Generator</h1>
        <h2 class="text-white text-center p-2">Genera una password sicura</h2>

        <?php if (!empty($password)) : ?>
            <div class="alert alert-primary" role="alert">
                <strong>Password:</strong> <?php echo $password; ?>
            </div>
        <?php endif; ?>



        <form class="rounded-2 bg-light p-4" action="index.php" method="GET">
            <div class="mb-3">
                <label for="pass_length" class="form-label">How many characters do you want for your password?</label>
                <input style="width: 250px;" type="number" name="pass_length" id="pass_length" class="form-control" placeholder="10" aria-describedby="helpId">
                <small id="passwordlengthHelper" class="text-muted">Insert a number</small>
            </div>
            <button class="btn btn-primary" type="submit">Generate</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>