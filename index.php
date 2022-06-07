<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Creare una variabile con un paragrafo di testo a vostra scelta.-->
<?php
$phrase = "Chi sei, Goku non lo sai! Però, presto lo scorpirai! E poi, tu scomparirai!";    
?>
<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<h1>
    La sigla di Dragon Ball inizia con: <?php echo "$phrase" ?> 
</h1>
<p> La frase è composta da <?php echo strlen($phrase) ?> lettere </p>

<!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
<?php
$censor = "***";
$worldCensored = $_GET['userchoice'];
$new_phrase = str_replace($worldCensored, $censor, $phrase)    
?>
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<h1>
<?php echo "$new_phrase" ?> 
</h1>
<p> La frase è composta da <?php echo strlen($new_phrase) ?> lettere </p>
</body>
</html>