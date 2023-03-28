<?php


class crud{
    private $conn;


    public function __construct(){
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test";


$this->conn = mysqli_connect($hostname, $username, $password, $database);


if(!$this->conn){


    die("connection field" . mysqli_connect_error());


}
else{
   echo "created succesfully";


        }

     }

    public function logifng_data($data){
            
        $user_name=$data['user_name'];
        $user_pass=md5($data['user_pass']);
        $query="SELECT * FROM `user_tabel` WHERE user_name='$user_name' && user_pass='$user_pass'";
        if(mysqli_query($this->conn ,$query)){
           $add_info=mysqli_query($this->conn ,$query);
           if($add_info){
           header ("location:dashboard.php");
            session_start();
            $info=mysqli_fetch_assoc($add_info);
            $_SESSION['userId']=$info['id'];
            $_SESSION['userName']=$info['user_name'];

        }
    }
    }




        }
     
    
   


?> 