<?php //Grading System: Write a PHP program that accepts a student’s marks and outputs their grade using if-else conditions (A, B, C, D, Fail based on score). ?>


<?php 
function getGrade($marks){
    if ($marks >= 90){
        return "A";
    }
    elseif($marks >= 80){
        return "B";
    }
    elseif($marks >=70){
        return "C";
    }
    elseif($marks >=60){
        return "D";
    }
    else {
        return "Fail";
    }
}
$studentmarks =85;
echo "student's grade : " .getGrade($studentmarks);

?>