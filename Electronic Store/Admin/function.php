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
    function getProduct(){
        global $connection;
        $sql="SELECT * FROM `tbl_sale_product`";
        $data=$connection->query($sql);
        while($row=$data->fetch_assoc()){
            echo '
            <tr>
                    <td>'.$row['code'].'</td>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['category'].'</td>
                    <td>
                        <img class="rounded" width="100px" src="../Image/'.$row['image'].'" alt="">
                    </td>
                    <td>
                        <button class="btn  btn-warning me-2"><i class="bi bi-pencil-square me-2"></i>Edit</button>
                        <button class="btn  btn-danger btnDelete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3 me-2"></i>Delete</button>
                    </td>
                </tr>
            ';
        }
    }
    function deleteProduct(){
        if(isset($_POST['delete'])){
            $hide_id=$_POST['hide_id'];
            global $connection;
            $sql="DELETE FROM `tbl_sale_product` WHERE `code`=$hide_id";
            $connection->query($sql);
        }
    }
    deleteProduct();
?>