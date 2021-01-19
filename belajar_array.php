<?php

// mendefinisikan array kosong
// $minuman = array();
// $makanan = [];

// array + isi
// $minuman = array("jus","teh","kopi");
// $makanan =["cimol","cireng","cilok"];

// menampilkan kopi dan cireng menggunakan index
// echo $minuman =[2] . "<br>";
// echo $makanan =[1];
// var dump($makanan);

// array + indeks
// $makanan[0] = "cimol";
// $makanan[1] = "cireng";

// echo $makanan[0];

// var_dump($makanan[0]);


// menampilkan array dengan looping
// $minuman = array("jus","teh","kopi");

// looping foreach
// foreach ($minuman as $data ) {
//     echo $data . "<br>";
// }

// looping for
// for($i = 0; $i <count($minuman); $i++) {
//     echo $minuman[$i] . ", ";
// }

// looping while
// $i = 0;
// while($i < count($minuman)) {
//     echo $minuman[$i] . "<br> ";
//     $i++;
// }

// menghapus isi array
// $makanan = ["cilok","cireng","cimol"];

// unset($makanan[1]);
// echo $makanan[0]."<br>";
// echo $makanan[1]."<br>";
// echo $makanan[2]."<br>";

// menambah isi array
// $makanan = ["cilok","cireng","cimol"];

// $makanan[3]="cilung";
// $makanan[]="cilor";
// array_unshift($makanan,"tahu");

// foreach($makanan as $data){
//     echo $data."<br>";
// }

// array assosiatif
// $data=[
// "nama"=>"Ibnu Mahmudin",
// "alamat"=>"Sawangan",
// "Usia"=>25
// ];

// echo"<p>".$data["table santri"]."</p>";
// echo"<p>".$data["nama"]."</p>";
// echo"<p>alamat:".$data["alamat"]."</p>";
// echo"<p>umur:".$data["Usia"]."</p>";

// array multi dimensi
// $matrik=[
//     [2,3,4],
//     [7,5,0],
//     [4,3,8],
// ];

// echo $matrik[1][0];

// hasilnya = 7

// $matrik = array(
//     //array 0
//     array(2, 3, 4),

//     //array 1
//     array(7, 5, 0),

//     //array 2
//     array(4, 3, 8),

    
// );

$matrik =[
    [4,2,9],
    [1,3,7],
    [8,5,2],
    ];

echo "<p> [1][ini adalah array ke 1 index ke 2]=".$matrik[1][2]."<p/>";
echo "<p> [1][ini adalah array ke 1 index ke 2]=".$matrik[2][2]."<p/>";