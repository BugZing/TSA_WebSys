<?= view('templates/header') ?>

<h2>Login</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

<form action="<?= base_url('/login') ?>" method="post" style="max-width: 300px;">
    <?= csrf_field() ?>
    <div style="margin-bottom: 10px;">
        <label>Username:</label><br>
        <input type="text" name="username" required style="width: 100%;">
    </div>
    <div style="margin-bottom: 10px;">
        <label>Password:</label><br>
        <input type="password" name="password" required style="width: 100%;">
    </div>
    <button type="submit">Log In</button>
</form>

</body>
</html>