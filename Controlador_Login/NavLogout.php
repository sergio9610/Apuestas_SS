<?php 

if(isset($_SESSION['usuario'])){
	$name = $_SESSION['usuario'];
}



 ?>
<li class="nav-item dropdown active">
	<a href="../Juego/index.php" class="juega nav-link btn">Juega</a> 
</li>

<li class="nav-item dropdown active">
    <a href="../php/usuario.php" class="nombre_usuario nav-link btn"> <?php  echo $name;?></a>
</li>

<li>
	<img class="foto_usuario" src="../img/user.png" alt="">
</li>

<!-- <span class="user">$_POST['user']</span>
<img class="photouser" src="../../img/user.png" alt="">
 -->
<li class="nav-item dropdown active">
    <a href="../Controlador_Login/logout.php" class="cerrar nav-link btn">cerrar sesión</a>
</li>