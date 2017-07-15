<?php
$x=32;
$y=3;
echo $x <=> $y;
/*vrushta 1 --> x>y*/





/*newwwwwwwww*/
<?php
$x=[1,3,13,4,0];
usort($x,function ($e1,$e2){
    return $e2 <=> $e1;
});

var_dump($x);
/*
 * array (size=5)
  0 => int 13
  1 => int 4
  2 => int 3
  3 => int 1
  4 => int 0*/
