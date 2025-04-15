<?php
if (!isset($menu)) include_once("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $site_data['site_title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?= $site_data['site_title'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php
                foreach ($menu as $key => $label) {
                    if ($key === 'login' && is_logged_in()) continue;
                    if ($key === 'logout' && !is_logged_in()) continue;
                    if ($key === 'messages' && !is_logged_in()) continue;

                    echo "<li class='nav-item'>
                        <a class='nav-link' href='index.php?page={$key}'>{$label}</a>
                    </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
<?php if (is_logged_in()) : ?>
    <div class="alert alert-info text-end">
        Logged in: <?= htmlspecialchars($_SESSION['family_name'] . ' ' . $_SESSION['surname']) ?> (<?= $_SESSION['username'] ?>)
    </div>
<?php endif; ?>
