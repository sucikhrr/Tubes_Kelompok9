<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah - CRUD CodeIgniter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Form Ubah</h1>
<hr>
<?php if ($this->session->flashdata('success')) {?>
<?php echo $this->session->flashdata('success'); ?>
<?php  } ?>
<?php echo validation_errors('<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button>');
             ?>  
<div style="color: red;"><?php echo validation_errors(); ?></div>
<?php echo form_open_multipart("Server/ubah/".$title->id); ?>
<table cellpadding="8" class="table table-striped">
	<input type="text" name="id" value="<?php echo $title->id;?>" hidden>
	<tr>
		<td>Title</td>
		<td><input type="text" name="image_name" id="image_name" value="<?php echo set_value('image_name',$title->title); ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="input_harga" value="<?php echo set_value('input_harga',$title->harga); ?>"></td>
	</tr>
	<tr>
		<td>durasi</td>
		<td><input type="text" name="input_durasi" value="<?php echo set_value('input_tanggal',$title->durasi); ?>"></td>
	</tr>
	<tr>
		<td class="column100 column1" data-column="column1">Image</td>
		<td><input type="file" class="form-control" id="userfile" name="userfile"></td>
	</tr>
</table>

<hr>
<input type="submit" name="submit" value="Simpan">
<?php echo form_close(); ?>
<a href="<?php echo base_url(); ?>index.php/Server/admin"><input type="button" value="Batal"></a>
</body>
</html>