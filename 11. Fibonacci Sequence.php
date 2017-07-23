<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $firstNum = 0;
    $secondNum = 1;
    $next = 0;
    for ($i = 1; $i <= intval($_GET['num']); $i++) {
        if ($i <= 1) {
            $next = 1;
        } else {
            $next = $firstNum + $secondNum;
            $firstNum = $secondNum;
            $secondNum = $next;
        }
        echo "$next ";
    }
}
?>
</body>
</html>