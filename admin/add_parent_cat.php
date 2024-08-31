<?php

include('include/header.php');

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php

        include('include/navbar.php');

        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
           
                <?php

        include('include/topbar.php');

        ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Page</h1>

                </div>
               <!-- form add user -->


              

        <form class="ml-4" method="POST" action="fun/stor_addParent_db.php">

                <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control form-control-sm" id="name" name="name" required>
        </div>
    
 
        <div class="mb-3">
            <label class="form-label">Parent</label>
            <select class="form-control form-control-sm" name="parent" id="">
    <?php
    $select = "SELECT * FROM `catagory` where parent=0";    
    $result = $conn->query($select);
    while($row = $result->fetch_assoc()){ ?>
        <option value="<?=$row['id'] ?>"> <?=$row['name'] ?></option>
            <?php
            // if ($row['parent'] == 6) {   
            //     echo "Electronics";
            // } elseif ($row['parent'] == 7) {
            //     echo "Fashion";
            // } elseif ($row['parent'] == 8) {
            //     echo "Accessories";
            // } else {
            //     echo "Not parnet"; 
            // }
            // ?>
     <!-- > <?=$row['parent'] ?></option> -->
    <?php } ?>
    <option value="0">parent</option>
</select>

          </div>  

            <button type="submit" class="btn btn-primary mt-4">Add parent</button>

                </form>
 

           

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php

include('include/footer.php');

?>