<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Homepage">

    <!-- Required font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo $theme_assets . 'css/plugin.min.css'; ?>">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo $theme_assets . 'css/main.min.css'; ?>">

    <title>Homepage</title>
  </head>

  <body>

  <!-- Content block start here -->
      
  <?php echo $template['partials']['header']; ?>

  <!-- carousel start here -->
  <!-- <div class="c-home-slider">
    <div id="carouselHome" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $theme_assets . 'img/bg--1.jpg'; ?>" class="d-block w-100" alt="slide-img">
          <div class="overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Destinasi Wisata Terbaik</h5>
            <p>Liburan adalah salah satu cara paling jitu untuk melepas stres akibat rutinitas dan pekerjaan yang menjemukan. Tidak perlu melancong ke luar negeri atau menghabiskan uang di pusat-pusat perbelanjaan mahal, sebab Indonesia juga punya banyak sekali tempat menarik yang menunggu untuk segera Anda jelajahi.</p>
            <a href="#" class="btn btn-outline-success my-2 my-sm-0 btn--primary" style="letter-spacing:2px;">See More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $theme_assets . 'img/bg--2.jpg'; ?>" class="d-block w-100" alt="slide-img">
          <div class="overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Pelayanan Terbaik</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean felis libero, tempus mattis tellus volutpat, vehicula porttitor lacus. Pellentesque tortor elit, viverra condimentum vehicula sit amet, molestie a lectus.
            </p>
            <a href="#" class="btn btn-outline-success my-2 my-sm-0 btn--primary" style="letter-spacing:2px;">See More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $theme_assets . 'img/bg--3.jpg'; ?>" class="d-block w-100" alt="slide-img">
          <div class="overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Wisata Terbaik</h5>
            <p>
              Ut consequat est vitae sapien volutpat feugiat. Nullam et dolor erat. Nunc auctor orci libero, feugiat finibus quam pulvinar ac. Sed vitae efficitur turpis. Sed nec semper odio. Mauris vitae ipsum eu eros porta lacinia. In fringilla dolor ac tellus varius, id imperdiet est finibus.</p>
            <a href="#" class="btn btn-outline-success my-2 my-sm-0 btn--primary" style="letter-spacing:2px;">See More</a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div> -->
  <!-- carousel start here -->
<!-- Sliders -->
<?php
    // $sliders = Modules::run('sliders/controller/get_all');
		if ($this->uri->uri_string() == "" && !empty($sliders)) {
?>
            <!-- Header Carousel -->
            <div class="c-home-slider">
							<div id="carouselHome" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $i = 0;
                    for ($i = 0; $i < count($sliders); $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#carouselHome" data-slide-to="' . $i . '" class="active"></li>';
                        } else {
                            echo '<li data-target="#carouselHome" data-slide-to="' . $i . '"></li>';
                        }
                    }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    foreach ($sliders as $key => $value) {
                        if ($key == 0) {
                            echo '<div class="carousel-item active" style="background-image: url(' . $value->sld_url . ')">';
                        } else {
                            echo '<div class="carousel-item" style="background-image: url(' . $value->sld_url . ')">';
                        }
												echo '<img src="' . $value->sld_url . '" class="d-block w-100" alt="' . $value->sld_title . '">';
                        echo '<div class="overlay"></div>';
                        echo '<div class="carousel-caption d-none d-md-block">';
                        echo '<h5>' . $value->sld_title . '</h5>';
                        echo '<p>' . $value->sld_text1 . '</p>';
                        echo '<a href="' . $value->sld_link . '" class="btn btn-outline-success my-2 my-sm-0 btn--primary" style="letter-spacing:2px;">' . $value->sld_linktext . '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
            </div>
					</div>
<?php } ?>

	<?php echo $template['body']; ?>
  <!-- Footer start here -->
  <?php echo $template['partials']['footer']; ?>
      <!-- Content block end here -->

      <!-- Main Javascript -->
      <script src="<?php echo $theme_assets . 'js/plugin.min.js'; ?>"></script>
      <script src="<?php echo $theme_assets . 'js/main.js'; ?>"></script>
    </body>
  </html>