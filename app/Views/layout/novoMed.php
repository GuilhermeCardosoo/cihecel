<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->
<?= $this->section('conteudo') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('public/atendimento/consultaEstoque') ?>">Estoque</a></li>
        <li class="breadcrumb-item active" aria-current="page">Novo medicamento</li>
    </ol>
</nav>
<!-- Back-end -->

<?= $this->include('formularios/cadastroForm.php') ?>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->
<?= $this->endSection() ?>