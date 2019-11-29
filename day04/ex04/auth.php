<?php
    function auth($login, $passwd)
    {
        if (!file_exists('../private/passwd'))
            return FALSE;
        $accounts = unserialize(file_get_contents('../private/passwd'));
        foreach($accounts as $user_acc)
        {
            $mdp = hash('whirlpool', $passwd);
            if ($user_acc['login'] ===  $login && $user_acc['passwd'] === $mdp)
                return TRUE;
        }
        return FALSE;
    }
?>