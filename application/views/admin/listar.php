<h1>Mensajes</h1>
<table class="table table-bordered">
<tr>
	<th>id</th>
	<th>Remitente</th>
	<th>Correo</th>
	<th>Ciudad</th>
</tr>
<?php foreach ($mensajes as $mensaje){ ?>
<tr>
	<td><?php echo $mensaje->id;?></td>
	<td><?php echo $mensaje->remitente;?></td>
	<td><?php echo $mensaje->correo;?></td>
	<td><?php echo $mensaje->ciudad;?></td>
	</tr>
<?php }?>
</table>