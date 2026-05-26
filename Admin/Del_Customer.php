<?php
  require_once 'Ad_Customer.php';
  require_once 'Ad_Connect.php';
  $cust_id = $_GET['Cust_ID'];
  echo $cust_id;
  $sql = "SELECT * FROM customer WHERE Cust_id ='$cust_id'";
  $result = $con->query($sql);
  $row = mysqli_fetch_array($result);
  // @unlink('pro_pic/'.$row['pro_pic']);
  $sql = "DELETE FROM customer WHERE Cust_id='$cust_id'";
  $result = $con->query($sql);
  if (!$result) {
    echo "<script>alert('ไม่สามารถลบข้อมูลได้')</script>";
  } else {
    echo "<script>window.location.href='Ad_Customer.php'</script>";
  }
?>