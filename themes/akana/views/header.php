<!-- Navigation -->
   <!-- Navigation start here -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbarMain">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <img src="<?php echo $theme_assets . 'img/logo--new.png'; ?>" width="60" height="60" alt="<?php echo $this->config->item('website_name'); ?>" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
                if (!empty($template['partials']['top_menu'])) {
                    echo $template['partials']['top_menu'];
                } else {
                    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                    echo '<ul class="navbar-nav mr-auto">';
                    echo '<li class="nav-item"><a href="' . base_url() . '">Home</a></li>';
                    echo '</ul>';
                    echo '<form class="form-inline my-2 my-lg-0">';
                    echo '<button class="btn btn-outline-success my-2 my-sm-0 btn--primary" id="contact">Contact Us</button>';
                    echo '</form>';
                    echo '</div>';
                }
        ?>
</nav>
<!-- Navigation end here -->

<!-- Default Nav Template -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark" id="navbarMain">

      <a class="navbar-brand" href="#">
        <img src="assets/img/logo--new.png" width="60" height="60" alt="logo" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/index.html">Homepage
              <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/package-list.html">Tour & Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mice-list.html">Other Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about-us.html">About Us</a>
          </li>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0 btn--primary" id="contact">Contact Us</button>
          </form>
        </div>
      </nav> -->