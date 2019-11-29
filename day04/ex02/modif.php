<?php
    $login = $_POST['login'];
    $oldpw = $_POST['oldpw'];
    $newpw = $_POST['newpw'];

    $hashed_newpw = hash('whirlpool', $newpw);
    $hashed_oldpw = hash('whirlpool', $oldpw);
    if ($_POST['submit'] != "OK" || !$login || !$newpw || !$oldpw)
        $print = "ERROR\n";
    else
    {
        $done = false;

        $raw_content = file_get_contents('../private/passwd');
        $content = unserialize($raw_content);
        foreach ($content as &$account)
        {
            if ($account['login'] == $login && $account['passwd'] == $hashed_oldpw)
            {
                $account['passwd'] = $hashed_newpw;
                $content = serialize($content);
                file_put_contents('../private/passwd', $content);
                $print = "OK\n";
                $done = true;
                break ;
            }
        }
        if (!$done)
            $print = "ERROR\n";
    }
?>
<?=$print?>