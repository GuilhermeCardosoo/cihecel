<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<style>
    tbody tr td a {
        color: black;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('public') ?>">Atendimento</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Atendimento</li>
            </ol>
        </nav>
    </ol>
</nav>
<?= $this->include('tabelas/tabelaPrincipal.php') ?>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->
<?= $this->endSection() ?>