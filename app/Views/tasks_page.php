<?= view('templates/header') ?>

<h2>Full Task List (All Dates)</h2>

<?php if (!empty($tasks) && is_array($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created At</th>
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
                    <td><?= esc($task['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tasks found in the database.</p>
<?php endif; ?>

</body>
</html>