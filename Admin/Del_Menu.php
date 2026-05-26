<?php
  require_once 'Ad_Menu.php';
  require_once 'Ad_Connect.php';
  $pro_id = $_GET['Pro_ID'];
  echo $pro_id;
  $sql = "SELECT * FROM Food_product WHERE Pro_ID ='$pro_id'";
  $result = $con->query($sql);
  $row = mysqli_fetch_array($result);
  // @unlink('pro_pic/'.$row['pro_pic']);
  $sql = "DELETE FROM Food_product WHERE Pro_ID='$pro_id'";
  $result = $con->query($sql);
  if (!$result) {
    echo "<script>alert('ไม่สามารถลบข้อมูลได้')</script>";
  } else {
    echo "<script>window.location.href='Ad_Menu.php'</script>";
  }
?>