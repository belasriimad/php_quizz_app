<?php
session_start();
include('database.php');

if($_POST){
    $number = $_POST['number'];
    $seleted_choice = $_POST['choice'];
    $next_question = $number+1;

    $query = 'SELECT * FROM `questions`';
    $result_total = $mysqli->query($query);
    $total = $result_total->num_rows;

    $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";

    $result = $mysqli->query($query);

    $row = $result->fetch_assoc();

    $correct_choice = $row['id'];

    if($correct_choice == $seleted_choice){
        $_SESSION['score'] += 1;
    }

    if($number == $total){
        header("location:final.php");
        exit();
    }else{
        header("location:question.php?n=".$next_question);
        exit();
    }
}