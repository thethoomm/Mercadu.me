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
                                            <th>Preço</th>
                                            <th>Marca</th>
                                            <th>Quantidade</th>
                                            <th>Total</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th colspan="100">Total de produtos: <?= count($listaDeProdutos)?></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($listaDeProdutos as $produto) : ?>
                                            <tr>
                                                <td><?= $produto->prod_id?></td>
                                                <td><?= $produto->prod_nome ?></td>
                                                <td><?= $produto->prod_marca ?? '(Sem marca)'?></td>
                                                <td>R$<?= $produto->prod_preco ?></td>
                                                <td><?= $produto->prod_quantidade ?></td>
                                                <td>R$<?= $produto->prod_preco * $produto->prod_quantidade ?></td>
                                                <td>A fazer</td>
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