<?php

$student  = ['prima', 'likhi', 'toha', 'nabin','izma'];
$searchElement = "nabin" ;

foreach ($student as $element) {
    if ($element === $searchElement) {
        echo "$element";

    }
}

?>