<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/datepicker.css">
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

</head>

<body>
<script type="text/javascript">
    $(document).ready(function(){
        $(".delete").click(function(ev){
            var con = confirm("Apa Anda yakin menghapus menu ini?");
            if(!con)
            {
                ev.preventDefault();
            }
        });
        
        $(".datepicker").datepicker({format: 'yyyy/mm/dd'});
        
    });
</script>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "header.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa"></i> User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" align="right">
                                <form role="form">
                                    <table width="100%">
                                        <tr>
                                            <td><a href="tambah_user.php" class="btn btn-primary">Tambah User</a></td>
                                            <td width="250">
                                            <td width="5">&nbsp</td>
                                            <td width="55">
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th colspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "../koneksi.php";
                                            $link=koneksi_db();
                                            $sql="SELECT * FROM user ORDER BY nama";
                                            $res=mysql_query($sql,$link);
                                            while ($data=mysql_fetch_array($res)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data[4] ?></td>
                                                <td><?php echo $data[1] ?></td>
                                                <td><a href="edit_user.php?kd=<?php echo $data[0]?>"><img style="width:20px" src="img/edit.png"></a></td>
                                                <td><a href="hapus_data.php?kd=<?php echo $data[0]?>&t=user"><img style="width:20px" src="img/delete.png"></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
