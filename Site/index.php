<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styleshome.css">
  <script defer src="js/slides.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include 'navbar.php'?>
  <main>
    <h1>HomePage</h1>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur aperiam labore asperiores rem.
      Commodi odio molestias temporibus sequi! Amet quam animi corporis natus nesciunt ipsa, dicta neque magni esse
      odit.
    </p>
    
    <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/elden.jpg" style="width:100%">
                <div class="text">Elden Ring</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/platform.jpg" style="width:100%">
                <div class="text">Platform</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/space.jpg" style="width:100%">
                <div class="text">Space Invaders</div>
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