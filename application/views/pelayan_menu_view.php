<?php $this->load->view("components/header.php");?>

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
    	<h2 align="center">Meja <?php foreach ($meja as $nomormeja){}
    		echo $nomormeja; ?></h2>
	    <div class="row">
		    <div class="col-md-6">
		    	<h2 align="center">Daftar Menu</h2>
			    <table id="makanan" class="table table-bordered">
			    	<h4>Makanan</h4>
					<thead>
						<tr>
							<th>No.</th>
							<th>Daftar Makanan</th>
							<th>Harga</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;

						$item = "";
						$length = count($makan);

						foreach ($makan as $item):
							echo "<tr>
									<td>$i</td>
									<td>".$item->nama."</td>
									<td>".$item->harga."</td>
									<td><button class=\"btn btn-success btn-block\" data-id=\"{$item->idmenu}\" id=\"tambah\">Tambah</button></td>
								</tr>";
							$i++;
						endforeach;
					?>
					</tbody>
				</table>
				<br />
				<h4>Minuman</h4>
				<table id="minuman" class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Daftar Minuman</th>
							<th>Harga</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;

						$item = "";
						$length = count($minum);

						foreach ($minum as $item):
							echo "<tr>
									<td>$i</td>
									<td>".$item->nama."</td>
									<td>".$item->harga."</td>
									<td><button class=\"btn btn-success btn-block\" data-id=\"{$item->idmenu}\" id=\"tambah\">Tambah</button></td>
								</tr>";
							$i++;
						endforeach;
					?>
					</tbody>
				</table>
		    </div>

		    <div class="col-md-6">
		    	<h2 align="center">Daftar Pesanan</h2>

		    	<form action="">
		    	<table id="pesanan" class="table">
			    	<thead>
			    		<tr>
			    			<!-- <th>No</th> -->
			    			<th>Menu</th>
			    			<th>Action</th>
			    		</tr>

			    	</thead>

		    		<tbody id="pesan">
		    			
		    		</tbody>
		    	</table>
		    		<input hidden type="text" name="meja" value="<?php echo $nomormeja?>">
		    		<input disabled type="reset" class="btn btn-warning col-md-3" id="clear" value="Hapus Pesanan"></td> 
		    		<input disabled type="submit" class="btn btn-success col-md-8 col-md-offset-1" id="order" value="PESAN!"></td>
		    	</form>
		    </div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/apps/resto.js"></script>
	
<?php $this->load->view("components/footer.php");?>