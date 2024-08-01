<?php 
class user
    {
        public $db;  // Declare the property
        
        function __construct(){        
            $conn=mysqli_connect('localhost','root','','agrimart');
            $this->db=$conn;  //Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert($fname,$lname,$email,$username,$pass,$mobile,$address,$role)
        {
            $sql="INSERT INTO `users`(`fname`,`lname`,`email`,`username`,`pass`,`mobile`,`address`,`user_role`) 
            VALUES ('$fname','$lname','$email','$username','$pass','$mobile','$address','$role')"; 
                
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
        function delete($id)
        {
            $sql = "DELETE FROM `users` WHERE `id`='$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }
        function view()
        {
                
            $sql = "SELECT * FROM `users`";
            $res = mysqli_query($this->db,$sql);
            return $res;
        }
    }
    $obj = new user();
    if (isset($_POST['submit'])) {
        
        $fname= $conn->real_escape_string($_POST['fname']);
        $lname= $conn->real_escape_string($_POST['lname']);
        $email= $conn->real_escape_string($_POST['email']);
        $username= $conn->real_escape_string($_POST['username']);
        $pass=$conn->real_escape_string(md5($_POST['password']));
        $mobile=$conn->real_escape_string($_POST['mobile']);
        $address=$conn->real_escape_string($_POST['address']);
        $role=$conn->real_escape_string($_POST['role']);
        /*

                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $pass=$_POST['pass'];
                $role=$_POST['role'];
            */  
        $result=$obj->insert($fname,$lname,$email,$username,$pass,$mobile,$address,$role);
        
        if ($result==true) {
          header("Location:login.php");
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
        elseif (isset($_POST['delete'])) {
        $id = $_POST['user_id'];
        $res = $obj->delete($id);
        if ($res) {
            header("location:user.php");
        } else {
            echo "not deleted";
        }
    }
?>