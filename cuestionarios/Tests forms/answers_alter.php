<?php

$score = 0;

if(isset($_REQUEST['calculate'])){
    $answer1 = $_REQUEST['answer1'];
    $answer2 = $_REQUEST['answer2'];
    $answer3 = $_REQUEST['answer3'];
    $answer4 = $_REQUEST['answer4'];
    $answer5 = $_REQUEST['answer5'];
    $answer6 = $_REQUEST['answer6'];
    $answer7 = $_REQUEST['answer7'];
    $answer8 = $_REQUEST['answer8'];
    $answer9 = $_REQUEST['answer9'];
    $answer10 = $_REQUEST['answer10'];
    
    echo $score = $answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10;
    
}

/*
if(isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3']) && isset($_POST['answer4']) && isset($_POST['answer5']) && isset($_POST['answer6']) && isset($_POST['answer7']) && isset($_POST['answer8'])&& isset($_POST['answer9']) && isset($_POST['answer10'])){    
    
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    $answer6 = $_POST['answer6'];
    $answer7 = $_POST['answer7'];
    $answer8 = $_POST['answer8'];
    $answer9 = $_POST['answer9'];
    $answer10 = $_POST['answer10'];
    
    if($answer1 == 1){
    $score++;
    }

    if($answer2 == 1){
        $score++;
    }

    if($answer3 == 1){
        $score++;
    }
    if($answer4 == 1){
        $score++;
    }

    if($answer5 == 1){
        $score++;
    }

    if($answer6 == 1){
        $score++;
    }
    if($answer7 == 1){
        $score++;
    }

    if($answer8 == 1){
        $score++;
    }

    if($answer9 == 1){
        $score++;
    }

    if($answer10 == 1){
        $score++;
    }       
}
*/



