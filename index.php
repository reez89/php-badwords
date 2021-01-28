<!-- Istruzioni:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
Fate prima il primo esercizio che trovate nelle slide per far pratica con PHP (non serve pusharlo):
Passare due argomenti allo script: Nome e Cognome.
Lo script dovrà salutare l’interlocutore. -->

<?php
$word = 'ciao come va blablabla';
$newWordDue = $_GET['parola'];
$newWord = str_replace($newWordDue, '***', $word);

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>



    <!-- BADWORDS -->
    <p>Questa è la frase dell'utente : <?php echo $word; ?></p>
    <p>Questa è la sua lunghezza : <?php echo strlen($word); ?></p>
    <p>Modificando la parola tramite get sostituisco quello che voglio : <?php echo $newWord; ?></p>
    <!--xxx BADWORDS -->
    <!-- NOME E COGNOME -->
    <p> Ciao <?php echo $nome . " " . $cognome; ?> </p>
    <!--xxx NOME E COGNOME -->

</body>

</html>