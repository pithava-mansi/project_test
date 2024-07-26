<?php 
class users
    {
        public $db;  // Declare the property
        
        function __construct(){        
            $conn=mysqli_connect('localhost','root','','agrimart');
            $this->db=$conn;  //Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert($fname,$lname,$email,$username,$pass,$role)
        {
            $sql  = "INSERT INTO `users`(`fname`,`lname`,`email`,`username`,`pass`,`user_role`) VALUES ('$fname','$lname','$email','$username','$pass','$role')";       
            $res=mysqli_query($this->db,$sql);
            return $res;
        }
        /*
        function update($id, $course)
        {
            $sql = "UPDATE `courses` SET `course`='$course' WHERE `course_id`='$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }
        function delete($id)
        {
            $sql = "DELETE FROM `courses` WHERE `course_id`='$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }*/
        function view()
        {
                
            $sql = "SELECT * FROM `users`";
            $res = mysqli_query($this->db,$sql);
            return $res;
        }
    }
    $obj = new users();
    if (isset($_POST['submit'])) {
        
        $fname= $conn->real_escape_string($_POST['fname']);
        $lname= $conn->real_escape_string($_POST['lname']);
        $email= $conn->real_escape_string($_POST['email']);
        $username= $conn->real_escape_string($_POST['username']);
        $pass=$conn->real_escape_string(md5($_POST['password']));
        $role=$conn->real_escape_string($_POST['role']);
/*

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $role=$_POST['role'];
      */  
        $result=$obj->insert($fname,$lname,$email,$username,$pass,$role);
        
        if ($result==true) {
          header("Location:login.php");
          die();
        }else{
          $errorMsg  = "You are not Registred..Please Try again";
          echo $errorMsg;
        }   
    }/*
    if (isset($_POST['update'])) {
        $id = $_POST['course_id'];
        $course = $_POST['course'];
    
        $res = $obj->update($id, $course);
        if ($res) {
            header("location:courses.php");
        } else {
            echo "alert('data not updated successfully')";
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        // $id=$_POST['course_id'];
        $res = $obj->delete($id);
        if ($res) {
            header("location:courses.php");
        } else {
            echo "not deleted";
        }
    }*/
    
    //$obj1=new courses();
?>