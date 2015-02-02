<!DOCTYPE html>
<?php
include 'dbconnection.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'banner.php' ?>

       
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <div class="text-center">
                                <video src="video.mp4" controls></video>
                            </div>
                        </div>
                    </div>
                </div>
<?php include 'footer.php'; ?>
            </div>
       
    </body>
    <script src="http://code.jquery.com/jquery-latest.min.js" />        
    <script src="js/bootstrap.min.js" />


</html>
<?php
mysqli_close($conn);
?>