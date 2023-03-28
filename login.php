<?php

include_once("functional.php");
$obj = new crud();

if (isset($_POST['btn_data'])) {
    $obj->loging_data($_POST);
}

session_start();

if(isset($_SESSION['userId'])){
     $id=$_SESSION['userId'];
}
if(isset($id)){
     header("location:dashboard.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" mthod="POST">
        <div class="container">
            <div class="sujon">
                <h1>Login form</h1>
                <label for="name">User name</label>
                <input type="text" name="user_name">
                <br><br>
                <label for="name">User Pass</label>
                <input type="text" name="user_pass"><br><br>
                <input type="submit" name="btn_data" value="Loging" id="am">
            </div>
        </div>

    </form>
</body>

</html>
<style>
    body {
        background-color: skyblue;
    }

    .container {
        background-color: gray;
        height: 400px;
        width: 500px;
        margin: 80px auto;
    }

    .sujon {

        text-align: center;
        padding-top: 80px;
    }

    input {
        width: 200px;
        border-radius: 5px;
        ;
        height: 28px;
        padding: 5px;
    }

    #am {
        background-color: green;


    }
</style>