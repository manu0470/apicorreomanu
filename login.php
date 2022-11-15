<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" href="flatly.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=<?=$apiManu?>" ></script>
	<link rel="icon" style="image/x-icon" href="img/logo.png">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a85adf3762.js" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC_UwaejdWAO71-91WxZN6xkuxWkDo8GyM"></script>
	
</head>
<body>	
<form class="form" action="funcion.php" method="get" style="background:white;">
<div align="center"><img src="img/logo.png" width="50%" height="50%"></div>
<br>
	<h1 align="center">LOGIN</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="correo" name="correo" required aria-describedby="emailHelp" placeholder="ejemplo: usuario@gmail.com">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
  </div>
  <div class="mb-3" align="center">
  	 <button type="submit" class="btn btn-primary" style="background: #04b49a; border-color: #04b49a;">INGRESAR</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
