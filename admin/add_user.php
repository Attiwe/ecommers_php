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


               <!--
                1-form 
               2-add data base 
               3-show user.php
                -->

                <form class="ml-4" action="fun/strog_info_user_db.php" method="POST">

                <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control form-control-sm" id="name" name="userName" required>
        </div>
        
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm" id="price" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-control form-control-sm" name="gender" id="">
                
                <?php
               $select = "SELECT * FROM gender";
               $result = $conn->query($select);
              
                 while($row    = $result->fetch_assoc())
                 {?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?> </option>

               <?php }
                 ?>
             </select>
          </div>


        <div class="mb-3">
            <label  class="form-label">Prives</label>
            <input type="number" class="form-control form-control-sm" id="price" name="prives" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Premassian</label>
            <select class="form-control form-control-sm" name="pr" id="">
            <?php
               $select = "SELECT * FROM pr";
               $result = $conn->query($select);
              
                 while($row_pr    = $result->fetch_assoc())
                 {?>
                    <option value="<?=$row_pr['id']?>"><?=$row_pr['name']?> </option>

                <?php } ?>

             </select>
          </div>

            <button type="submit" class="btn btn-primary mt-4">Add User</button>

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