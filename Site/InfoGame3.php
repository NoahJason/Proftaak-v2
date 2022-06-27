<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/stylesnavbar.css">
    <link rel="stylesheet" href="css/stylesabout.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>About</title>
    <?php include 'navbar.php'?>
</head>

<body id="aboutpg">
    <main>
    <div class="imgBM">
        <a href="http://localhost/code/EXAME/about.php">
            <img class="imgBookmark" src="images/Bookmark2.png" alt="Photo of Bookmark"></img>
        </a>
    </div>
    <div id="textContainer1">
        <h1>Click one of the pictures to get info!</h1>
            <h4>
                Pong is a two-dimensional sports game that simulates table tennis.
                 The player controls an in-game paddle by moving it vertically across the left or right side of the screen.
                  They can compete against another player controlling a second paddle on the opposing side.
                 Players use the paddles to hit a ball back and forth.
            </h4>
            </div>
        <div id="game1">
            <a href="http://localhost/code/EXAME/InfoGame1.php"><img id="img" src="images/Run2.png" alt="Photo of game 1"></img></a>
        </div>
        <div id="game2">
            <a href="http://localhost/code/EXAME/InfoGame2.php"><img id="img" src="images/Snake2.png" alt="Photo of game 2"></img></a>
        </div>
        <div id="game3">
            <a href="http://localhost/code/EXAME/InfoGame3.php"><img id="img" src="images/Pong.png" alt="Photo of game 3"></img></a>
        </div>
    <script> 
            $(document).ready(function(){
            $("#textContainer1").show(2000)
            var div = $("#textContainer1");
            div.animate({top: '100px'}, "slow");
        });
        $(document).ready(function(){
            $("#game1").show(2000)
            var div = $("#game1");
            div.animate({right: '450px'}, "slow");
        }); 
        $(document).ready(function(){
            $("#game2").show(2000)
            var div = $("#game2");
            div.animate({right: '450px'}, "slow");
            div.animate({fontSize: '2em'}, "slow");
        }); 
        $(document).ready(function(){
            $("#game3").show(2000)
            var div = $("#game3");
            div.animate({right: '450px'}, "slow");
            div.animate({fontSize: '2em'}, "slow");
        }); 
    </script> 
</main>
</body>
    <footer>
        <?php include 'footer.php'?>
    </footer>
</html>