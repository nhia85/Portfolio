<html>
    <?php
        include('dbconnect.php');
        
        $query = $db->prepare("SELECT resume, cover, github FROM info WHERE id = 1");
        $query->execute();
        foreach($query as $i)
        {
            $resume = $i['resume'];
            $cover = $i['cover'];
            $github = $i['github'];
        }
    ?>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        
        <style>
            
        </style>
    </head>
    
    <body class="background">
        <div id="wrapper" >
            <?php
                include('navigation.php');
                include('header.php');
            ?>
            
            <div class="image_one">
                <img src="images/nhia_1.jpg" alt="image_1" width=150px height=270px />
            </div>
            
            <p>
                Hello, My name is Nhia Yang and I'm a Web Developer. I've develop a few websites using PHP, ASP, with MYSQL for both
                languages. I also develop a few programs using JAVA, Python, C#. If you would like to see my work, it's in my
                <a href="gallery.php">gallery</a>. Although, I'm relatively new to the IT world, I have a yearn for learning.
            </p>
            
            <div class="resume">
                <h4>Nhia Yang Resume (most updated)</h4>
                <a href='doc/<?php echo $resume; ?>' download >Nhia Yang Resume</a>
            </div>
            <div class="cover">
                <h4>Nhia Yang Cover Letter (most updated)</h4>
                <a href='doc/<?php echo $cover; ?>' download >Nhia Yang Cover Letter</a>
            </div>
            <div class="github">
                <h4>Nhia Yang Github</h4>
                <a href='#' onclick="window.open('<?php echo $github; ?>')">Nhia Yang Github</a>
            </div>
            
        </div>
        <div class="container">
            <?php
                include('footer.php');
            ?>
        </div>
    </body>
</html>