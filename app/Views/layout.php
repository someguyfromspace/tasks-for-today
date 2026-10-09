<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Tasks for Today</a>
        <div class="navbar-nav">
            <a class="nav-link" href="<?= base_url('/') ?>">Welcome</a>
            <a class="nav-link" href="<?= base_url('tasks') ?>">Task List</a>
            <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
        </div>
    </div>
</nav>
<div class="container">
    <?= $this->renderSection('content') ?>
</div>
</body>
</html>