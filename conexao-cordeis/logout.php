<?php

unset($_SESSION['admin']);
session_destroy();
header('Location: /');

?>