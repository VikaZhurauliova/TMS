<?php
$name = $_POST['text'];
$result = preg_match('/^[\S\w]{2,20}\.(png|jpeg|jpg|pdf)$/', $name);
if ($result = true){
    if ($_FILES) {
        $filename = __DIR__ . '/' . $name;
        move_uploaded_file($_FILES['file']['tmp_name'],$filename);
    }
} else {
    return 'error';
}
