<?php 
$rad = $_POST['rad']; 
if (isset($_POST['cb1'])) { 
    $cb1 = $_POST['cb1']; 
    $op1 = 'DEEP RELAXING MARMA - MYR 555 FOR 60 MINUTES'; 
} else { 
    $cb1 = 0; 
    $op1 = ''; 
} 
 
if (isset($_POST['cb2'])) { 
    $cb2 = $_POST['cb2']; 
    $op2 = 'AYURVEDA FOOT MASSAGE - MYR 295 FOR 30 MINUTES'; 
} else { 
    $cb2 = 0; 
    $op2 = ''; 
} 
 
if (isset($_POST['cb3'])) { 
    $cb3 = $_POST['cb3']; 
    $op3 = 'UPPER BACK - MYR 295 FOR 30 MINUTES'; 
} else { 
    $cb3 = 0; 
    $op3 = ''; 
} 
 
if (isset($_POST['cb4'])) { 
    $cb4 = $_POST['cb4']; 
    $op4 = '24-CARAT GOLD FACIAL - MYR 635 60 MINUTES'; 
} else { 
    $cb4 = 0; 
    $op4 = ''; 
} 
if (isset($_POST['cb5'])) { 
    $cb5 = $_POST['cb5']; 
    $op5 = 'HYDRATING FACIAL - MYR 615 60 MINUTES'; 
} else { 
    $cb5 = 0; 
    $op5 = ''; 
} 
if (isset($_POST['cb6'])) { 
    $cb6 = $_POST['cb6']; 
    $op6 = 'SHAPING & LIFTING MESO BT-LIFT - MYR 695 FOR 90 MINUTES'; 
} else { 
    $cb6 = 0; 
    $op6 = ''; 
} 
if (isset($_POST['cb7'])) { 
    $cb7 = $_POST['cb7']; 
    $op7 = 'ANTI-AGING MESO FILLER - MYR 655 FOR 90 MINUTES'; 
} else { 
    $cb7 = 0; 
    $op7 = ''; 
} 
if (isset($_POST['cb8'])) { 
    $cb8 = $_POST['cb8']; 
    $op8 = 'MESO BRIGHT - MYR 655 FOR 90 MINUTES'; 
} else { 
    $cb8 = 0; 
    $op8 = ''; 
} 
if (isset($_POST['cb9'])) { 
    $cb9 = $_POST['cb9']; 
    $op9 = 'BODY SHAPING MESO SLIM - MYR 305 15 MINUTES'; 
} else { 
    $cb9 = 0; 
    $op9 = ''; 
} 
if (isset($_POST['cb10'])) { 
    $cb10 = $_POST['cb10']; 
    $op10 = 'GEMO THERMAL SALT BODY POLISH - MYR 305 FOR 60 MINUTES'; 
} else { 
    $cb10 = 0; 
    $op10 = ''; 
} 
if (isset($_POST['cb11'])) { 
    $cb11 = $_POST['cb11']; 
    $op11 = 'ANTIOXIDANT DETOX BODY WRAP - MYR 415 FOR 60 MINUTES'; 
} else { 
    $cb11 = 0; 
    $op11 = ''; 
} 
if (isset($_POST['cb12'])) { 
    $cb12 = $_POST['cb12']; 
    $op12 = 'DETOX BODY WRAP - MYR 210 FOR 60 MINUTES'; 
} else { 
    $cb12 = 0; 
    $op12 = ''; 
} 
function calcTotal($cb1, $cb2,  $cb3, $price) 
{ 
    $total = $price + $cb1 + $cb2 + $cb3; 
    return $total; 
}