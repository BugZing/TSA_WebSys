<?= view('templates/header') ?>

<h2>User Profile</h2>

<?php if (!empty($user)): ?>
    <div class="card">
        <p><strong>ID:</strong> <?= esc($user['id']) ?></p>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Password Hash:</strong> <code><?= esc($user['password']) ?></code></p>
        <p><strong>Created At:</strong> <?= esc($user['created_at']) ?></p>
    </div>
<?php else: ?>
    <p>No user record found in the database.</p>
<?php endif; ?>

</body>
</html>