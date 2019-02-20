<?php 
	$this->load->view("components/header.php");
?>

	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a href="pelayan/" class="navbar-brand">Restoran Apps | Kasir</a>
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

<?php $this->load->view("components/footer.php"); ?>