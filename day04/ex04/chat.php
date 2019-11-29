<?php
    header('refresh: 1');
    date_default_timezone_set("Africa/Casablanca");
    if (file_exists('../private/chat'))
    {
        $chats = unserialize(file_get_contents('../private/chat'));
        foreach ($chats as $value)
        {

?>
     <b><?=$value['login']?> </b>  
     <?=date('H:i', $value['time'])?><b>:

     </b> <i><?=$value['msg']?></i><br>       
<?php
        }
    }
?>