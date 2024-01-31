<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>add_content My Blog</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    

<body>

    

    <!-- Custom styles for this template from bootsrap -->
    <link href="assets/css/headers.css" rel="stylesheet">

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
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <!-- <li><a class="dropdown-item" href="#">Admin</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li> -->
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


      <!-- start of the create post code -->
    <form action="content_process.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">

                
                    <!-- <strong class="title">Self Help</strong>
                    <h3 class="sub title">Achieving Life-Changing Goals</h3> -->

                    <label for="class_title">Title:</label>
                    <input type="text" name="class_title" id="class_title" placeholder="Enter title">

                    <label for="sub_title">Sub Title:</label>
                    <input type="text" name="sub_title" id="sub_title" placeholder="Enter sub title">

                    
                    <div class="mb-1 text-body-secondary"><?= date("Y")?></div>

                    <textarea name="text_content" rows="4" cols="50" placeholder="Enter text content"></textarea>

                    <!-- <input type="file" name="image" accept="image/*"> -->

                    <input type="hidden" name="content_id" value="0"> <!-- Placeholder for content ID, initially set to 0 -->
                    
                    <input type="submit" value="Create/Update Content">

                </div>
<!-- 
                <div class="col-lg d-lg-block">
                    <img class="bd-placeholder-img w-100 w-lg-50" width="200" height="250" src="assets/slider/ism/image/slides/laugh.jpg">
                </div> -->

            </div>
        </div>
    </form>
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
