  <!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Squares</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/swiper.min.css">
    <!-- <link rel="stylesheet" href="styles/drawingboard.nocontrol.min.css"> -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
    <meta name="apple-mobile-web-app-capable" content="yes">   
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <header>
    <nav class="c_top-nav">
      <a class="top-nav_board-title" href="./index.html">MyCoolBoard</a>
      <button class="top-nav_grid">
          <img src="./images/grid.png"/>
      </button>
      <button class="top-nav_gear">
        <img src="./images/gear.png"/>
      </button>
    </nav>
  </header>

  <main>
    <!-- stack = divergent, individual work; handheld display -->
    <section class="c_stack">
      <!-- dock = gallery of hash/parent drop-zones -->
      <div class="swiper-container c_dock"> 
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="o_hash">
              <img src="./images/hash.png" />
            </div>
          </div>

          <div class="swiper-slide">
            <div class="c_note--Parent">
              <div class="note_handle"></div>
              <div class="note_content"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="c_note--Parent">
              <div class="note_handle"></div>
              <div class="note_content"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="c_note--Parent">
              <div class="note_handle"></div>
              <div class="note_content"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="c_note--Parent">
              <div class="note_handle"></div>
              <div class="note_content"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="c_note--Parent">
              <div class="note_handle"></div>
              <div class="note_content"></div>
            </div>
          </div>

        </div>
      </div>

  <form class="c_pad drawing-form" action="create-drawing.php" method="post">

    <!-- this will be the drawingboard container -->
    <div class="c_note--Child">
          <div class="note_content" id="simple-board"></div>
          <div class="note_handle"></div>
    </div>

    <!-- this will be the input used to pass the drawingboard content to the server -->
    <input type="hidden" name="image" value="">

    <label>Name<input type="text" name="name" /></label>

    <button>Submit</button>

  </form> 


    </section>

    <section class="c_board">
      <!-- board = convergent group work; large display -->
    </section>

  </main>
  
  <aside class="c_side-nav is-hidden">
    <nav>
      <ul>
        <li>Save This Board</li>
        <li>Export</li>
        <li>Contact</li>
      </ul>
    </nav>
  </aside>



    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <!-- endbower -->
    <!-- endbuild -->
    
    <!-- build:js scripts/main.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="scripts/swiper.min.js"></script>
  <script src="scripts/drawingboard.nocontrol.min.js"></script>
  <script src="https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.js"></script>
  <script src="scripts/main.js"></script>
    <!-- endbuild -->
  </body>
</html>
