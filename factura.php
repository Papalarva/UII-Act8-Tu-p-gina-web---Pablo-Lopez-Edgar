<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Factura</h1>
			</div>
			<div class="articulo formulario_registro">
				<article class="registroUsuario">
					<h3 class="articulo__subtitulo">Ingresa para imprimir tu factura</h3>
					<p>Es necesario contar con tu número de cuenta</p><br>
					<p class="etiqueta">Número de Cuenta</p>
					<input class="cajaFormulario" type="number" placeholder="Ejemplo: 123456789" required="" name="nombre"> 
					<p class="etiqueta">Correo electrónico</p>
					<input class="cajaFormulario" type="email" placeholder="usuario@correo.com" required="" name="correo"> 
					<p class="etiqueta">Ingresa tu contraseña</p>
					<input class="cajaFormulario" type="password" placeholder="***************" required="" name="password"> 
					<input class="subir" type="submit" value="Imprimir Factura" onclick="document.location.reload();">
				</article>
			</div>
		<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>