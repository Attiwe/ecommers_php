<?php
       include ('inc/header_f.php');
?>


  <body>
    <div class="page-holder bg-light">
      <!-- navbar-->
      <?php
        include('inc/topbar.php');
  ?>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">




                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                       <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  
                    </ul>
<!-- write the qure -->


 

                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php?=id<?=$row_img ['id']?>">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="py-5">
        <div class="container">
          <div class="row mb-5">


          <div class="col-lg-6">
    <!-- PRODUCT SLIDER-->
    
    
    
    <?php
    $select = "SELECT * FROM products limit 5";
    $result = $conn->query($select);
    ?>
    <div class="row m-sm-0">
        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
            <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                <?php 
                while ($row = $result->fetch_assoc()) {
                    $images = explode(',', $row['image']);
                    foreach ($images as $image) { ?>
                        <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
                            <img class="w-100" src="admin/image/<?= $image ?>?id=<?=$row['id']?>" alt="...">
                        </div>
                <?php } } ?>
            </div>
        </div>
        <div class="col-sm-10 order-1 order-sm-2">
            <div class="owl-carousel product-slider" data-slider-id="1">
                <?php
                // Reset the pointer of result set
                $result->data_seek(0);
                while ($row = $result->fetch_assoc()) {
                    $images = explode(',', $row['image']);
                    foreach ($images as $image) { ?>
                        <a class="d-block" href="admin/image/<?= $image?> " data-lightbox="product" title="Product item">
                            <img class="img-fluid" src="admin/image/<?= $image?> " alt="...">
                        </a>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>



            <!-- PRODUCT DETAILS-->

            <?php
      
               @$id = $_GET['id'];
    $select = "SELECT * FROM products  limit 1";
    $result = $conn->query($select);
    ?>


            <div class="col-lg-6">
              <ul class="list-inline mb-2">
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
              </ul>

               <?php 
              while($rows = $result->fetch_assoc()){  
   
            
     ?>


              <h1> <?=$rows['name']?></h1>
              <p class="text-muted lead"> <?=$rows['price']?></p>
              <p class="text-small mb-4"> <?=$rows['descr']?></p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                 
                 
                 <?php
                
                // $record = "SELECT * FROM `cart`";
                // $result = $conn->query($record);
                // $row_cart    = $result->fetch_assoc()
                ?>
                
                  <div class="quantity">
                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                      <input class="form-control border-0 shadow-0 p-0" type="text" value=" ">
                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                    </div>
                 
                  
                 
                  </div>
                </div>
                <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php?=id<?=$row_img ['id']?>">Add to cart</a></div>
              </div><a class="btn btn-link text-dark p-0 mb-4" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a><br>
              <ul class="list-unstyled small d-inline-block">
                 <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ml-2" href="#">?????</a></li>
              
             
                </ul>
             <?php    }
             ?>
             






              </div>
     
          </div>
          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
            <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Product description </h6>
                <p class="text-muted text-small mb-0">The product is very very good </p>
              </div>
            </div>

            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="p-4 p-lg-5 bg-white">
                <div class="row">
                  <div class="col-lg-8">


     


                  <form action="add_reviews_detail.php" method="POST">
               <div class="container mt-4">
            <div class="row">
      <div class="col-md-4 mb-3">
        <label for="username">Username</label>
        <input type="text" id="username" name="name" class="form-control" placeholder="Username"  >
      </div>
      <!-- <div class="col-md-4 mb-3">
        <label for="year">Year</label>
        <input type="text" id="year" name="year" class="form-control" placeholder="Year" required>
      </div> -->
      <div class="col-md-4 mb-3">
        <label for="description">Description</label>
        <input type="text" id="description" name="disc" class="form-control" placeholder="Description"  >
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Add Reviews</button>
      </div>
    </div>
  </div>
</form>




<hr style="border: 1px solid black;">

<div class="media">  
<div class="media-body ml-3">
<?php
             $record = "SELECT * FROM reviews ";
             $result = $conn->query($record) ;
             
            
?>

                     <?php 
                              while($row_rv = $result->fetch_assoc()){ ?>

                      
                        <h6 class="mb-0 text-uppercase"><?=$row_rv['name']?></h6>
                        <p class="small text-muted mb-0 text-uppercase"><?=$row_rv['date']?></p>
  
                         <p class="text-small mb-0 text-muted"><?=$row_rv['disc']?></p>
                   <?php  }
                     ?>
                  </div>
                    </div>  
                 
                    <hr style="border: 1px solid black;">

  


                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- RELATED PRODUCTS-->
          <h2 class="h5 text-uppercase mb-4">Related products</h2>
          <div class="row">
            <!-- PRODUCT-->
            <div class="row ml-5"> <!-- اضافة صف -->
    <?php
    $select = "SELECT * FROM products LIMIT 3";
    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">  
                <div class="product text-center skel-loader">
                    <div class="d-block mb-3 position-relative">
                        <a class="d-block" href="detail.php?id=<?=$row['id']?>">
                        <img class="img-fluid w-100" src="admin/image/<?=$row['image']?>" style="width:80px; height:200px; marging-left:100px;">
                        </a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php?=id<?=$row_img ['id']?>">Add to cart</a></li>
                                <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6><a class="reset-anchor" href="detail.php?id=<?=$row['id']?>"><?=$row['name']?></a></h6>
                    <p class="small text-muted">$<?=$row['price']?></p>
                </div>
            </div>
        <?php }
    } else {
        echo "<p>No products found.</p>";
    } ?>
</div>  

             
      </section>
     


      <?php
          
          include("inc/footer_black.php");

      ?>
