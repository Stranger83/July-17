<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
function drawALine(){
    for ($i = 0; $i < 5; $i++) {
    echo "<button style='background-color: blue'>1</button>";
    }
    echo "<br/>";
}
function draw1Plus4(){
    for ($i = 0; $i < 5; $i++) {
        if ($i == 0) {
            echo "<button style='background-color: blue'>1</button>";
        }
        else{
            echo "<button>0</button>";
        }
    }
    echo "<br/>";
}
function draw4Plus1(){
    for ($i = 0; $i < 5; $i++) {
        if ($i == 4) {
            echo "<button style='background-color: blue'>1</button>";
        }
        else{
            echo "<button>0</button>";
        }
    }
    echo "<br/>";
}
drawALine();
for ($i = 0; $i < 3; $i++) {
    draw1Plus4();
}
drawALine();
for ($i = 0; $i < 3; $i++) {
    draw4Plus1();
}
drawALine();
?>
</body>
</html>