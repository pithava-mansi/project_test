<?php 
class feedback
    {
        public $db;  // Declare the property
        
        function __construct(){        
            $conn=mysqli_connect('localhost','root','','agrimart');
            $this->db=$conn;  //Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert($name,$email,$message)
        {
            $sql="INSERT INTO `feedback`(`name`,`email`,`message`) 
            VALUES ('$name','$email','$message')"; 
                
            $res=mysqli_query($this->db,$sql);
            return $res;
        }
        /*
        function update()
        {
            $sql = "UPDATE `users` SET ``='' WHERE `id`=''";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }*/        
        function view()
        {
                
            $sql = "SELECT * FROM `feedback`";
            $res = mysqli_query($this->db,$sql);
            return $res;
        }
    }
    $obj = new feedback();
    if (isset($_POST['submit'])) {
        
      

        $result=$obj->insert();
        
        if ($result==true) {
          header("Location:feedback.php");
          die();
        }else{
          $errorMsg  = "You are not Registred..Please Try again";
          echo $errorMsg;
        }   
    }/*
    if (isset($_POST['update'])) {
        $id = $_POST['user_id'];
        $course = $_POST[''];
    
        $res = $obj->update();
        if ($res) {
            header("location:users.php");
        } else {
            echo "alert('data not updated successfully')";
        }
    } */
        // elseif (isset($_POST['delete'])) {
        // $id = $_POST['user_id'];
        // $res = $obj->delete($id);
        // if ($res) {
        //     header("location:user.php");
        // } else {
        //     echo "not deleted";
        // }}
    
?>