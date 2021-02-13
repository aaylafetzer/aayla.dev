<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"><?php echo $yamlContent->name; ?></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $yamlContent->image; ?>" alt="">
      </span>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
<?php

// Create section links
foreach ($yamlContent->sections as $section => $key) {
    $link = slugify($section);
    // Test if the section is a link to another side
    if ($key->type == "link") {
      $link = $key->url;
    }
    // Echo link to navbar
    echo '
        <li class="nav-item">
            <a class="nav-link" href="' . $link . '">' . $section . '</a>
        </li>
    ';
}
echo '</ul></div></nav>';

?>