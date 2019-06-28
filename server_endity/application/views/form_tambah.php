<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Form Tambah Data Kamar</h1>
<hr>
<?php if ($this->session->flashdata('success')) {?>
<?php echo $this->session->flashdata('success'); ?>
<?php  } ?>
<?php echo validation_errors('<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button>');
             ?>   
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open_multipart("Server/tambah"); ?>
<table cellpadding="8" class="table table-striped">
	<tr>
		<td class="column100 column2" data-column="column2">Title</td>
		<td><input type="text" id="image_name" name="image_name" value="<?php echo set_value('input_name'); ?>"></td>
	</tr>
	<tr>
		<td class="column100 column5" data-column="column5">Harga</td>
		<td><input type="text" name="input_harga" value="<?php echo set_value('input_harga'); ?>"></td>
	</tr>
	<tr>
		<td class="column100 column1" data-column="column1">Durasi</td>
		<td><input type="text" name="input_durasi" value="<?php echo set_value('input_durasi'); ?>"></td>
	</tr>
	<tr>
		<td class="column100 column1" data-column="column1">Image</td>
		<td><input type="file" class="form-control" id="userfile" name="userfile"></td>
	</tr>
</table>
<hr>
<input type="submit" name="submit" value="Simpan">
<?php form_close() ?> 
<a href="<?php echo base_url(); ?>index.php/Server"><input type="button" value="Batal"></a>
</body>
</html>