<?php
include 'Ad_Connect.php';
$sql = "SELECT * FROM Food_Product";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Ad_Style.css">
    <link rel="icon" type="image/x-icon" href="Ad_image/favicon.ico">
</head>
<body>
<div class=" vh-100">
        <div class="row row-cols-2 g-0 w-100 h-100">
            <div class="col-2 bg-dark h-100">
            <?php
                include "Ad_Navbar.php"
            ?>
            </div>
            <div class=" col-10 bg-danger h-100">
                <div class="Page-Content m-3">
                    <h1 class="text-light">Menu</h1>
                    <form> <div align="right"> 
                    <button type="button" class="btn btn-success"><i class="bi bi-plus-square-fill"></i>&nbsp;&nbsp;Add</button>
                    </div> </form>
                        <?php
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="row my-3 mx-1">
                            
                            <div class="card" style="width: 100%; height: 120px">
                                <div class="card-body">
                                    <div class="row">
                                            <div class="col">
                                                <img src="Menu_Image/<?php echo $row['Pro_Image']?>" width="150" height="90" class="rounded float-start" alt="...">
                                            </div>
                                            <div class="col">
                                                <?php echo $row['Pro_Name'] ?><br><br>
                                                ราคา : <?php echo $row['Pro_Saleprice'] ?>
                                            </div>
                                            <div class="col">
                                                
                                            </div>
                                            <div class="col">
                                                
                                            </div>
                                            <div class="col">
                                                
                                            </div>
                                            <div class="col">

                                            </div>
                                                <div class="col-2">
                                                    <div class="row m-1">
                                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editMenu-<?php echo $row['Pro_ID'] ?>"><i class="bi bi-wrench"></i></a>
                                                    </div>
                                                    <div class="row m-1">
                                                        <a href="Del_Menu.php?Pro_ID=<?php echo $row['Pro_ID'] ?>" class="btn btn-danger del-btn">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal fade" id="editMenu-<?php echo $row['Pro_ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header  bg-danger">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">แก้ไข User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="Ed_Menu.php" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Pro_id</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Pro_id' name="Pro_id" value="<?php echo $row['Pro_ID'] ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Productname</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Pro_name' name="Pro_name" value="<?php echo $row['Pro_Name'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Pro_Cost</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Pro_Cost' name="Pro_Cost" value="<?php echo $row['Pro_Cost'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Pro_Saleprice</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Pro_Saleprice' name="Pro_Saleprice" value="<?php echo $row['Pro_Saleprice'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Pro_Status</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Pro_Status' name="Pro_Status" value="<?php echo $row['Pro_Status'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id='Pro_image' name="Pro_image">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn bg-danger text-white" name="editsubmit" value="<?php echo $row['Pro_ID']?>">แก้ไขข้อมูล</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>