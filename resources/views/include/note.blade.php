
<?php
$message = Session::get('message');
if ($message) {
    echo '<p class="message_login">', $message, '</p>';
    Session::put('message', null);
}
?>