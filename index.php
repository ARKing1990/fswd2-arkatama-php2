<?php
function menu1($row = 5, $simbol = "*"){
    echo "Triangle Upside Left <br>";
    for ($i = 1; $i <= $row; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo "$simbol ";
        }
        echo "<br>";
    }
}

function menu2($row = 5, $simbol = "*"){
    echo "Triangle Downside Left <br>";
    for ($i = $row; $i >= 1; $i--){
        for ($j = 1; $j <= $i; $j++){
            echo "$simbol ";
        }
        echo "<br>";
    }
}

function menu3($row = 5, $simbol = "*"){
    echo "Triangle Upside Right <br>";
    for ($i = 1; $i <= $row; $i++){
        for ($j = $row; $j > $i; $j--){
            echo "&nbsp;&nbsp";
        }
        for ($x = 1; $x <= $i; $x++){
            echo $simbol;
        }
        echo "<br>";
    }
}

function menu4($row = 5, $simbol = "*"){
    echo "Triangle Downside Right <br>";
    for ($i = 1; $i <= $row; $i++){
        for ($x = 1; $x < $i; $x++){
            echo "&nbsp;&nbsp";
        }
        for ($j = $row; $j >= $i; $j--){
            echo $simbol;
        }
        echo "<br>";
    }
}

function callpattern($a) {
    switch ($a) {
        case "menu1":
            menu1(5);
            break;
        case "menu2":
            menu2(5);
            break;
        case "menu3":
            menu3(5);
            break;
        case "menu4":
            menu4(5);
            break;
        default:
            echo "Salah input";
    }
}

echo "Soal 1 <br>";
menu1();
menu2();
menu3();
menu4();

echo "<hr>Soal 2 <br>";
callpattern("menu4");
callpattern("menu3");
callpattern("menu2");
callpattern("menu1");

echo "<hr>Soal 3 <br>";
menu1(6, "$");
menu2(10, "@");
menu3(9, "#");
menu4(6);
?>