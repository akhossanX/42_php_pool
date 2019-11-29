<?php
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];

    if (!file_exists("../private"))
        mkdir('../private/', 0777);
    $hashed_passwd = hash('whirlpool', $passwd);
    if ($_POST['submit'] != "OK" || !$login || !$passwd)
        $print = "ERROR\n";
    else
    {
        if (file_exists('../private/passwd'))
        {
            $raw_content = file_get_contents('../private/passwd');
            $content = unserialize($raw_content);
            
            foreach ($content as $account)
                if ($account['login'] == $login)
                    $print = "ERROR\n";
            if (!$print)
            {
                $content[] = ["login" => $login, "passwd" => $hashed_passwd];
                $content = serialize($content);
                file_put_contents('../private/passwd', $content);
                $print = "OK\n";
            }
        }
        else
        {
            $content = [
                    ["login" => $login, "passwd" => $hashed_passwd]
            ];
            file_put_contents('../private/passwd', serialize($content));
            $print = "OK\n";
        }
    }
?>
<?=$print?>