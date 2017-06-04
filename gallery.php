<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        
        <style>
            .gallery_image
            {
                float: left;
                border: groove;
                margin-left: 3px;
            }
        </style>
    </head>
    
    <body class="background">
        <div id="wrapper" >
            <?php
                include('navigation.php');
                include('header.php');
            ?>
            
            <h3>
                Gallery of Work
            </h3>
            
            <?php
                include('dbconnect.php');
                
                $query = $db->prepare("SELECT * FROM gallery");
                $query->execute();
                
                if($query != false)
                {
                    $row = [];
                    foreach($query as $row)
                    {
            ?>
                <div>
                    <form method="post" class="gallery">
                        <img src="images/<?php echo $row['images']; ?>" width="300" height="250" class="gallery_image" />
                    </form>
                </div>
            <?php
                    }
                }
                else
                {
                    echo "<h2>I apologize, but the gallery isn't working. Please come back at a later time.</h2>";
                }
            ?>
        </div>
        <div>
            <?php
                include('footer.php');
            ?>
        </div>
    </body>
</html>