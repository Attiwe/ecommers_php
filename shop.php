      <?php
      include ('inc/header_f.php');


 ?>
 


  
       <body>
        <div class="page-holder">
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
                    <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center"
                        style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview"
                        title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg"
                        title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none"
                        href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                    <div class="col-lg-6">
                      <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">×</span></button>
                      <div class="p-5 my-md-4">
                        <ul class="list-inline mb-2">
                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        </ul>
                        <h2 class="h4">Red digital smartwatch</h2>
                        <p class="text-muted">$250</p>
                        <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper
                          leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur
                          ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                        <div class="row align-items-stretch mb-4">
                          <div class="col-sm-7 pr-sm-0">
                            <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span
                                class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                              <div class="quantity">
                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 pl-sm-0"><a
                          
                          class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"
                          
                          href="add_to_cart.php?id=<?=$row['id']?>">Add to cart</a></div>
                        
                        
                        
                        </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish
                          list</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div >
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
              <div >
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                  <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Shop</h1>
                  </div>
                  <div class="col-lg-6 text-lg-right">
                 
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-lg-end mb-0 px-0  ">
                        <li class="breadcrumb-item  "><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                      </ol>
                   
                    </nav>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-5">
              <div class="  p-3">
                <div class="row">
                  <!-- SHOP SIDEBAR-->
                  <div  style="margin-left:70px;">
                    <h5 class="text-uppercase mb-4">Categories</h5>
                    <div class="py-2 px-4 bg-warning text-white mb-3"><strong
                        class="small text-uppercase font-weight-bold">Electronics</strong></div>
                        <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal  ">
                       <?php  
 
  
                      $record = "SELECT * FROM `catagory` where  parent  = 6";
                    @$result = $conn->query($record);

                        while($row = $result->fetch_assoc()){?>
                  
                  <li class="mb-2"><a class="reset-anchor" href="#"><?= $row['name']?></a></li>


                     <?php  }
                      ?>
                  
                       <!-- <li class="mb-2"><a class="reset-anchor" href="#">Men's T-Shirts</a></li> -->
                      <!-- <li class="mb-2"><a class="reset-anchor" href="#">Dresses</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Novelty socks</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Women's sunglasses</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Men's sunglasses</a></li> 
                      
             class="small text-uppercase font-weight-bold">Electronics</strong></div>

                      -->
                    </ul>
                    <!-- <div class="py-2 px-4 bg-dark text-white mb-3"><strong
                        class="small text-uppercase font-weight-bold">Fashion </strong></div>
                        <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal"> -->
                        <div class="py-2 px-4 bg-warning mb-3"><strong
                        class="small text-uppercase font-weight-bold">Fashion</strong></div>
                    <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">

                 <?php  
                  
                    
                  $record = "SELECT * FROM catagory where  parent  = 7";
                  @$select = $conn->query($record);

                    while($row_fashion = $select->fetch_assoc()){?>


                      <li class="mb-2"><a class="reset-anchor" href="#"><?=$row_fashion['name']?></a></li>


                   <?php } ?>
                   </ul> 
                      <!-- <li class="mb-2"><a class="reset-anchor" href="#">bags</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Cosmetic</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Nail Art</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Skin Masks &amp; Peels</a></li>
                      <li class="mb-2"><a class="reset-anchor" href="#">Korean cosmetics</a></li>
                    < -->

                    <div class="py-2 px-4 bg-warning mb-3"><strong
                        class="small text-uppercase font-weight-bold">Accessores</strong></div>
                    <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">

                    <?php  
                  
                    
                  $record = "SELECT * FROM catagory where  parent  = 8";
                  @$select = $conn->query($record);

                    while($row_accessores = $select->fetch_assoc()){?>


                      <li class="mb-2"><a class="reset-anchor" href="#"><?=$row_accessores['name']?> </a></li>


                   <?php } ?>
                                        
                    </ul>
                    <h6 class="text-uppercase mb-4">Price range</h6>
                    <div class="price-range pt-4 mb-5">
                      <div id="range"></div>
                      <div class="row pt-2">
                        <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
                        <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
                      </div>
                    </div>
                    <h6 class="text-uppercase mb-3">Show only</h6>
                    <div class="custom-control custom-checkbox mb-1">
                      <input class="custom-control-input" id="customCheck1" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input class="custom-control-input" id="customCheck2" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input class="custom-control-input" id="customCheck3" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input class="custom-control-input" id="customCheck4" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                      <input class="custom-control-input" id="customCheck5" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-4">
                      <input class="custom-control-input" id="customCheck6" type="checkbox">
                      <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
                    </div>
                    <h6 class="text-uppercase mb-3">Buying format</h6>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                      <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                      <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                      <label class="custom-control-label text-small" for="customRadio3">Auction</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                      <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
                    </div>
                  </div>
                  <!-- SHOP LISTING-->


                  <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0"style="margin-left:150px">
                    <div class="row mb-3 align-items-center">
                      <!-- <div class="col-lg-6 mb-2 mb-lg-0"> -->
                      <div class="row">
                        <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
                      </div>
                      <div class="col-lg-6">
                        <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                          <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i
                                class="fas fa-th-large"></i></a></li>
                          <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i
                                class="fas fa-th"></i></a></li>
                          <li class="list-inline-item">
                            <select class="selectpicker ml-auto" name="sorting" data-width="200"
                              data-style="bs-select-form-control" data-title="Default sorting">
                              <option value="default">Default sorting</option>
                              <option value="popularity">Popularity</option>
                              <option value="low-high">Price: Low to High</option>
                              <option value="high-low">Price: High to Low</option>
                            </select>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <?php
 


 
   $select_img = "SELECT * FROM products ";
   $result = $conn->query($select_img);
   $row_img = $result->fetch_assoc();
 




     
    $start = 0;
    $row_pre_page = 4;

    $records = $conn->query("SELECT * FROM products");
    $num_rows = $records->num_rows;
    
  

    @$pages = ceil($num_rows/ $row_pre_page );
     
    if(isset($_GET['page-nr'])){
     
      $page  = $_GET['page-nr'] -1;
      $start = $page * $row_pre_page; 
    }


    $select = "SELECT * FROM products limit $start ,$row_pre_page";
  
    $result = $conn->query($select); 

 
 
        
      ?>
      <div>
        <div class="row justify-content-center">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product text-center">
                <div class="mb-3 position-relative">
                  <div class="badge text-white badge-"></div>
                  <div class="d-block">
                    <div class="row">
                      <?php
                      $image_exp = explode(',', $row['image']);
                      foreach ($image_exp as $images) { ?>
                        <div class="col-6">
                    
                    
                        <img class="img-fluid" style="width:800%; height:300px;;" src="admin/image/<?= $images?>" alt="Product Image">
                    
                    
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0">
                        <a class="btn btn-sm btn-outline-dark" href="#">
                          <i class="far fa-heart"></i>
                        </a>
                      </li>
                      <li class="list-inline-item m-0 p-0">
                      
                      
                      
                    

                        <a class="btn btn-sm btn-dark" href="add_to_cart.php?id=<?= $row['id'] ?>">Add to cart</a>
 
                      
                      
                      </li>
                      <li class="list-inline-item mr-0">
                        <a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal">
                          <i class="fas fa-expand"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <h6>
                <a class="reset-anchor" href="detail.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                
                
              
              
              </h6>
                <p class="small text-muted">$<?= $row['price'] ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


                    <!-- PAGINATION-->
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center justify-content-lg-end">
                        <li class="page-item"><a class="page-link" href="?pag-nr=1" aria-label="Previous"><span
                              aria-hidden="true">«</span></a></li>
                                   
                          <?php
                      $current_page = isset($_GET['page-nr']) ? (int)$_GET['page-nr'] : 1;

                      for($counter = 1; $counter <= $pages; $counter++) {
                          $active_class = ($counter === $current_page) ? 'active' : '';
                          ?>
                          <li class="page-item <?= $active_class ?>"><a class="page-link" href="?page-nr=<?=$counter?>"> <?=$counter?></a></li>
                      <?php
                      }
                      ?>
                         <li class="page-item"><a class="page-link" href="?page-nr=<?=$pages?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </nav>
                  </div>
              
                </div>
              </div>
            </section>
          </div>


          <?php
          include ('inc/footer_black.php');

          ?>