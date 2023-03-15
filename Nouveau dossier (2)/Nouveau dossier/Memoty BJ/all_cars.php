<?php 
    include('db.php');

    if(!empty($_GET['id'])) {

    $verify = $bdd->prepare('SELECT * FROM vehicle WHERE cat_id=?');
    $verify->execute(array($_GET['id']));
    $result = $verify->fetchAll();
  } else {
    header('Location: cars.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Express Import Allemand | Cars</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <?php include('header.php') ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Car Category</h2>
            </div>
            <div class="page_link">
              <a href="#">/Car Category</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
          </div>
        </div>
      </div>

      <div class="row pro">
      <?php 
        foreach($result as $r) { ?>  
        <div class="col-lg-3 col-md-6">
          <div class="single-product" data-id="<?= $r['id'] ?>">
            <div class="product-img">
              <img class="img-fluid w-100" src="<?= $r['img1'] ?>" alt="" />
              <div class="p_icon">
                <a href="car_details.php?id=<?= $r['id'] ?>" onclick="document.location.href='car_details.php?id=<?= $r['id'] ?>'">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#" class="pro-btn">
                  <i class="ti-shopping-cart" style="display: flex; width: 100% !important; height: 100% !important; align-items: center; justify-content: center;"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="car_details.php?id=<?= $r['id'] ?>" onclick="document.location.href='car_details.php?id=<?= $r['id'] ?>'" class="d-block">
                <h4><?= $r['nom'] ?></h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$<span id="price"><?= $r['now'] ?></span></span>
                <del>$<?= $r['last'] ?></del>
              </div>
            </div>
          </div>
        </div>
        <?php  }
      ?>

      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
    </section>
    <!--================End Product Description Area =================-->

    <!--================ start footer Area  =================-->
    <?php include('footer.php');  ?>
    <?php include('res.php') ?>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/cart.js"></script>
  </body>
</html>
