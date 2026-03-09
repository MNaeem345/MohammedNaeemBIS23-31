<!DOCTYPE html>
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
border-radius:5px;
}

button{
padding:10px 20px;
font-size:16px;
margin-bottom:20px;
}
</style>

</head>

<body>



<a href="index.html"><button>Back to Course Work</button></a>

<h1>PHP Loops Assignment</h1>

<pre>

&lt;?php

// 1) For loop printing 1 to 18
for ($i = 1; $i &lt;= 18; $i++) {
    echo $i . " ";
}


// 2) While loop printing 1 to 27
$i = 1;
while ($i &lt;= 27) {
    echo $i . " ";
    $i++;
}


// 3) Do-while loop printing 1 to 15
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i &lt;= 15);


// 4) Sum of odd numbers from 2 to 21
$sum = 0;

for ($i = 2; $i &lt;= 21; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo "Sum: " . $sum;


// 5) Product of even numbers from 3 to 17
$product = 1;

for ($i = 3; $i &lt;= 17; $i++) {
    if ($i % 2 == 0) {
        $product *= $i;
    }
}

echo "Product: " . $product;

?&gt;

</pre>

</body>
</html>
