<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styleshome.css">
  <script defer src="js/slides.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body id="homepg">
  <?php include 'navbar.php'?>
  <main>
    <h1>in IT to win IT</h1>
    <p>
      This site is created by the people of the group "in IT to win IT". </br>
      This is our project page. </br>
      It includes 3 different games, custom made pages with working funtions. </br>
      In this project we used HTML, CSS, and also included some JavaScript.
    
    </p>
    
    <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/Run2.png" style="width:100%">
                <div class="text">Run</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/Snake2.png" style="width:100%">
                <div class="text">Snake</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/Pong.png" style="width:100%">
                <div class="text">Pong</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
  </main>
  <?php include 'footer.php'?>
</body>