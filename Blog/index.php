<?php include('path.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>blog</title>

  <script src="https://kit.fontawesome.com/5d6fb7f694.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="asserts/css/style.css" />
</head>

<body>

  <?php include(ROOT_PATH . '/app/includes/header.php'); ?>

  <div class="page-wrapper">
    <!--       slidder-->
    <div class="post-slider">
      <h1 class="slider-title">trending posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">
        <div class="post clearfix">
          <img class="slider-image" src="asserts/images/image1.jpg" alt="" />

          <div class="post-info">
            <h4><a href="single.html">How to become a photographer</a></h4>
            <i class="fas fa-user"> Mr B</i>&nbsp;<i class="fas fa-calendar-week">dec 7,2019</i>
          </div>
        </div>

        <div class="post clearfix">
          <img class="slider-image" src="asserts/images/image1.jpg" alt="" />

          <div class="post-info">
            <h4><a href="single.html">How to become a photographer</a></h4>
            <i class="fas fa-user"> Mr B</i>&nbsp;<i class="fas fa-calendar-week">dec 7,2019</i>
          </div>
        </div>

        <div class="post clearfix">
          <img class="slider-image" src="asserts/images/image1.jpg" alt="" />

          <div class="post-info">
            <h4><a href="single.html">How to become a photographer</a></h4>
            <i class="fas fa-user"> Mr B</i>&nbsp;<i class="fas fa-calendar-week">dec 7,2019</i>
          </div>
        </div>

        <div class="post clearfix">
          <img class="slider-image" src="asserts/images/image1.jpg" alt="" />

          <div class="post-info">
            <h4><a href="single.html">How to become a photographer</a></h4>
            <i class="fas fa-user"> Mr B</i>&nbsp;<i class="fas fa-calendar-week">dec 7,2019</i>
          </div>
        </div>

        <div class="post clearfix">
          <img class="slider-image" src="asserts/images/image1.jpg" alt="" />

          <div class="post-info">
            <h4><a href="single.html">How to become a photographer</a></h4>
            <i class="fas fa-user"> Mr B</i>&nbsp;<i class="fas fa-calendar-week">dec 7,2019</i>
          </div>
        </div>
      </div>
    </div>

    <!--        end of post slider-->

    <!--       beginning of content-->
    <div class="content clearfix">
      <div class="main-content">
        <h1 class="recent-post-title">Recent posts</h1>

        <div class="post">
          <img src="asserts/images/image3.jpg" alt="" class="post-image" />
          <div class="post-preview">
            <h2>
              <a href="single.html">the art of writting an art piece</a>
            </h2>

            <i class="fas fa-user">Mr B</i>&nbsp;<i class="fas fa-calendar-week">Dec 10,2019</i>

            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
              autem necessitatibus enim, accusamus sequi dolorem.
            </p>

            <a href="single.html" class="btn read-more">Read more</a>
          </div>
        </div>

        <div class="post">
          <img src="asserts/images/image2.jpg" alt="" class="post-image" />
          <div class="post-preview">
            <h2>
              <a href="single.html">the art of writting an art piece</a>
            </h2>

            <i class="fas fa-user">Mr B</i>&nbsp;<i class="fas fa-calendar-week">Dec 10,2019</i>

            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
              autem necessitatibus enim, accusamus sequi dolorem.
            </p>

            <a href="single.html" class="btn read-more">Read more</a>
          </div>
        </div>

        <div class="post">
          <img src="asserts/images/image1.jpg" alt="" class="post-image" />
          <div class="post-preview">
            <h2>
              <a href="single.html">the art of writting an art piece</a>
            </h2>

            <i class="fas fa-user">Mr B</i>&nbsp;<i class="fas fa-calendar-week">Dec 10,2019</i>

            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
              autem necessitatibus enim, accusamus sequi dolorem.
            </p>

            <a href="single.html" class="btn read-more">Read more</a>
          </div>
        </div>

        <div class="post">
          <img src="asserts/images/image4.jpg" alt="" class="post-image" />
          <div class="post-preview">
            <h2>
              <a href="single.html">the art of writting an art piece</a>
            </h2>

            <i class="fas fa-user">Mr B</i>&nbsp;<i class="fas fa-calendar-week">Dec 10,2019</i>

            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
              autem necessitatibus enim, accusamus sequi dolorem.
            </p>

            <a href="single.html" class="btn read-more">Read more</a>
          </div>
        </div>

        <div class="post">
          <img src="asserts/images/image5.jpg" alt="" class="post-image" />
          <div class="post-preview">
            <h2>
              <a href="single.html">the art of writting an art piece</a>
            </h2>

            <i class="fas fa-user">Mr B</i>&nbsp;<i class="fas fa-calendar-week">Dec 10,2019</i>

            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
              autem necessitatibus enim, accusamus sequi dolorem.
            </p>

            <a href="single.html" class="btn read-more">Read more</a>
          </div>
        </div>
      </div>

      <!--           side bar-->
      <div class="sidebar">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="search...." />
          </form>
        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Quote</a></li>
            <li><a href="#">poems</a></li>
            <li><a href="#">health</a></li>
            <li><a href="#">tech news</a></li>
            <li><a href="#">articles</a></li>
            <li><a href="#">fittness</a></li>
            <li><a href="#">diet</a></li>
            <li><a href="#">entertainment</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!--     end of content   -->
  </div>

  <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>


  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="asserts/js/script.js"></script>
</body>

</html>