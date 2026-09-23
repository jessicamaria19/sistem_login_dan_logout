<?php

session_start();

if (isset($_SESSION['admin_id'])) {
    header("Location: /sistem_login_logout/dashboard/index.php");
    exit;
}

header("Location: /sistem_login_logout/auth/login.php");
exit;