<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Tasks for Today</h1>
<p class="text-muted"><?= esc($today) ?></p>

<?php if (empty($tasks)): ?>
    <div class="alert alert-info">No tasks scheduled for today.</div>
<?php else: ?>
    <ul class="list-group">
        <?php foreach ($tasks as $task): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= esc($task['title']) ?>
                <span class="badge bg-secondary"><?= esc($task['status']) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?= $this->endSection() ?>