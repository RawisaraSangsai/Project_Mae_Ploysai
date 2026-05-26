<?php
include 'Ad_Connect.php';
$sql = "SELECT * FROM Customer";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Ad_Style.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- CSS Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100&display=swap" rel="stylesheet">
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
                    <h1 class="text-light">Customer</h1>
                    <?php
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="row my-3 mx-1">
                            <div class="card" style="width: 100%; height: 120px">
                                <div class="card-body">
                                    <div class="row">
                                        <tr>
                                            <div class="col">
                                                <td><img src="Cust_image/<?php echo $row['Cust_Image']?> " width="150" class="rounded float-start" alt="..."></td>
                                            </div>
                                            <div class="col">
                                                <td><?php echo $row['Cust_Firstname'] ?>&nbsp;&nbsp;</td>
                                                <td><?php echo $row['Cust_Lastname'] ?></td>
                                            </div>
                                            <div class="col">
                                                <td><?php echo $row['Cust_Email'] ?></td>
                                            </div>
                                            <div class="col">
                                                <td><?php echo $row['Cust_Tel'] ?></td>
                                            </div>
                                            <div class="col">
                                                <td><?php echo $row['Cust_Address'] ?></td>
                                            </div>
                                            <div class="col">

                                            </div>
                                            <td>
                                                <div class="col-2">
                                                    <div class="row m-1">
                                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCustomer-<?php echo $row['Cust_ID'] ?>"><i class="bi bi-wrench"></i></a>
                                                    </div>
                                                    <div class="row m-1">
                                                        <a href="Del_Customer.php?Cust_ID=<?php echo $row['Cust_ID'] ?>" class="btn btn-danger del-btn">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>

                                </div>
                            </div>
                            <div class="modal fade" id="editCustomer-<?php echo $row['Cust_ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header  bg-danger">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">แก้ไข User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="Ed_Customer.php" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Username' name="Username" value="<?php echo $row['Cust_Username'] ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">FirstName</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='FirstName' name="FirstName" value="<?php echo $row['Cust_Firstname'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Lastname</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id='Lastname' name="Lastname" value="<?php echo $row['Cust_Lastname'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">E-mail</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id='email' name="email" value="<?php echo $row['Cust_Email'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Tel</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Tel' name="Tel" value="<?php echo $row['Cust_Tel'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label">Address</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id='Address' name="Address"value="<?php echo $row['Cust_Address'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="label col-sm-2 com-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id='Cust_image' name="Cust_image">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn bg-danger text-white" name="editsubmit" value="<?php echo $row['Cust_Username']?>">แก้ไขข้อมูล</button>
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
<script>
    $('.del-btn').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                document.location.href = href;
            }
        })
    })
</script>
