<?php
include("include/header.php");
 ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("include/navbar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("include/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Product</h1>

                    <!-- First table -->
                    <table class="table table-bordered border-primary">
                        <thead class="bg-success">
                            <tr style="background: #022404;color: #eee;">
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Catagers</th>
                                <th>Number Product</th>
                                <th>brand</th>
                                <th>descredt</th>
                                <th>control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = "SELECT id, name, price, image, cat, brand, count, descr FROM products";
                            $result = $conn->query($select);

                            if ($result) {
                                while ($row = $result->fetch_assoc()) {

                                       // Fetch image
                                //     $count = explode('.',$row['image']);
                                //      foreach( $count as $image){ 

                                //         echo $image;
                                //   }

                                  

                                    // Fetch category name
                                    $type_cat = $row['cat'];
                                    $select_cat = "SELECT name FROM catagory WHERE id = '$type_cat'";
                                    $result_cat = $conn->query($select_cat);
                                    $catgres = $result_cat->fetch_assoc();

                                    // Fetch brand name
                                    $type_brand = $row['brand'];
                                    $select_brand = "SELECT name FROM brand WHERE id = '$type_brand'";
                                    $result_brand = $conn->query($select_brand);
                                    $brandgres = $result_brand->fetch_assoc();
                            ?>
                                    <tr>
                                        <td scope="row"><?= $row['id'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['price'] ?></td>   
                                              
                                       <td>   
                                       <?php 
                                     $imgs =  explode(  ',' , $row['image']);
                                       foreach($imgs as $img){
                                       ?> 
                                       <img src="image/<?=$img ?>"  style= "width: 50PX; hight:50PX"> 
                                    
<?php } ?>
 
</td>
                                        <td><?= $catgres['name'] ?></td>
                                        <td><?= $row['count'] ?></td>
                                        <td><?= $brandgres['name'] ?></td> 
                                        <td><?= $row['descr'] ?></td>
                                        <td>
                                            <a href="edit_product.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-primary">Edit</button></a>
                                            <a href="delet_product.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }  
                            ?>
                        </tbody>
                    </table>
                    <!-- End table -->

                    <!-- button App product -->
                    <a href="add_product.php"><button type="submit" class="btn btn-primary">Add Product</button></a>
                </div>
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

<?php include("include/footer.php"); ?>
