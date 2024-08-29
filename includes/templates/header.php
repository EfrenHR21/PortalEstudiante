<?php
    session_start();
    include_once('../model/student.php');
    include_once('../model/teacher.php');
    $student = new student();
    $teacher = new teacher();
    $studentIn = $student->getCurrentStudent();
    $student->setStudent($studentIn);
    $teacherIn = $teacher->getCurrentTeacher();
    $teacher->setTeacher($teacherIn);
    if(empty($studentIn) && empty($teacherIn)){
        header("location:../index.php");
    }else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <header class="cabecera">
        <div class="container">
            <div class="nav-logo">
                <a href="">
                    <img src="../assets/images/logo.jpg" alt="">
                </a>
            </div>
            <div>
                <h1>Bienvenido
                    <?php if(isset($studentIn)){
                            echo $student->getStudent();
                        } if(isset($teacherIn)){
                            echo $teacher->getTeacher();
                    }?> </h1>
                <form action="" method="POST">
                    <?php include("../controller/logout_user.php");?>
                    <input name="btn_logout" type="submit" value="Cerrar Sesión">
                </form>
            </div>
        </div>
    </header>
</body>
</html>
<?php 
    }
?>