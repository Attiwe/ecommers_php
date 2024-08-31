 <?php
  
   include('inc/header_f.php');
  ?>

 
  <body>
    <div class="page-holder">
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
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="add_to_cart.php?id=<?=$row['id']?>">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href=""><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HERO SECTION-->
      <div>
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">New Inspiration 2025</p> 
                <h1 class="h2 text-uppercase mb-3">50% off on new season</h1><a class="btn btn-dark" href="shop.php">Browse collections</a>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
             <h2 style="display: inline-block; font-size: 1.25rem; text-transform: uppercase; margin-bottom: 1rem; padding: 0.5rem 1rem; background-color: #2980b9; color: #000; padding-top:20px;padding-bottom:20px; margin-bottom:50px">
            Browse our categories </h2>
          </header>
            </section>
           <?php 
           $record = "SELECT * FROM products order by price limit 3";
           $reselt = $conn->query($record);

           ?>
            
          <div class="row mb-4"style="margin-left:150px;padding-left:20px  ">
           
           <?php
            while($row = $reselt->fetch_assoc()){ ?>
                          <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="shop.php"><img class="img-fluid" src="admin/image/<?=$row['image']?> "style="width:80% ;margen:auto ;height:400px"><strong class="category-item-title">Clothes</strong></a></div>

          <?php  }   
          ?>
           <!-- <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""><strong class="category-item-title">Clothes</strong></a></div>
            <div class="col-md-4 mb-4 mb-md-0"><a class="category-item mb-4" href="shop.php"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""><strong class="category-item-title">Shoes</strong></a><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""><strong class="category-item-title">Watches</strong></a></div>
            <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""><strong class="category-item-title">Electronics</strong></a></div>
               
           -->
          </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5 mb-4">
    
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 style="display: inline-block; font-size: 1.25rem; text-transform: uppercase; margin-bottom: 1rem; padding: 0.5rem 1rem; background-color: #2980b9; color: #000; padding-top:20px;padding-bottom:20px">
                        Top trending products </h2>
          </header>

          </section>
          <br>
        
          <?php
$select = "SELECT * FROM products LIMIT 8";
$result = $conn->query($select);
?>

<div>
  <div class="row justify-content-center">
    <?php while ($row = $result->fetch_assoc()) { ?>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="product text-center">
          <div class="position-relative mb-3">
            <div class="badge text-white badge-"></div>
            <a class="d-block" href="detail.php"><img style="width:200px; height: 300px;" src="admin/image/<?=$row['image']?>" alt="Product Image"></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="add_to_cart.php?id=<?=$row['id']?>">Add to cart</a></li>
                <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6><a class="reset-anchor" href="detail.php"><?=$row['name']?></a></h6>
          <p class="small text-muted">$<?=$row['price']?></p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



            

 
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <h5 class="text-uppercase">Let's be friends!</h5>
                <p class="text-small text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class="col-lg-6">
                <form action="#">
                  <div class="input-group flex-column flex-sm-row mb-3">
                    <input class="form-control form-control-lg py-3" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
     
        <?php
          
          include("inc/footer_black.php");

      ?>


      