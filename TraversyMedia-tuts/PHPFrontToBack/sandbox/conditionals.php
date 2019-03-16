<?php
 
    # conditionals
    /**
     * ==
     * ===
     * <
     * >
     * <=
     * >=
     * !=
     * !==
     */

     $num = 6;

     if($num == 5){
        // echo '5 passed'. '<br />';
     }elseif ($num == 6) {
        // echo '6 passed'. '<br />';
    }else{
        // echo 'did not passed' . '<br />';
     }
 
     # nesting if

     if($num > 4){
        if ($num < 10){
            // echo "$num passed". '<br />';
        }
     }

     /** logical operators
      * and &&
      * or ||
      * xor
     */

    if($num > 4 XOR $num < 10){ // AND, OR, XOR -> (tylko jedno może być prawdą nigdy oba)
        // echo "$num passed";
    }

    # switch

    $favColor = 'orange';

    switch($favColor){
        case 'red':
            echo 'Your fav color is red';
            break;
        case 'blue':
            echo 'Your fav color is blue';
            break;
        case 'green':
            echo 'Your fav color is green';
            break;
        default:
            echo 'Your fav color is something else';
    }

?>