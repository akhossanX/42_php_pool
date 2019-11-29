<?php
    session_start();

    if ($_SESSION['loggued_on_user'] && $_POST['msg'] && $_POST['submit'] === "OK")
    {
        $login = $_SESSION['loggued_on_user'];
        $msg = $_POST['msg'];
        $time = time();
        $user_chat = ['login'=>$login, 'time'=>$time, 'msg'=>$msg];
        if (file_exists('../private/chat'))
        {
            $file = fopen('../private/chat', 'rw');
            if (flock($file, LOCK_EX))
            {
                $arr = unserialize(file_get_contents('../private/chat'));
                $arr[] = $user_chat;
                file_put_contents('../private/chat', serialize($arr));
            }
            fclose($file);
        }
        else
        {
            $arr[] = $user_chat;
            file_put_contents('../private/chat', serialize($arr));
        }
    }
    if ($_SESSION['loggued_on_user'])
        $content = '<form method="post" action="speak.php">
        <input type="text" name="msg" size="70%"/>
        <input type="submit" name="submit" value="OK"></form>
        ';
    else
        $content = "ERROR\n";
?>
<?=$content?>