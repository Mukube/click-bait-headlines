<?php
    define("TITLE","Honest Click-Bait Headlines");
    include("function.php");
     if( isset( $_POST["fix_submit"]) ) {

         checkForClickBait();
     }


?>
<!Doctype html>

<html>
    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo (TITLE); ?></title>
        
        <!--Boostrap CSS-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click-baits? Turn those annoying headlines into honest and realistic ones using this simole program.
            </p>
            
            <div class="row">
                
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headlines here" class="form-control input-lg" name="clickbait_headline"></textarea>
                    <br>
                    <button class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
                
                </form>
            </div>
            
        </div>
        
        <?php
        
        if (isset($_POST["fix_submit"])) {
          
            $clickBait = checkForClickBait()[0];
            $honestHeadline = checkForClickBait()[1];
            
            displayHonestHeadline($clickBait, $honestHeadline);  
        }
        ?>
        
        


        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    
    
</html>