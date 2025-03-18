<h1>ê mới cập nhật nè, ừa tôi biết rồi</h1>

<?php
$hoten = array("Pham", "Anh", "Ngu");
echo "Ho: $hoten[0], Ten dem: $hoten[1], Ten: $hoten[2]<br>";
echo 'Ho:' .$hoten[0].', Ten dem: '.$hoten[1].', Ten: '.$hoten[2].'<br>';

echo count($hoten);
echo '<br>';
for($i=0;$i<count($hoten);$i++){
    echo $hoten[$i];
    echo ' ';
}

$age= array(
    "Petter" => "35",
    "Ben" => "15",
    "Joe" => "43"
);
echo "<br>Petter is $age[Petter] years olds.<br>";

foreach ($age as $key => $value){
    echo "$key: $value<br>";
}

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 2, 52),
    array("Saab", 3, 231),
    array("Land Rover", 53, 321)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold:
".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold:
".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold:
".$cars[2][2].".<br>";echo $cars[3][0].": In stock: ".$cars[3][1].", sold:
".$cars[3][2].".<br>";

for($row=0;$row<4;$row++){
    echo "<b>Row $row</b><br>";
    for($col=0; $col<3; $col++){
        echo "{$cars[$row][$col]} ";
    }
    echo '<br>';
}



?>
