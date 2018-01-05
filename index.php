<?php
    foreach ($_POST as $item){
        if($item == ''){
          echo 'Empty item is not allowed!';
          exit();
        }
    }
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $skill = htmlspecialchars($_POST['skill']);
    $stuid = htmlspecialchars($_POST['stuid']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    try{
        $mysqli = mysqli_connect('127.0.0.1','root','123456','multmedia','3306');
        $query = "insert into student (name,age,skill,stuid,email,tel) values ('$name','$age','$skill','$stuid','$email','$tel')";
        if ($mysqli->query($query)){
            echo "join success!";
        }
        $mysqli->close();
    }catch (Exception $exception){
        echo $exception;
    }