<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>All Tasks</h1>

<table class="table table-striped table-bordered bg-white">
    <thead>
        <tr><th>#</th><th>Title</th><th>Status</th><th>Task Date</th></tr>
    </thead>
    <tbody>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['id']) ?></td>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>