<?= $this->extend('master') ?>
<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <h1>Hello World!</h1>

    <?= $this->include('includes/sidebar') ?>
<?= $this->endSection() ?>