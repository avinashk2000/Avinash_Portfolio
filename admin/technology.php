
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
                                    <span class="card-title" >Technologies</span>
                                    <?php
                                        if(isset($_SESSION['sms'])){
                                            if($_SESSION['sms']===1){
                                                ?>
                                                    : <span class="text-success">Technology Successfully Added</span>
                                                <?php
                                                unset($_SESSION['sms']);
                                            }
                                        }
                                    ?>
                                    <a href="add-technology" class="btn btn-outline-primary" style="float: right;">Add Technology</a>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th> #S.No. </th>
                                            <th> Technology </th>
                                            <th colspan="2"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sn = 1;
                                            $sel = "select * from Technology order by id ASC LIMIT 10";
                                            $query = mysqli_query($con, $sel);
                                            if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                <td><?= $sn; ?></td>
                                                <td><?= $data['technology']; ?></td>
                                                <td><a href="edittechnology?id=<?= $data['id'];?>"><i class="fa fa-edit"></i></td>
                                                <td><a href="code/deletetechnology?id=<?= $data['id'];?>"><i class="fa fa-trash"></i></td>
                                                </tr>
                                            <?php
                                                $sn++;
                                            }
                                            } else {
                                            ?>
                                            <tr>
                                                <td colspan="5">
                                                <h3 class="text-danger text-center">I don't have any Technology...</h3>
                                                <td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        </table>
                                    </div>
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