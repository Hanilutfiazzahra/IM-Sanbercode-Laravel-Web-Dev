<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($name) {
    echo "Halo " . $name . ", Selamat Datang di Sanbercode!<br>";
}

greetings("Bagas");
greetings("Wahyu");
greetings("nama peserta");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverse($kata1) {
    $panjangkata = strlen($kata1);
    $tampung = "";
    for ($i = ($i = $panjangkata - 1); $i >= 0; $i--) {
        $tampung .= $kata1[$i];
    }
    return $tampung;
}

function reverseString ($kata2) {
    $string = reverse($kata2);
    echo "Kata Asli: " . $kata2 . "<br>";
    echo "Kata Terbalik: " . $string . "<br>";
}

reverseString("nama peserta");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($str) {
    $str = strtolower($str); 
    $length = strlen($str);
    $reversed = "";

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    if ($reversed === $str) {
        echo $str . " : true<br>";
        return true;
    } else {
        echo $str . " : false<br>";
        return false;
    }
}

palindrome("civic");   
palindrome("nababan"); 
palindrome("jambaban"); 
palindrome("racecar");  

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return $nilai . " : Sangat Baik <br>";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return $nilai . " : Baik <br>";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return $nilai . " : Cukup <br>";
    } else {
        return $nilai . " : Kurang <br>";
    }
}

echo tentukan_nilai(98);
echo tentukan_nilai(76); 
echo tentukan_nilai(67); 
echo tentukan_nilai(43); 


?>

</body>

</html>
