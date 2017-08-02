<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/my.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="scripts/my.js"></script>
	</head>
	<body>

		<div class="container">
		<a href="#" data-toggle="modal" data-target="#myModal">Login</a>
			<div class="modal fade" role="dialog" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
							<h3><span class="glyphicon glyphicon-lock"></span>&nbsp;Մուտք</h3>
						</div>
						<div class="modal-body">
							<div id="info">
								<a href="#" class="close">&times;</a>
								<p ></p>
							</div>
							<form id="myForm">
								<div class="form-group">
									<label for="login"><span class="glyphicon glyphicon-user" ></span>&nbsp;Ծածկանուն</label>
									<input type="text" class="form-control" id="login" name="login">
								</div>
								<div class="form-group">
									<label for="password"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;Գաղտնաբառ</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-block">
										<span class="glyphicon glyphicon-ok"></span>
										մուտք
									</button>
								</div>	
							</form>
						</div>
						<div class="modal-footer">
							<button class="btn btn-danger pull-left" data-dismiss="modal">
								<span class="glyphicon glyphicon-remove"></span>
							փակել
							</button>
							<p>Գրանցված չեք <span class="glyphicon glyphicon-hand-right"></span><a href="#">&nbsp;Գրացնվեք այստեղ</a></p>
							<p>Մոռացել եք <span class="glyphicon glyphicon-qrcode"></span><a href="#">&nbsp;Գաղտնաբառը</a></p>
						</div>
					</div>
				</div>
			</div>
		
			
			
		</div>

	</body>
</html>