<!-- sintassi per aprire porta php -->
<?php

$paragrafo = $_GET['paragrafo'];

$parolaccia = $_GET['parola'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
// conta la lunghezza della stringa
$lunghezza = strlen($paragrafo)

?>

<div class="container">
    <h1 class="text-center">Risultati php</h1>
    <div class="row">
        <div class="col-8">
            <h3 class=" my-2 ">Paragrafo riportato</h2>
            <div class=" border  border-black text-center border-3 rounded-3 fs-4 mx-2 "><?php echo $paragrafo; ?></div>
        </div>
        <?php
        // andiamo a modificare la stringa tramite str_replace (parola da trovare , come lo sostituiamo e dove cercare)
        $Testo_modificato = str_replace($parolaccia,"***",$paragrafo);
        // conta la lunghezza della stringa dopo la modifica
        $lunghezza_modificata = strlen($Testo_modificato);
        ?>
        <div class="col-4">
            <h3 class=" my-2 ">Lunghezza paragrafo</h2>
            <div class=" border  border-black text-center border-3 rounded-3 fs-2 mx-2"><?php echo $lunghezza; ?></div>
        </div>
        

    </div>
    <div class="row my-5">
    <div class="col-7">
            <h3 class=" my-2 ">Paragrafo riportato con modifiche</h2>
            <div class=" border  border-black text-center border-3 rounded-3 fs-4 mx-2 "><?php echo $Testo_modificato; ?></div>
        </div>
        <div class="col-5">
            <h3 class=" my-2 ">Lunghezza paragrafo con modifiche</h2>
            <div class=" border  border-black text-center border-3 rounded-3 fs-2 mx-2"><?php echo $lunghezza_modificata; ?></div>
        </div>
    </div>
</div>
    




<!-- link bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>