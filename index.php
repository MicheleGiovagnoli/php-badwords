<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Badwords</title>
</head>
<body>
    <form action="./myphp.php" method="GET">
        <div class="paragrafo">
            <label for="paragrafo">paragrafo:</label>
            <textarea id="paragrafo" name="paragrafo"></textarea>
        </div>
        <div class="censura">
            <label for="censura"></label>
            <input type="text" name="censura" id="censura">
        </div>
        <button type="submit">invia</button>
    </form>
</body>
</html>