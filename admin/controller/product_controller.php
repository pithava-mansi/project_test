<?php 
class products
    {
        public $db;  // Declare the property

        function __construct(){        
            $conn=mysqli_connect('localhost','root','','agrimart');
            $this->db=$conn; //Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert($product_name,$product_description,$product_price,$folder)
        {
            $sql  = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `product_image`) VALUES ($product_name,$product_description,$product_price,$folder)";       
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
                
            $sql = "SELECT * FROM `products`";
            $res = mysqli_query($this->db,$sql);
            return $res;
        }
    }
    $obj = new products();
    if (isset($_POST['submit'])) {
        $product_name=$_POST['product_name'];
        $product_description=$_POST['product_description'];
        $product_price=$_POST['product_price'];

        $file=$_FILES['product_image']['name'];
	    $tname=$_FILES['product_image']['tmp_name'];
	    $folder="./asset/img".$file;
	    move_uploaded_file($tname,$folder);

        $result=$obj->insert($product_name,$product_description,$product_price,$folder);
        
        if ($result==true) {
          header("Location:index.php");
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
?>