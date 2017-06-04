<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="author" content="Nhia Yang">
        <meta name="viewport" content="width=device-width">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script>
            $(function() {
    
                $("#slideshow > div:gt(0)").hide();
    
                setInterval(function() {
                  $('#slideshow > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#slideshow');
                },  3000);
    
            });
        </script>
        <style>
        #slideshow {
            background-image: url("images/box-image.jpg");
            margin: 50px auto; 
            position: relative; 
            width: 400px; 
            height: 240px; 
            padding: 10px; 
            box-shadow: 0 0 20px rgba(25,5,85,55);
        }
        
        #slideshow > div { 
            position: absolute; 
            top: 10px; 
            left: 10px; 
            right: 10px; 
            bottom: 10px; 
        }
        </style>
    </head>
    <body class="background">
        <div id="wrapper" >
            <?php
                include('navigation.php');
                include('header.php');
            ?>
            
            <h1 class="header" >
                Developer in Learning
            </h1>
                
            <div id="slideshow">
                <div>
                  <img src="images/01.jpg" height="240" width="400" >
                </div>
                <div>
                  <img src="images/02.jpg" height="240" width="400" >
                </div>
             </div>
        </div>
        <div>
            <?php
                include('footer.php');
            ?>
        </div>
        
    </body>
</html>