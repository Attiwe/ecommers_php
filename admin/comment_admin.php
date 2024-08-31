

<?php
include("include/header.php");
 ?>
<body id="page-top">


<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include("include/navbar.php"); ?>

    <!-- Include navbar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <!-- Include topbar -->
            <?php include("include/topbar.php"); ?>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Show Comment Catagers</h1>

                <!-- First table -->
                
  <table class="  table table-bordered border-primary mt-5"> 
                    <thead class="bg-success">
                        <tr style="color:black">
                           
                             <th>Id</th>
                             <th>Username</th>
                            <th>Commernt</th>
                            <th>Times</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                     
                    
                        <tr>
                            
                             
                                <?php
                         $record = "SELECT * FROM reviews ";
                         $result = $conn->query($record) ; 
                         $i =1;           
                             while($row = $result->fetch_assoc()){ ?>
                      
                           <td><?=$i++?></td>
                           <td><?=$row['name']?></td>

                       
                           
                           <td><?=$row['disc']?>   </td>
                           <td><?=$row['date']?></td>
                           </tr>
                           <?php    }
                                ?>

                       
                     </tbody>
                </table>
                

                <!-- button App product -->
             </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include("include/footer.php"); ?>
    
