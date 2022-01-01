<?php 
require 'function.php'; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Spa Syafiqa & Farashikin</title> 
</head> 
 
<body> 
<fieldset id="intro1"> 
    <div> 
    <h1>Welcome To Spa And Wellness</h1> 
    <h4>FOUR SEASONS PLACE, 145 JALAN AMPANG, 50450 KUALA LUMPUR, MALAYSIA<br>Hour of service : Spa Treatments</h4> 
    <h5>Combining cutting-edge treatments with Malaysian traditions,  
        our spa delivers natural healing that draws on the best of both worlds.</h5> 
    </div> 
</fieldset> 
    <br> 
     
    <div class="papar"> 
    <?php 
        if ($rad == 'MASSAGE') { 
            $price = 295; 
        ?> 
            Service Selected: <br> <?php echo $rad; ?> <br><br> 
            Add On: <br> <?php echo $op1 ?> <br> <?php echo $op2 ?> <br> <?php echo $op3; ?> <br><br> 
            Total Price: RM<?php echo calcTotal($cb1, $cb2, $cb3, $price); 
                        } else if ($rad == 'FACIALS') { 
                            $price = 615; 
                            ?> 
            Service Selected: <br> <?php echo $rad; ?> <br><br> 
            Add On: <br> <?php echo $op4 ?> <br> <?php echo $op5 ?> <br> <?php echo $op6; ?> <br><br> 
            Total Price: RM<?php echo calcTotal($cb4, $cb5, $cb6, $price); 
                        } else if ($rad == 'SKINCARE') { 
                            $price = 305; 
                            ?> 
            Service Selected: <br> <?php echo $rad; ?> <br><br> 
            Add On: <br> <?php echo $op7 ?> <br> <?php echo $op8 ?> <br> <?php echo $op9; ?> <br><br> 
            Total Price: RM<?php echo calcTotal($cb7, $cb8, $cb9, $price); 
                        } else if ($rad == 'BODY RENEWAL') { 
                            $price = 405; 
                            ?> 
            Service Selected: <br> <?php echo $rad; ?> <br><br> 
            Add On: <br> <?php echo $op10 ?> <br> <?php echo $op11 ?> <br> <?php echo $op12; ?> <br><br> 
            Total Price: RM<?php echo calcTotal($cb10, $cb11, $cb12, $price); 
                        } else { 
                            ?> 
            <script> 
                alert('You must choose a service'); 
                window.location = 'index.php'; 
            </script> 
        <?php 
                        } 
        ?> 
<br> 
<a href="index.php">Back</a> 
    </div> 
 
 
</body> 
 
</html>