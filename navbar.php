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
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li role="separator" class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
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