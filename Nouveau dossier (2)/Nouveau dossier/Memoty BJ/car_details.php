<?php 
    include('db.php');

    if(!empty($_GET['id'])) {

    $verify = $bdd->prepare('SELECT * FROM vehicle WHERE id=?');
    $verify->execute(array($_GET['id']));
    $result = $verify->fetch();

    $cc = $bdd->prepare('SELECT * FROM categorie WHERE id=?');
    $cc->execute(array($result['cat_id']));
    $result1 = $cc->fetch();
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
    <title>Express Import Allemand | Car details</title>
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
              <h2>Car Details</h2>
            </div>
            <div class="page_link">
              <a href="#">/Car Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner pro" data-id="<?= $result['id'] ?>">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <?php for ($i=1; $i <= 50 ; $i++) { 
                    
                    if($result["img".$i]) { ?>

                    <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="<?= $i-1; ?>"
                    <?php if($i==1) {?>
                      class="active"
                    <?php } ?>
                  >
                    <img
                      src="<?= $result["img".$i] ?>"
                      alt=""
                      id="imgfirst"
                      style="width: 100%; height: 100%;"
                    />
                  </li>
                    
                  <?php }} ?>
                </ol>
                <div class="carousel-inner">
                <?php for ($i=1; $i <= 50 ; $i++) { 
                    
                    if($result["img".$i]) { ?>

                      <div class="carousel-item <?php if($i==1) { ?> active <?php }?> ">
                        <img
                          class="d-block w-100"
                          src="<?= $result["img".$i] ?>"
                          alt="First slide"
                        />
                      </div>
                    
                  <?php }} ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3 id="nomm"><?= $result['nom'] ?></h3>
              <h2>$<span id="price"><?= $result['now'] ?></span></h2>
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : <?= $result1['nom'] ?></a
                  >
                </li>
                <li>
                  <p id="description"><?= $result['description'] ?></p>
                </li>
              </ul>
              <div class="card_area">
                <a class="main_btn product-btm pro-btn" href="#"><span style="display: flex; width: 100% !important; height: 100% !important; align-items: center; justify-content: center;">Add to Cart</span></a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

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
    <script src="js/cartcustom.js"></script>
  </body>
</html>
