<?php
include "Circle.php";
include "Comparable.php";

class ComparableCircle implements Comparable
{
    public function compareTo($circleOne,$circleTwo)
    {
        $radius1 = $circleOne->getRadius();
        $radius2 = $circleTwo->getRadius();
        if ($radius1 > $radius2) {
            return 1;
        } else if ($radius1 < $radius2) {
            return 2;
        } else {
            return 0;
        }
    }

}