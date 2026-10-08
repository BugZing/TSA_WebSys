<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        nav { background: #333; padding: 10px; margin-bottom: 20px; color: #fff; }
        nav a { color: #fff; margin-right: 15px; text-decoration: none; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 5px; max-width: 400px; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Welcome</a>
        <a href="<?= base_url('/tasks') ?>">All Tasks</a>
        <a href="<?= base_url('/profile') ?>">Profile</a>
        <a href="<?= base_url('/about') ?>">About</a>
        
        <span style="float: right;">
            <?php if (session()->get('isLoggedIn')): ?>
                Logged in as: <strong><?= esc(session()->get('username')) ?></strong> | 
                <a href="<?= base_url('/logout') ?>" style="color: #ff8888;">Logout</a>
            <?php else: ?>
                <a href="<?= base_url('/login') ?>">Login</a>
            <?php endif; ?>
        </span>
    </nav>