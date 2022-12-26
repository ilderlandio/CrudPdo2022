<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title> CRUD - PHP </title>
    <style type="text/css">
        header{
            width: 100%;
            text-align: center;
        }
        .menu{
            display: flex;
            flex-direction:row;
            justify-content:center;
        }
        .menu > p {
            margin: 10px;
        }
    </style>
</head>
<body>
    <header>
    	<h1> Crud - PHP </h1>
    </header>
    <section>
    	<div class="menu">
            <p> <a href="form.php"> <button type="button" class="btn btn-success">Insert/Create</button></a> </p>
    		<p> <a href="select.php"><button type="button" class="btn btn-primary">Select/Read</button>  </a> </p>
    		<p> <a href="update.php"> <button type="button" class="btn btn-warning">Update</button> </a> </p>
    		<p> <a href="delete.php"> <button type="button" class="btn btn-danger">Delete</button> </a> </p>
    	</div>
    </section>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>