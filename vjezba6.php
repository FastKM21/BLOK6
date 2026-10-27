<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            border: 2px solid black;
            border-collapse: collapse;
        }
        .table td, .table th{
            border: 2px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
var_dump(5 ==  "5");
echo "<br>";
var_dump(5 === "5");
echo "<br>";
var_dump(0 == "");
echo "<br>";
var_dump("abc" == 0);
echo "<br>";
var_dump(null == false);
echo "<br>";
echo "<br>";


$sat=9;
$dan=5;

if($sat >= 9 && $sat <=15 && $dan >= 1 && $dan <=5){
    echo "true";
}else{
    echo "false";
}
echo "<br>";echo "<br>";

$tecaj= 7.53450;
$proizvod=60;
$godina=2026;
$hr_valuta = $proizvod*$tecaj;
if ($godina < 2023){
    $ispis = $hr_valuta;
} elseif ($godina == 2023) {
    $ispis = "$proizvod € ($hr_valuta kn)";
} elseif ($godina > 2023) {
    $ispis = $proizvod;
} else {
    $ispis = "";
}
echo "<br>";echo "<br>";

$dan = (int)date("N");;
$nazivDana = match($dan){
    1 => "ponedjeljka",
    2 => "utorak",
    3 => "srijeda",
    4 => "cetvrtak",
    5 => "petak",
    6 => "subota",
    7 => "nedjelja"
};
echo $nazivDana . "<br>";

$usenik = "Karlo";
echo ("$usenik"."<br>");
switch ($usenik){
    case "Karlo":
        echo ("Ime počinje suglasnikom");
        break;
    case "zdenko":
        echo ("Ime počinje suglasnikom");
        break;
    case "ana":
        echo ("Ime počinje samoglasnikom");
        break;
    default:
        echo("Nepoznat ucenik.");
}


?>

<table class="table">
    <tr>
        <th>Godina</th>
        <th>Ispis</th>
    </tr>
    <tr>
        <td><?php echo "$godina";?></td>
        <td> <?php echo "$ispis";?> </td>
    </tr>
</table>
    
</body>
</html>
