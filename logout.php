<?php

session_start();

session_destroy();

header("Location: http://localhost/MediWay/01_index.php");
exit;