<?php
var_dump($_POST);
$patternEmail = '/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/';
$patternPassWord = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}$/';
if(preg_match($patternEmail, $_POST['email']) && preg_match($patternPassWord, $_POST['password'])){
        echo "<br> dang nhap thanh cong <br>";
    }else{
        echo "<br> dang nhap that bai <br>";
    }
?>
<a href='signin.php'>quay lai dang nhap</a>