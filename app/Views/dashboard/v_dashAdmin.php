<?= $this->extend('layout/admin'); ?>

<?= $this->section('isi'); ?>
<?php $session = session(); ?>
<h3 class="font-weight-bold">Hallo, <?= $session->get('fullname'); ?></h3>
<?= $this->endSection(); ?>