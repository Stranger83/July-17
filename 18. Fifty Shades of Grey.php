<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
<?php
$color = 0;
for ($rows = 0; $rows < 5; $rows++) {
if ($rows != 0){
    $color += 1;
}
    for ($cols = 0; $cols < 10; $cols++) {
     echo "<div style='background-color: rgb($color, $color, $color)'></div>";
     $color += 5;
    }
    echo "<br/>";
}
?>
</body>
</html>