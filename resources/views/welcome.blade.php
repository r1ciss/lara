<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre><?php
$fruits = ["orange", "banana", "c", "apple"];
foreach ($fruits as $index => $fruit) {
    echo ($index + 1) . '. ' . $fruit . PHP_EOL;
}
?></pre>

</body>
</html>