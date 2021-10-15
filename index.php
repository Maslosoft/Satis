<?php
if(array_key_exists('push', $_GET)){
    file_put_contents(__DIR__ . '/lock/do', '1');
}
echo file_get_contents(__DIR__ . '/index.html');
?>
