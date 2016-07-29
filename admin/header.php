<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Travel Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nama'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="lokasi.php"><i class="fa fa-fw fa-bar-chart-o"></i> Lokasi</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-bar-chart-o"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="list_pembelian.php"><i class="fa fa-fw fa-bar-chart-o"></i>List Pembelian</a>
                    </li>
                    <li>
                        <a href="pelanggan.php"><i class="fa fa-fw fa-bar-chart-o"></i> Pelanggan</a>
                    </li>
                    <?php
                    //if ($_SESSION['priv']=="") {
                        echo "<li><a href='user.php'><i class='fa fa-fw fa-bar-chart-o'></i> User (Admin)</a></li>";
                        //echo "$_SESSION[priv]";
                    //}
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>