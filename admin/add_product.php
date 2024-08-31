 <?php

include("include/header.php");

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
                <?php

        include("include/navbar.php");

        ?>
                <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php

                    include("include/topbar.php");

                    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product Page</h1>

                </div>
     
                   
                <!-- first form add product -->

                <form class="ml-5 mr-6" action="fun/connet_db_add.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
            <label for="name" class="form-label">Products Name</label>
            <input type="text" class="form-control form-control-sm" id="name" name="name">
            </div>
              <!-- ============================================================================================ -->

            <div class="mb-3">
            <label for="name" class="form-label">Price</label>
            <input type="text" class="form-control form-control-sm" id="name" name="price"  >
            </div>
              <!-- ============================================================================================ -->


            <div class="mb-3">
            <label for="name" class="form-label">Image</label>
            <input type="file" multiple="multiple" class="form-control form-control-sm" id="name" name="image[]">
            </div>
              <!-- ============================================================================================ -->

             
            
            <div class="mb-3">
            <label for="name" class="form-label"> Catagers</label>
            <select class="form-control form-control-sm" name="cat" id=""> 

              <!--storg name porduct in data base -->
              <?php
                  $select_cat = "SELECT * FROM catagory"; 
                  $result = $conn->query($select_cat);
                   
                  while($catagres = $result->fetch_assoc()){ ?>
                    <option value="<?= $catagres['id']?>"><?= $catagres['name'] ?></option>
                <?php  } 
                   
                  ?>
              </select>
         </div>
         <!-- ============================================================================================ -->

            <div class="mb-3">
            <label for="name" class="form-label"> Number Product </label>
            <input type="number" class="form-control form-control-sm" id="name" name="count"  >
            </div>

            
            <div class="mb-3">
            <label for="name" class="form-label"> Brand</label>
             <select class="form-control form-control-sm" name="brand" id=""> 
            
              <?php
             $select_cat = "SELECT * FROM brand"; 
                  $result = $conn->query($select_cat);
                   
                  while($category = $result->fetch_assoc()){ ?>
                    <option value="<?= $category['id']?>"><?= $category['name'] ?></option>
                <?php  } 
                   
                  ?>
             </select>
            </div>

            <div class="mb-3">
    <label for="name" class="form-label">Descrabet</label>
    <textarea class="form-control form-control-sm" name="descr" id=""></textarea>
</div>


            <button  type="submit" class=" btn btn-primary btn-block  ">Add Product </button> 

                </form>

                <!-- input Add  -->
                 
            </select>
        
            <!-- End form add product -->












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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php

include("include/footer.php");

?>