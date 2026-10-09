<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Profile</h1>

<?php if ($user): ?>
<div class="card" style="max-width: 500px;">
    <div class="card-body">
        <h4 class="card-title"><?= esc($user['full_name']) ?></h4>
        <p class="mb-1"><strong>Jian Robert Gonzales:</strong> <?= esc($user['username']) ?></p>
        <p class="mb-1"><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p class="mb-0"><strong>Member since:2026</strong> <?= esc($user['created_at']) ?></p>
    </div>
</div>
<?php else: ?>
    <div class="alert alert-warning">No user found.</div>
<?php endif; ?>

<?= $this->endSection() ?>