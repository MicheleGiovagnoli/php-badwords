<?php
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];

$paragrafoCensurato = str_ireplace($censura, "***", $paragrafo);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versione censurata</title>
</head>
<body>
    <h1>php Badwords</h1>
    <h2>La stringa originale e lunga: <?php echo strlen($paragrafo); ?> caratteri </h2>
    <p><?php echo $paragrafo; ?></p>
    <hr>
    <h2>La stringa censurata e : <?php echo strlen($paragrafoCensurato); ?> caratteri </h2>
    <p><?php echo $paragrafoCensurato; ?></p>
</body>
</html>