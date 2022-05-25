<html>
	<head>
		<title>Data Tables PHP PDO Ajax CRUD usando Bootstrap Modals</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>
	</head>
	<body>
		<div class="container box">
			<h1 align="center">Data Tables con PHP PDO Ajax CRUD con Bootstrap Modals</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Agregar</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Imagen</th>
							<th width="15%">Nombre</th>
							<th width="15%">Apellido</th>
							<th width="20%">Localidad</th>
							<th width="20%">Dirección</td>
							<th width="10%">Editar</th>
							<th width="10%">Borrar</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>


		<script src="index.js"></script>

	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<!--cuando hacemos una request del tipo POST debemos codificar los datos(enctype="multipart/form-data) -->
			<div class="modal-content">
				<!--MODAL, modal header-modal-body y modal-footer  -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Titulo del modal pero no sale ahi</h4>
				</div>
				<div class="modal-body">
					<label>Ingrese su nombre</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<br />
					<label>Ingresa Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<br />
					<label>Ingrese localidad</label>
					<input type="text" name="location" id="location" class="form-control" placeholder="Ingrese su localidad..." />
					<br />
					<label>Ingrese su dirección</label>
					<input type="text" name="adress" id="adress" class="form-control" placeholder="Ingrese su dirección..." />
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
