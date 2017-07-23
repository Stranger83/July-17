<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
    function chooseShade($color, $shade): string {
        $colors = [0, 0, 0];
        $colors[$color] = $shade * 51;
        return "rgb($colors[0], $colors[1], $colors[2])";
    }
    for ($i = 1; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
        echo "<td style='background-color: " . chooseShade($j, $i) . "'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>