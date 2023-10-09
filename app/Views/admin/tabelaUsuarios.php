<!DOCTYPE html>
<html lang="en">

<?php include('components/header.php') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('components/sidebar.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('components/topbar.php') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produtos em estoque</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de produtos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Cargo</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th colspan="100">Total de usuários: <?= count($lista) ?></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($lista as $usuario) : ?>
                                            <tr>
                                                <td><?= $usuario->id ?></td>
                                                <td><?= $usuario->nome ?></td>
                                                <td><?= $usuario->email ?></td>
                                                <td>
                                                    <?php if (!$usuario->cargo) : ?>
                                                        <span class="badge badge-primary">Administrador</span>
                                                    <?php else : ?>
                                                        <span class="badge badge-warning">Funcionário</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if ($usuario->ativo) : ?>
                                                        <span class="badge badge-success">Ativo</span>
                                                    <?php else : ?>
                                                        <span class="badge badge-secondary">Inativo</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('components/footer.php') ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include('components/scroolToTop.php') ?>

    <?php include('components/coresEssentials.php') ?>
</body>
</html>