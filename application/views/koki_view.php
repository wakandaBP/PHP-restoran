<?php 
	$this->load->view("components/header.php");
?>

	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a href="pelayan/" class="navbar-brand">Restoran Apps | Koki</a>
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
    		<h1 align="center">Daftar Pesanan</h1>
    	</div>
		
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Pesanan</th>
						<th>Nomor Meja</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				<?php 
					$i = 1;

					// print_r($order);
					foreach ($order as $item):
						echo "<tr>
								<td>$i</td>
								<td>{$item->nama}</td>
								<td>{$item->meja}</td>
								<td><button id=\"stats\" class=\"btn btn-success btn-block\" data-id=\"{$item->idmenu}\">Selesai</button>
							</tr>";

					$i++;
					endforeach;

				?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/apps/koki.js"></script>

<?php $this->load->view("components/footer.php"); ?>