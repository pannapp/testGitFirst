<?php
echo "while: <br>";
$x=1;
while ($x<=5){
    echo "$x ";
    $x++;
}
echo "<br>do..while<br>";
$x=1;
do{
    echo "$x ";
    $x++;
}while($x<=5);
echo "<br>for: <br>";
for($x=1;$x<=5;$x++){
    echo "$x ";
}
echo "<br>foreach:<br>";
$color = array("red", "blue" , "yellow", "orange");
foreach ($color as $i){
    echo "$i\t ";
}


?>

