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
                                    <span class="card-title" >Add Skill</span> 
                                    <?php
                                        if(isset($_SESSION['sms'])){
                                            if($_SESSION['sms']===1){
                                                ?>
                                                    : <span class="text-success">Skill Successfully Added</span>
                                                <?php
                                                unset($_SESSION['sms']);
                                            }else if($_SESSION['sms']===2){
                                                ?>
                                                    : <span class="text-danger">Skill Not Added</span>
                                                <?php
                                                unset($_SESSION['sms']);
                                            }
                                        }
                                    ?>
                                    <form action="code/add-skill-code.php" method="post">
                                        <label class="mb-3 mt-4">Skill</label>
                                        <input type="text" name="skill" required placeholder="Enter Skill..." class="form-control mb-4"/>
                                        <label class="mb-3">Percentage</label>
                                        <input type="text" name="percentage" required placeholder="Enter Skill Percentage..." class="form-control mb-4"/>
                                        <input type="submit" name="add_skill" class="btn btn-outline-primary" value="Add Skill"/>
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