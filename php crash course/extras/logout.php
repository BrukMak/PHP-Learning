<?php
session_start();
session_destroy();
header('Location: /php%20crash%20course/13_sessions.php');

?>