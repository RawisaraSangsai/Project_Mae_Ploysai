<?php
    require_once 'Ad_Connect.php';
    $pro_id=$_POST['editsubmit'];
    $sql="SELECT * FROM Food_Product WHERE Pro_ID='$pro_id'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
    if(isset($_POST['editsubmit'])){
        $pro_id=$_POST['editsubmit'];
        $pro_cost=$_POST['Pro_Cost'];
        $pro_saleprice=$_POST['Pro_Saleprice'];
        $pro_status=$_POST['Pro_Status'];
        $filename=$_FILES['Pro_image']['name'];
        if($filename!=""){
            @unlink('Menu_image/'.$row['Pro_image']);
            move_uploaded_file($_FILES['Pro_image']['tmp_name'],'Menu_Image/'.$filename);
            $sql="UPDATE Food_Product SET Pro_Cost='$pro_cost',Pro_Saleprice='$pro_saleprice',Pro_Status='$pro_status',Pro_Image='$filename'WHERE Pro_id='$pro_id'";
        }
        else{
            $sql="UPDATE Food_Product SET Pro_Cost='$pro_cost',Pro_Saleprice='$pro_saleprice',Pro_Status='$pro_status'WHERE Pro_id='$pro_id'";
            }
        $result=$con->query($sql);
        if(!$result){
            echo"<script>alert('ไม่สามารถบันทึกข้อมูลได้')</script>";
            header('location:Ad_Menu.php');
        }
        else{
            header('location:Ad_Menu.php');
        }
    }
?> 
