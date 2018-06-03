<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Form Validation</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<?php 

				echo validation_errors();

				echo form_open('form');
					echo form_label('Nama ', 'nama');
					echo form_input(array(
				        'name'          => 'nama',
				        'id'            => 'nama',
				        'class'			=> 'form-control',
				        'placeholder'	=> 'Bara Ramadhan'
					));
					echo form_label('Email ', 'email');
					echo form_input(array(
				        'name'          => 'email',
				        'id'            => 'email',
				        'class'			=> 'form-control',
				        'placeholder'	=> 'bararamadhan@gmail.com'
					));
					echo form_label('Password ', 'password');
					echo form_password(array(
				        'name'          => 'password',
				        'id'            => 'password',
				        'class'			=> 'form-control',
				        'placeholder'	=> 'Rahasia'
					));
					echo form_label('Password Confirmation ', 'passconf');
					echo form_password(array(
				        'name'          => 'passconf',
				        'id'            => 'passconf',
				        'class'			=> 'form-control',
				        'placeholder'	=> 'Rahasia'
					));
					echo form_label('Nomor Ponsel ', 'phone');
					echo form_input(array(
				        'name'          => 'phone',
				        'id'            => 'phone',
				        'class'			=> 'form-control',
				        'placeholder'	=> '085225415XXX'
					));
					echo form_label('Jenis Kelamin ', 'jeniskelamin')."<br/>";
					echo form_radio('jeniskelamin', 'laki-laki', False, array(
						'class'	=>	'form-check-input',
						'id'	=> 'laki-laki'
					));
					echo form_label('Laki-laki ', 'laki-laki')."<br/>";
					echo form_radio('jeniskelamin', 'perempuan', False, array(
						'class'	=>	'form-check-input',
						'id'	=> 'perempuan'
					));
					echo form_label('Perempuan ', 'perempuan')."<br/>";

					echo form_submit('mysubmit', 'Submit!', array('class'=>'btn btn-primary'));

				echo form_close();

				?>
			</div>
		</div>
	</div>

</body>
</html>

