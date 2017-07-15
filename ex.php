<?php
const name="gosho";
$name="pesho";
echo name; /*printira gosho*/
echo "<br/>"; /*nov red*/
echo $name; /*printirra pesho*/

echo gettype( $name); /*printirra tipa*/
$name1="Peshoo";
$age=24;
$greeting="My name is $name and I am $age";
echo $greeting; /*My name is pesho and I am 24*/
echo "<br/>";
$greeting1='My name is $name and I am $age';
echo $greeting1; /*My name is $name and I am $age*/
/*nqma char*/

$count=20;
if(isset($count)){
    echo "<br/>";
    echo $count;
    echo "<br/>";
echo "yes $count exists";
}

/*SET I UNSET SAMO KOGATO SA KLUCHOVE NA MASIV SE POLZVAT*/


$delete=10;
unset($delete);
if(isset($delete)){
    echo "<br/>";
    echo $delete;
    echo "<br/>";
    echo "delete exists";
    echo "<br/>";

}
else{
    echo "<br/>";

    echo "no";
}
/*...................*/
/*=== ako dvete promenlivi ne sa edin tip, ne gi proverqva if/else*/
/*== sravnqva gi, daje da ne sa edin tip*/

$name3="6";
echo "<br/>";
if(!filter_var($name3,filter_validate_int)){
    echo "NE moje da se parse-ne";
    echo "<br/>";

}
else{
    echo "<br/>";
echo " MOJE da se parse-ne";
}
