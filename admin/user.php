 <?php

session_start();
if(!isset($_SESSION['userName'])){
    header("location:login.php");
    exit();
}
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
                    <h1 class="h3 mb-4 text-gray-800">User Page</h1>

                </div>
                <!-- /.container-fluid -->





                <table class="table table-striped table-hover table-bordered text-center ">
        <thead class="bg-success">
            <tr>
                 
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                 <th scope="col">Prives</th>
                 <th scope="col">Prematain</th>
                 <th scope="col">control</th>
             </tr>
        </thead>
        <tbody>
           
         <?php
          $select = "SELECT * FROM user";
          $result = $conn->query($select);
           while($row=$result->fetch_assoc()){

          ?>
           <tr> 
            <?php
            
              ?>
                <td scope="row"><?=$row['id'] ?></td>
                <td scope="row"><?= $row['userName'] ?></td>
                <td scope="row"><?= $row['email'] ?></td>
                <td scope="row"><?=( $row['gender']==1)?"Male" :"Female" ?></td>
                <td scope="row"><?= $row['prives'] ?></td>
                <td scope="row"><?= $row['pr'] ?></td> 
               
                <td scope="row">
                 <?php
                 if($_SESSION['permission'] < $row['pr']){
                 ?>
                <a href="editowner.php"><button class="btn btn-primary">Edit</button></a>
                <a href="delete_user.php?id=<?=$row['id']?>"><button  class="btn btn-danger ">delete </button></a> </td>
         
               <?php }?>

                 
            </tr>
           <?php }
           ?>
        </tbody>
        <?php
 
        ?>
    </table>
<?php
    if($_SESSION['permission'] == 1){?>
    <a href="add_user.php"><button type="button" class="btn btn-success ml-4 mt-4">Add</button></a>

<?php }  ?>



   

 




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

    <?php
include('include/footer.php');
 ?>