<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    require_once("csslink.php");
    ?>
</head>

<body>
    <div class="container-scroller">

        <?php
        require_once("navbar.php");
        ?>

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php
            require_once('sidebar.php');
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <span class="card-title" >Update Role</span>
                                    <?php
                                        if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $sel="SELECT * FROM role WHERE id='$id'";
                                            $query = mysqli_query($con,$sel);
                                            if($query)
                                            {
                                                $data=mysqli_fetch_assoc($query);
                                            }
                                        }
                                    ?>
                                    <form action="code/update-role-code.php" method="post">
                                        <input type="hidden" name="id" value="<?= $id;?>"/>
                                        <label class="mb-3 mt-4">Role</label>
                                        <input type="text" name="role" value="<?= $data['role'] ?>" required placeholder="Enter Role..." class="form-control mb-4"/>
                                        <input type="submit" name="update_role" class="btn btn-outline-primary" value="Update Role"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © AvinashFolio</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <?php
    require_once("jslink.php");
    ?>
</body>

</html>