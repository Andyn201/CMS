
<?php include('includes/header.php'); ?>

<?php
    if($connection){
        echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit quos, tempora iusto reprehenderit libero provident cumque nemo. Corrupti a deserunt vel perspiciatis veniam mollitia quae facilis ullam non eum.';
    }
    else {
        echo "no";
    }
?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To The Admin Area
                            <small>Author</small>
                        </h1>

                       

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
  
<?php include('includes/footer.php') ?>