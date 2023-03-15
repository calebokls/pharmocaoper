<?php 
    include('db.php');


    $verify = $bdd->query('SELECT * FROM categorie');
    $result = $verify->fetchAll();
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
    <title>Admin</title>
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
              <h2>Espace Admin</h2>
            </div>
            <div class="page_link">
              <a href="user.php">Espace Admin</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>Ajouter une Catégorie</p>
                <form class="row tracking_form" action="traitement.php" method="post" enctype="multipart/form-data" >
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" required id="nom" name="nom" placeholder="Nom">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" required id="img" name="img">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" name="cat" class="btn submit_btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>Ajouter une Voiture</p>
                <form class="row tracking_form" action="traitement.php" method="post" enctype="multipart/form-data" >
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" required id="nom" name="nom" placeholder="Nom">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="number" class="form-control" required id="last" name="last" placeholder="Ancien prix">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="number" class="form-control" required id="mtn" name="mtn" placeholder="Nouveau prix">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <select name="cat" class="form-group">
                          <?php 
                            foreach($result as $r) { ?>
                                <option value="<?= $r['id'] ?>"><?= $r['nom'] ?></option>
                          <?php  }
                          ?>
                          
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img1" name="img1">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img2" name="img2">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img3" name="img3">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img4" name="img4">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img5" name="img5">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img6" name="img6">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img7" name="img7">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img8" name="img8">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img9" name="img9">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img10" name="img10">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img11" name="img11">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img12" name="img12">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img13" name="img13">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img14" name="img14">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img15" name="img15">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img16" name="img16">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img17" name="img17">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img18" name="img18">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img19" name="img19">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img20" name="img20">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img21" name="img21">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img22" name="img22">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img23" name="img23">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img24" name="img24">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img25" name="img25">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img26" name="img26">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img27" name="img27">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img28" name="img28">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img29" name="img29">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img30" name="img30">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img31" name="img31">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img32" name="img32">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img33" name="img33">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img34" name="img34">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img35" name="img35">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img36" name="img36">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img37" name="img37">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img38" name="img38">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img39" name="img39">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img40" name="img40">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img41" name="img41">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img42" name="img42">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img43" name="img43">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img44" name="img44">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img45" name="img45">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img46" name="img46">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img47" name="img47">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img48" name="img48">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img49" name="img49">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="file" class="form-control" id="img50" name="img50">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" name="car" class="btn submit_btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================End Tracking Box Area =================-->

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
</body>

</html>