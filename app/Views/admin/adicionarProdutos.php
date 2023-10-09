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
                    <form action="<?php url_to('adicionar.produtos.acao') ?>" method="post">
                        Nome: <input type="text" name="nome"><br>
                        Preço: <input type="text" name="preco"><br>
                        Marca: <input type="text" name="marca"><br>
                        Quantidade: <input type="number" name="quantidade"><br>
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                    </form>

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