<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Guest book</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>
    Hello world!
    New hello

    <?php
    $i = 0;
    while ($i++ < 10) echo $i;
    echo "<br>";

    for ($i = 0; $i < 10; $i++) echo $i;
    echo "<br>";

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    foreach ($arr as $value) {
        echo $value;
    }
    ?>

<img src="pic.jpg">

</body>

</html>