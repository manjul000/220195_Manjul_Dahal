<?php
echo "My name is Lakhan.<br>";
//Single Line Comment
#Single Line Comment
/*Multi
Line
Comment
*/
$xyz = "Welcome<br>";
$XYZ = "BACCK<br>"; #Variable names are case sensitive and starting with $ and then letters(a-z/A-Z) or underscore with anyting else.

echo $xyz;
echo $XYZ;

var_dump($XYZ); # function (shows the data type and the data)

$a = 1; #int
$b = "String"; #string
$c = TRUE; #boolean
$d = 4.4; #float
$e = array("Anamol","Nisha","Narendra"); #array

echo $a + $d . "<br>";

echo $e[0]. "<br>"; # . is to add string (concatanate)
echo $e[1]. "<br>";
echo $e[2]. "<br>";

$t = 10; #assignment operator
if ($t == "20"){ #comparison operator
    echo "I have Rs.20";
}
else{
    echo "I don't have Rs.20<br>";
}

$num = 7;
for ($x=1;$x<=10;$x++) {
    $mul = $num * $x;
    echo $num . "*" . $x . "=" . $mul . "<br>"; #<br> = \n
}

while($num<=10){
    echo $num . "\n";
    $num++;
}

do {
    echo $num . "\n";
    $num--;
}while($num>=7);
?>