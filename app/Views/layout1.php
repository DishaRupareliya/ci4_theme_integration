<?= $this->extend('master') ?>
<?= $this->section('title') ?>Test<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <h1>Test!</h1>

    <?= $this->include('includes/sidebar') ?>
<?= $this->endSection() ?>