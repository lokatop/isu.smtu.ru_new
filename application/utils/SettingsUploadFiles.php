<?php
if (isset($_FILES['uploadedFile'])){
    $errors = array();
    $file_name = $_FILES['uploadedFile']['name'];
    $file_size = $_FILES['uploadedFile']['size'];
    $file_tmp = $_FILES['uploadedFile']['tmp_name'];
    $file_type = $_FILES['uploadedFile']['type'];
    $tmp = explode('.', $file_name);
    $file_ext = strtolower(end($tmp));

    //$file_ext = strtolower(end(explode('.',$_FILES['uploadedFile']['name'])));//расширение показывает

    $extensions = array("jpeg","jpg","pdf");

    if ($file_size > 20971520){
        $errors[] = '<p>Файл должен быть не более 20 МБ</p>';
    }
    if (!in_array($file_ext,$extensions)){
        $errors[] = '<p>Не подходящее расширение, загрузите другой файл</p>';
    }

    if (empty($errors)){
        if(move_uploaded_file($file_tmp,"uploadedFiles/".$file_name)){
            $message ='File is successfully uploaded.';
        }else{
            $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        };
        foreach ($_FILES['uploadedFile'] as $key => $value ){
            echo "<P>$key=>$value</p>";
        }
        echo "$file_ext + ' ' + $message ";
    }else{
        foreach ($errors as $k){echo "$k";}
    }
}

?>