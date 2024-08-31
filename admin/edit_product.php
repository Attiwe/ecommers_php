<!-- Recuer 
    1-form 
    *brand (choos)
    *catagers(choos)
    2-update on data base
    3-show in page product.php -->


<?php

include ("include/header.php");

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php

        include ("include/navbar.php");

        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php

                include ("include/topbar.php");

                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product Page</h1>

                </div>
                <?php
                $id = $_GET['id'];
                //  
                
                $select = "SELECT * FROM products  WHERE id ='$id' ";
                $result = $conn->query($select);
                $row = $result->fetch_assoc();

                ?>

                <!-- first form add product -->

                <form class="ml-5 mr-5" action="fun/shorg_edit_product_db.php?id=<?=$row['id']?>" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">Products Name</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="name"
                            value="<?= $row['name'] ?>">
                    </div>
                    <!-- ============================================================================================ -->

                    <div class="mb-3">
                        <label for="name" class="form-label">Price</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="price"
                            value="<?= $row['price'] ?>">
                    </div>
                    <!-- ============================================================================================ -->


                    <div class="mb-3">
                        <label for="name" class="form-label">Image</label>
                        <input type="file"    class="form-control form-control-sm" id="name" name="image" >
                        <img src="image/<?=$row['image']?>"  style= "width: 100px; hight:150px"> 
                       
                    </div>


                    <!-- <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control form-control-sm" id="image" name="image">
    if (isset($row['image']) && !empty($row['image'])): ?>
        <img src="uplode_image/ = $row['image']  " alt="Current Image" style="margin-top: 10px; max-width: 100px;">
    else: 
        <img src="default_image.jpg" alt="No Image" style="margin-top: 10px; max-width: 100px;">
     endif;  
</div> -->
                    <!-- ============================================================================================ -->



                    <div class="mb-3">
                        <label for="name" class="form-label"> Catagers</label>
                        <select class="form-control form-control-sm" name="cat" id=" " value="<?= $row['cat'] ?>">

                            <!--storg name porduct in data base -->
                            <?php
                            $select_cat = "SELECT * FROM catagory";
                            $result = $conn->query($select_cat);

                            while ($row_cat = $result->fetch_assoc()) { ?>
                                <option value="<?= $row_cat['id'] ?>" <?php if ($row_cat['id'] === $row['cat']) {

                                    echo "selected";
                                } ?>><?= $row_cat['name'] ?></option>

                            <?php } ?>



                        </select>
                    </div>
                    <!-- ============================================================================================ -->

                    <div class="mb-3">
                        <label for="name" class="form-label"> Number Product </label>
                        <input type="number" class="form-control form-control-sm" id="name" name="count"
                            value="<?= $row['count'] ?>">
                    </div>


                    <div class="mb-3">
                        <label for="name" class="form-label"> Brand</label>
                        <select class="form-control form-control-sm" name="brand" id="">

                            <?php
                            $select_cat = "SELECT * FROM brand";
                            $result = $conn->query($select_cat);

                            while ($category = $result->fetch_assoc()) { ?>
                                <option value="<?= $category['id'] ?>" <?php
                                 if ($category['id'] === $row['brand']) {
                                     echo "selected";
                                 }

                                 ?>><?= $category['name'] ?></option>
                            <?php }

                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Descrabet</label>
                        <textarea class="form-control form-control-sm" name="descr"
                            id=""><?= $row['descr'] ?></textarea>
                    </div>



                    <button type="submit" class=" btn btn-primary btn-block  ">Add Product </button>

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

    include ("include/footer.php");

    ?>