<?php

session_start();

if(!isset($_SESSION["admin_id"])){
    header("Location: ../auth/login.php");
    exit;
}

$adminName=$_SESSION["admin_name"];
$adminEmail=$_SESSION["admin_email"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<div class="dashboard-container">

<div class="sidebar">

<h2>Admin Panel</h2>

<a href="#">🏠 Dashboard</a>
<a href="#">📦 Data Barang</a>
<a href="#">👥 Data Admin</a>
<a href="#">📊 Laporan</a>
<a href="../auth/logout.php">🚪 Logout</a>

</div>

<div class="main-content">

<div class="welcome-card">

<h1>Selamat Datang, <?= htmlspecialchars($adminName) ?></h1>

<p>Email : <?= htmlspecialchars($adminEmail) ?></p>

<p>
Login :
<?= date('d F Y H:i:s'); ?>
</p>

</div>

<div class="stats">

<div class="stat-card">
<h3>Total Admin</h3>
<p>1</p>
</div>

<div class="stat-card">
<h3>Status</h3>
<p>Online</p>
</div>

<div class="stat-card">
<h3>Tanggal</h3>
<p><?= date('d/m/Y') ?></p>
</div>

</div>

</div>

</div>

</body>
</html>
