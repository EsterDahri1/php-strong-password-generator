<!--
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->



<?php



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2 class="text-white">Genera una password sicura</h2>
        <div class="p-2 bg-info bg-opacity-25">Nessun parametro inserito</div>

        <form class="rounded-2 bg-light" action="index.php" method="GET">
            <div class="passleng d-flex justify-content-between align-items-center">
                <label for="passLength">Lunghezza password:</label>
                <input type="number" name="passLength" id="passLength">
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <label for="characters">Consenti ripetizioni di uno o più caratteri:</label>
                <input type="radio" name="characters" id="characters"> Sì
                <input type="radio" name="characters" id="no_characters"> No
            </div>

            <div class="">
                <input type="checkbox" name="letters" id="letters"> Lettere <br>
                <input type="checkbox" name="numbers" id="numbers"> Numeri <br>
                <input type="checkbox" name="symbols" id="symbols"> Simboli
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Invia</button>
                <button class="btn btn-dark" type="reset">Annulla</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>