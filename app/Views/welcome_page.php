<?= view('templates/header') ?>

<h2>Today's Tasks (<?= date('F j, Y') ?>)</h2>

<?php if (!empty($tasks) && is_array($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td>
                        <span style="text-transform: capitalize; font-weight: bold;">
                            <?= esc($task['status']) ?>
                        </span>
                    </td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tasks scheduled for today!</p>
<?php endif; ?>

</body>
</html>