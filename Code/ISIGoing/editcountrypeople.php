<!DOCTYPE html>
<?php
include 'dbconnection.php';
$idC = mysqli_real_escape_string($conn, $_POST['idCountry']);
$sql = "SELECT people FROM country WHERE idCountry={$idC}";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($result);
$people = $res['people'];
//form to edit people part of a country

?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'banner.php' ?>

        <div class="container">

            <form role="form" action="editcountrypeople2.php" method="post">
                
                <div class="form-group">
                    <label for="revtext">Country people<span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="5" id="revtext" name="peopletext" required> <?php echo $people; ?> </textarea>
                </div>
               
                <div class="form-group">
                    <button onclick="return confirm('Are you sure you have edited all you wanted?')" type="submit" class="btn btn-success">
                        Edit Info!</button>
                    
                </div>
                <input type="hidden" name="idCountry" value="<?php echo $idC; ?>"> 
            </form>
<?php include 'footer.php'; ?>
        </div>

    </body>
    <script src="http://code.jquery.com/jquery-latest.min.js" />        
    <script src="js/bootstrap.min.js" />


</html>
<?php
mysqli_close($conn);
?>