<?php
    require_once 'Ad_Connect.php';
    $username=$_POST['editsubmit'];
    $sql="SELECT * FROM Customer WHERE Cust_Username='$username'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
    if(isset($_POST['editsubmit'])){
        $username=$_POST['editsubmit'];
        $FirstName=$_POST['FirstName'];
        $Lastname=$_POST['Lastname'];
        $email=$_POST['email'];
        $Tel=$_POST['Tel'];
        $Address=$_POST['Address'];
        $filename=$_FILES['Cust_image']['name'];
        if($filename!=""){
            @unlink('Cust_image/'.$row['Cust_image']);
            move_uploaded_file($_FILES['Cust_image']['tmp_name'],'Cust_image/'.$filename);
            $sql="UPDATE Customer SET Cust_Firstname='$FirstName',Cust_LastName='$Lastname',Cust_Email='$email',Cust_Image='$filename',Cust_tel='$Tel',Cust_Address='$Address' WHERE Cust_Username='$username'";
        }
        else{
            $sql="UPDATE Customer SET Cust_Firstname='$FirstName',Cust_LastName='$Lastname',Cust_Email='$email',Cust_tel='$Tel',Cust_Address='$Address' WHERE Cust_Username='$username'";
        }
        $result=$con->query($sql);
        if(!$result){
            echo"<script>alert('ไม่สามารถบันทึกข้อมูลได้')</script>";
            header('location:Ad_Customer.php');
        }
        else{
            header('location:Ad_Customer.php');
        }
    }
?> 
