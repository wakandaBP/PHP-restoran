<?php 
	$this->load->view("components/header.php");
?>

	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a href="pelayan/" class="navbar-brand">Restoran Apps | Waitres</a>
        <ul class="nav navbar-nav navbar-right dropdown">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li><a href="profil">Profil</a></li>
                    <li><a href="user/gantipass">Rubah Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
	        </li>
        </ul>
    </nav>

	<div class="container">
		<div class="page-header" style="margin: 30px 0 20px 0;">
    		<h1 align="center">Nomor meja</h1>
    	</div>
		<div>
			<p align="center">
				<div class="row">
				<?php
					for($i=1;$i<16;$i++){
						echo "<div class=\"col-md-2\" style=\"margin:2% 1% 2% 1%;\"><form action=\"pelayan/menu\" method=\"POST\"><input hidden type=\"text\" name=\"meja\" value=\"$i\"><input type=\"submit\" class=\"btn btn-success\" value=\"$i\" style=\"width:100%;height:100;\"></form></div>";
					}
				?>
				</div>
			</p>
		</div>
	</div>

	<!-- <script type="text/javascript" src="assets/js/apps/pelayan.js"></script> -->

<?php $this->load->view("components/footer.php"); ?>