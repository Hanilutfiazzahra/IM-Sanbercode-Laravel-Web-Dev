<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Looping</title>

</head>

<body>

    <h1>Berlatih Looping</h1>    
     <?php 

        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "<h5> LOOPING PERTAMA <br> </h5>";
      
        for($i = 2; $i < 21 ; $i+=2 ){
        echo $i . " - I LOVE PHP <br> <br>";
        }

        echo "<h5> LOOPING KEDUA <br> </h5>";

        for($i = 20; $i > 1 ; $i-=2 ){
        echo $i . " - I LOVE PHP <br> <br>";
        }

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";

        $numbers = [18, 45, 29, 61, 47, 34];

        echo "array numbers: ";

        print_r($numbers);
       
        echo "<br>";

        echo "Array sisa baginya adalah:  "; 
        foreach ($numbers as $value) {
            $rest[] = $value % 5;
        }
        print_r($rest);
        echo "<br>";      

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";

        $items = [

            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 

            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

        ];

        foreach ($items as $key => $value) {
            $items = [
                'id' => $value[0],
                'name' => $value[1],
                'price' => $value[2],
                'description' => $value[3],
                'source' => $value[4]
            ];
            print_r($items);
            echo "<br> <br>";
        }

        echo "<h3>Soal No 4 Asterix </h3>";

        echo "Asterix: ";

        echo "<br>";

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }

        echo "<br>";        

    ?></body>

</html>