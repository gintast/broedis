<?php


// Nuo 0 iki bagalybes
// $sk = rand(0, 10);
// while ($sk < 9) {
//    echo $sk . '<br>';
//    $sk = rand(0, 10);
// }


// Nuo 1 iki begalybes
// do {
//     $sk = rand(0, 10);
//     echo $sk . '<br>';
// } while ($sk < 9);


// Iteraciju kiekis zinomas
for ($x = 1; $x <= 5; $x++) {

    if ($x == 3) {
        continue;
    }

    echo 'Numeris: '.$x.' <br>';
}


foreach(range('a', 'z') as $val) {
    if ($val == 3) {
        continue;
    }

    echo 'Numeris: '.$val.' <br>';
}




// for ($a = 1; $a <= 5; $a++) {

//     echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';

//     for ($x = 1; $x <= 5; $x++) {
//         continue 2;
//         echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
        
//         echo 'Be be <br>';
//     }

//  }



// $sk = rand(0, 10);
// while (true) {
//     echo 'START<br>';
//     echo $sk . '<br>';
//     echo 'END<br>';

//     $sk = rand(0, 10);
//     if ($sk > 9) {
//         break;
//     }

// }


// echo md5("123");
// echo '<br>';
// echo md5("123");
// echo '<br>';
// echo password_hash("124", CRYPT_BLOWFISH);

 
 
