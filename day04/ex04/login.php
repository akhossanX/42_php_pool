<?php
    include('./auth.php');

    session_start();

    $login = $_POST['login'];
    $passwd = $_POST['passwd'];

    if (auth($login, $passwd))
    {
        $_SESSION['loggued_on_user'] = $login;
        $msg  = '<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
        <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>';
    }
    else{
        $_SESSION['loggued_on_user'] = "";
        $msg = "ERROR\n";
    }
?>
<?=$msg?>