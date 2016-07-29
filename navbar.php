<<<<<<< HEAD
<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Night Howl Travel</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="index.php">Beranda</a></li>
	            <li><a href="jadwal.php">Lokasi & Jadwal</a></li>
	            <li><a href="#contact">Contact</a></li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	          	<?php
                if ($_SESSION['user']=="") {
              ?>
	            <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                	<ul class="dropdown-menu">
	                	<li>
	                		<form action="login.php" role="form" method="post">
					           	<table width="100%" border="0">
						           	<tr>
						                <td width="10">&nbsp</td>
						                <td><p class="help-block"><h5 class="media-heading"><strong>Log In</strong></td>
						                <td width="10">&nbsp</td>
						            </tr>
						            <tr>
						                <td>&nbsp</td>
						                <td><input class="form-control" placeholder="username" name="username" required><p class="help-block"></td>
						            </tr>
						            <tr>
						                <td>&nbsp</td>
						                <td><input type="password" class="form-control" placeholder="password" name="password" required><p class="help-block"></td>
						            </tr>
						            <tr>
						              <td>&nbsp</td>
						              <td align="center"><button type="submit" class="btn btn-sm btn-primary" id="login">Log In</button></td>
						            </tr>
					            </table>
					            </form>
				            </li>
				            <li role="separator" class="divider"></li>
				            <li><a href="signup.php">Daftar Baru</a></li>
                	</ul>
              </li>
              <?php
              }
                else{ ?>
                	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user'] ?><span class="caret"></span></a>
                	<ul class="dropdown-menu">
	                	<li><a href="mybook.php">Pesanan saya</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="logout.php">Log out</a></li>
                	</ul>
              </li>
              <?php } ?>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

      </div>
=======
<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Night Howl Travel</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="index.php">Beranda</a></li>
	            <li><a href="jadwal.php">Lokasi & Jadwal</a></li>
	            <li><a href="#BDO">Call Center</a></li>
	            
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                <ul class="dropdown-menu">
                	<?php
                		if ($_SESSION['user']=="") {
                	?>
                			 <li>
			                    <table width="100%" border="0">
			                      <tr>
			                        <td width="10">&nbsp</td>
			                        <td><p class="help-block"><h5 class="media-heading"><strong>Log In</strong></td>
			                         <td width="10">&nbsp</td>
			                      </tr>
			                      <tr>
			                        <td>&nbsp</td>
			                        <td><input class="form-control" placeholder="Username"><p class="help-block"></td>
			                      </tr>
			                      <tr>
			                        <td>&nbsp</td>
			                        <td><input type="password" class="form-control" placeholder="Password"><p class="help-block"></td>
			                      </tr>
			                      <tr>
			                        <td>&nbsp</td>
			                        <td align="center"><button type="submit" class="btn btn-sm btn-primary">Log In</button></td>
			                      </tr>
			                    </table>
			                   </li>
			                  <li role="separator" class="divider"></li>
			                  <li><a href="#">Daftar Baru</a></li>
                		<?php
                		}
                		else{ ?>

                	<?php } ?>
                </ul>
              </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

      </div>
    </div>