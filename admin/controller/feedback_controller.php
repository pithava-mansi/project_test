<?php 
class feedback
    {   
        public $db; // Declare the property
        
        function __construct(){        
            $conn=mysqli_connect('localhost','root','','agrimart');
            $this->db=$conn; // Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert()
        {
            $sql  = "INSERT INTO `feedback`() VALUES ()";       
            $res=mysqli_query($this->db,$sql);
            return $res;
        }
        /*
        function update()
        {
            $sql = "UPDATE `feedback` SET `course`='$course' WHERE `course_id`='$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }
        function delete($id)
        {
            $sql = "DELETE FROM `feedback` WHERE `course_id`='$id'";
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
/*

        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
      */  
        $result=$obj->insert();
        
        if ($result==true) {
          header("Location:");
          die();
        }else{
          $errorMsg  = "error to insert data";
          echo $errorMsg;
        }   
    }/*
    if (isset($_POST['update'])) {
        $id = $_POST[''];
        $= $_POST[''];
    
        $res = $obj->update();
        if ($res) {
            header("location:");
        } else {
            echo "alert('data not updated successfully')";
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        // $id=$_POST[''];
        $res = $obj->delete($id);
        if ($res) {
            header("location:");
        } else {
            echo "not deleted";
        }
    }*/

?>