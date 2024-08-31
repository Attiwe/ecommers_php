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
          
            <!-- navbar  -->
               <?php
             include("include/topbar.php")
             ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 ">Edit Page</h1>

                </div>
<!--  

<?php
   $select = "SELECT * FROM user";
   $result = $conn->query($select);
   $row = $result->fetch_assoc();

?> -->

   <form method="POST" action="fun/do_edit_call.php">
   <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control form-control-sm" id="name" name="userName"  value="<?=$row['userName']?>">
        </div>
        
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm" id="price" name="email"  value="<?=$row['email']?>">
        </div>
      

<div class="mb-3">
    <label for="Gender" class="form-label">Gender</label>
    <select class="form-control form-control-sm" name="gender">
    <?php
       $select = "SELECT gender  FROM user";
       $result = $conn->query($select);
    while( $row = $result->fetch_assoc()){
          $type = ($row['gender']== 1)?'male' :'female' ;
        ?>

         <option value="<?=$row['gender']?>"> <?=$type?></option>
    <?php } ?>
    </select>
</div> 
       

<div class="mb-3">
    <label for="Prives" class="form-label">Prives</label>
    <select class="form-control form-control-sm" name="prives">
    <?php
       $select = "SELECT prives  FROM user";
       $result = $conn->query($select);
    while( $row = $result->fetch_assoc()){
          $privesText = '';
          switch ($row['prives']) {
              case 100:
                  $privesText = 'owner';
                  break;
              case 200:
                  $privesText = 'admin';
                  break;
              case 300:
                  $privesText = 'suberviser';
                  break;
              default:
                  $privesText = 'unknown';
                  break;
          }
        ?>
         <option value="<?=$row['prives']?>"> <?=$privesText?></option>
    <?php } ?>
    </select>
</div> 


       
<div class="mb-3">
    <label for="Prives" class="form-label">Prmashan</label>
    <select class="form-control form-control-sm" name="pr">
    <?php
       $select = "SELECT pr  FROM user ";
       $result = $conn->query($select);
    while( $row = $result->fetch_assoc()){
          $privesText = '';
          switch ($row['pr']) {
              case 1 :
                  $privesText = 'owner';
                  break;
              case 2 :
                  $privesText = 'admin';
                  break;
              case 3 :
                  $privesText = 'suberviser';
                  break;
              default:
                  $privesText = 'unknown';
                  break;
          }
        ?>


         <option value="<?=$row['pr']?> "> <?=$privesText?></option>
    <?php } ?>
    </select>
</div> 

        <button type="submit" class="btn btn-danger btn-user btn-block">Edit</button>
 
 
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

    <?php
include("include/footer.php");
?>
