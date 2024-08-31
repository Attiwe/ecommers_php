

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
                <h1 class="h3 mb-4 text-gray-800">Show Parent Catagers</h1>

                <!-- First table -->
                <table class="table table-bordered border-primary">
                    <thead class="bg-success">
                        <tr style="color:black">
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Parent</th>
                            <th>control</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                    $select = "SELECT * FROM catagory where parent != 0";
                    $result = $conn->query($select);
                    while($row = $result->fetch_assoc()){?>

                
                        <tr>
                            
                            <td scope="row"><?=$row['id']?></td>
                            <td><?=$row['name']?></td>
                            <td> 
                        <?php 
                            if ($row['parent'] == 6) {  
 

                                echo "Electronics";
                            } elseif ($row['parent'] == 7) {
                                echo "Fashion";
                            } elseif ($row['parent'] == 8) {
                                echo "Accessories";
                            }
                        ?>

                             
                            <td>
                                <a href="#"> <button type="submit" class="btn btn-primary">Edit</button> </a>
                                <a href="delete_add_parent.php?id=<?=$row['id']?>">  <button type="submit" class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        <?php   }
                    ?>
                    </tbody>
                </table>
                <!-- End table -->

                <!-- button App product -->
                <a href="add_parent_cat.php"><button type="submit" class="btn btn-primary">Add Parent</button></a>
            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include("include/footer.php"); ?>
    
