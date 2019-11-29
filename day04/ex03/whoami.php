<?php
    session_start();
    if ($_SESSION['loggued_on_user'])
        $out = $_SESSION['loggued_on_user']."\n";
    else
        $out = "ERROR\n";
?>
<?=$out?>