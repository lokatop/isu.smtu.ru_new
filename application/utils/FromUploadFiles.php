<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);



$error=array();
if ($_POST) {

    $Subject = $_POST['subject'];
    $Topic = $_POST['topic'];
    $Semester = $_POST['semester'];
    $Rating = $_POST['rating'];

    if (trim($Subject)=='')$error[] = "Введите название предмета";
    else if(strlen($Subject) > 100) $error[]="Слишкое длинное название предмета";
    if (trim($Topic)=='')$error[] = "Введите название темы";
    else if(strlen($Topic) > 200) $error[]="Слишкое длинное название темы";
    if (trim($Semester)=='')$error[] = "Введите семестр";
    else if((int)$Semester >4 && (int)$Semester<1) $error[]="Семестр может быть в диапазоне от 1 до 4";
    if (trim($Rating)=='')$error[] = "Введите оценку";
    else if((int)$Rating >5 && (int)$Rating<1) $error[]="Оценка может быть в диапазоне от 1 до 5";

}
?>