<?php echo validation_errors(); ?>

<?php echo form_open('PaginaController/contacto'); ?>
<?php echo form_label('Remitente', 'remitente'); ?>
<?php echo form_input($remitente); ?>
<?php echo form_label('Correo', 'correo'); ?>
<?php echo form_input($correo); ?>
<?php echo form_label('Seleccione su ciudad', 'ciudades'); ?>
<?php echo form_dropdown('ciudades',$ciudades, array(), 'class="form-control"'); ?>
<?php echo form_label('Ingrese su mensaje', 'smensaje'); ?>
<?php echo form_textarea($mensaje); ?>
<?php echo form_submit('mysubmit', 'Enviar mensaje','class="btn btn-success"'); ?>



<?php echo form_close(); ?>