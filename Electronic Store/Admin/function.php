<?php 
    $connection=new mysqli('localhost','root','','db_6_7_crud');
    // if($connection){
    //     echo 'Success';
    // }

    function insertProduct(){
        if(isset($_POST['btnSave'])){
            $title=$_POST['title'];
            $price=$_POST['price'];
            $qty=$_POST['qty'];
            $description=$_POST['description'];
            $category=$_POST['category'];
            $image=rand(1,10000).'_'.$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $path='../Image/'.$image;
            move_uploaded_file($tmp_name,$path);
            global $connection;
            $sql="INSERT INTO `tbl_sale_product`( `title`, `price`, `category`, `description`, `qty`, `image`) 
                VALUES ('$title','$price','$category','$description','$qty','$image')";
            $connection->query($sql);    

        }
    }
    insertProduct();

?>