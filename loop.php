<html>
<head>
<title>PHP Loops Assignment</title>
<style>
body{
font-family: Arial;
margin:40px;
}

pre{
background:#f4f4f4;
padding:20px;
border-radius:6px;
}
</style>
</head>

<body>

<h1>PHP Loops Assignment</h1>

<h2>PHP Code</h2>

<pre>
&lt;?php
// For loop 1-18
for ($i = 1; $i &lt;= 18; $i++) {
    echo $i . " ";
}

// While loop 1-27
$i = 1;
while ($i &lt;= 27) {
    echo $i . " ";
    $i++;
}

// Do while 1-15
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i &lt;= 15);

// Sum of odd numbers 2-21
$sum = 0;
for ($i = 2; $i &lt;= 21; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}
echo $sum;

// Product of even numbers 3-17
$product = 1;
for ($i = 3; $i &lt;= 17; $i++) {
    if ($i % 2 == 0) {
        $product *= $i;
    }
}
echo $product;
?&gt;
</pre>

<h2>Output</h2>

<?php

echo "<strong>For Loop (1–18):</strong><br>";
for ($i = 1; $i <= 18; $i++) {
    echo $i . " ";
}

echo "<br><br>";

echo "<strong>While Loop (1–27):</strong><br>";
$i = 1;
while ($i <= 27) {
    echo $i . " ";
    $i++;
}

echo "<br><br>";

echo "<strong>Do While Loop (1–15):</strong><br>";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 15);

echo "<br><br>";

$sum = 0;
for ($i = 2; $i <= 21; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo "<strong>Sum of odd numbers (2–21):</strong> $sum";

echo "<br><br>";

$product = 1;
for ($i = 3; $i <= 17; $i++) {
    if ($i % 2 == 0) {
        $product *= $i;
    }
}

echo "<strong>Product of even numbers (3–17):</strong> $product";

?>

</body>
</html>
