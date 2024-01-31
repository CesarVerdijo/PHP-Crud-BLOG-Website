<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home My Blog</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template from bootsrap -->
    <link href="assets/css/headers.css" rel="stylesheet">
<body>
<!-- header -->
  <header class="p-3 border-bottom">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img class="bi me-5" src="assets/images/logo.png" alt="" width="60" height="40" style="object-fit: cover;">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Blog</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">About us</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>


<!-- slider picture-->
  <link rel="stylesheet" href="assets/slider/ism/css/my-slider.css"/>
<script src="assets/slider/ism/js/ism-2.2.min.js"></script>

<div class="ism-slider" data-transition_type="fade" data-play_type="loop" id="my-slider">
  <ol>
    <li>
      <img src="assets/slider/ism/image/slides/tilorr.jpg">
      <div class="ism-caption ism-caption-0">Popular Now</div>
    </li>
    <li>
      <img src="assets/slider/ism/image/slides/diy.jpg">
      <div class="ism-caption ism-caption-0">Fun DIY</div>
    </li>
    <li>
      <img src="assets/slider/ism/image/slides/bestlife.jpg">
      <div class="ism-caption ism-caption-0">Living your best life</div>
    </li>
  </ol>
</div>
<!-- end of slider picture -->






<!-- featured-post -->

  <main class="p-2">
  <h3 class=" mx-4">Featured</h3>

  <div class="row mb-2">

     <!-- first box on the left side -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Self Help</strong>
          <h3 class="mb-0">Achieving Life-Changing Goals</h3>
          <div class="mb-1 text-body-secondary"><?= date("Y")?></div>
          <p class="card-text mb-auto">Create a life you can look back on with joy and satisfaction.  </p>
          <a href="content.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-lg d-lg-block">
         <img  class="bd-placeholder-img w-100 w-lg-50" width="200" height="250" src="assets/slider/ism/image/slides/laugh.jpg" >
        </div>
      </div>
    </div>
     <!-- end of first box on the left side -->



    <!-- second box on the right side -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis"> Fun Designs</strong>
          <h3 class="mb-0">Variety of things to do</h3>
          <div class="mb-1 text-body-secondary"><?= date("Y")?></div>
          <p class="mb-auto">Craft ideas for adults are the perfect way to exercise your creativity or even sell your unusual creations.</p>
          <a href="content.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-lg d-lg-block">
          <img  class="bd-placeholder-img w-100 w-lg-50" width="200" height="250" src="assets/slider/ism/image/slides/socks.jpeg" >
        </div>
      </div>
    </div>
    <!-- end of second box on the right side -->



    <!-- fthird box on the left side -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Keep up to date</strong>
          <h3 class="mb-0">What's Trending</h3>
          <div class="mb-1 text-body-secondary"><?= date("Y")?></div>
          <p class="card-text mb-auto">It's been a good year for Taylor Swift. Swift's Eras Tour is the first tour to cross the billion-dollar mark according to Pollstar.</p>
          <a href="content.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-lg d-lg-block">
         <img  class="bd-placeholder-img w-100 w-lg-50" width="200" height="250" src="assets/slider/ism/image/slides/taylor.jpg" >
        </div>
      </div>
    </div>
     <!-- end of third box on the left side -->

    

    <!-- fourth box on the right side -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Top Charts</strong>
          <h3 class="mb-0">Most streamed artist</h3>
          <div class="mb-1 text-body-secondary"><?= date("Y")?></div>
          <p class="mb-auto">Taylor Swift is Spotify's most-streamed artist of 2023, ending Bad Bunny's 3-year reign.</p>
          <a href="content.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-lg d-lg-block">
          <img  class="bd-placeholder-img w-100 w-lg-50" width="200" height="250" src="assets/slider/ism/image/slides/taylorglobalartist.jpeg" >
        </div>
      </div>
    </div>
    <!-- end of fourth box on the right side -->






  </div>
</main>



<!-- footer -->


<div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
