<?php
include "ComparableCircle.php";
$circleone = new Circle("ass",4);
$circleteo = new Circle("asada",3);
$hinhtron = new ComparableCircle();
echo $hinhtron->compareTo($circleone,$circleteo);