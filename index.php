<!DOCTYPE html>
<html>
<head>
	<title>Twitter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body class="bg-light">
	<!---- Header ---->
	<div class="container-fluid  bg-white header">
		<div class="row headerRow">
			<!---- Ссылки ---->
			<div class="headerCol">
				<img src="images/icons8-home-50.png">
				<a href="http://youtube.com">
					Home
				</a>
			</div>
			<div class="headerCol">
				<img src="images/icons8-notification-50.png">
				<a href="http://youtube.com">
					Home
				</a>
			</div>
			<div class="headerCol">
				<img src="images/icons8-new-post-50.png">
				<a href="http://youtube.com">
					Home
				</a>
			</div>
			<div class="headerCol">
				<img src="images/icons8-twitter-50.png">
				<a href="http://youtube.com">
					Home
				</a>
			</div>
			<!---- Button ---->
			<div class="headerBtn">
				<input type="" name="name">
				<img src="images/avatar.jpg" class="rounded-circle">
				<button class="btn">Post</button>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div class="container">
		<div class="row">



			<!---- Post1 ---->
			<div class="col-3 bg-white">
				<div class="">
					<img src="images/background.jpg">
					<div>
						<img src="">
						<a href=""></a>
						<a href=""></a>
					</div>
				</div>
				<div class="">
					
				</div>
			</div>
			<div class="col-6">
				<div>
					<form method="POST" action="insert.php">
						<input type="" name="post_text">
						<button>asd</button>
					</form>
				</div>
				<!---- Post2 ---->
				 <?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
				 	$query = mysqli_query($connect, 'SELECT * FROM tweet');
				 	
				 	
				 ?>

				 <?php for($i = 0; $i < $query->num_rows; $i++){ ?>
				
				<div class="bg-danger row">
					<div class="col-2 bg-white">
						<a><?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['account_img'] . '">'; ?></a>
					</div>
					<div class="col-10 bg-white">
						<div class="d-flex"> 
							<h5><a href="#" class="text-dark"><?php echo $logo['account_name'];?></a></h5>
						</div>
						<!---- post_text ---->
						<div>
							<p><?php echo $logo['post_text'];?></p>
						</div>
						<!---- post_image ---->
						<div>
							<a href=""><?php echo '<img src="' . $logo['post_image'] . '" class="w-100">';?></a>
						</div>
						<div class="row">
							<div class="col-3">
								<img src="images/comment.png">
							</div>
							<div class="col-3">
								<img src="images/retweet.png">
							</div>
							<div class="col-3">
								<img src="images/like.png">
							</div> 
							<div class="col-3">
								<img src="images/envelope.png">
							</div>
							
							<div>

								<form method="POST" action="delete.php">
									<?php echo '<input type="hidden" name ="id" value="'. $logo['id'] .'">';?>
									<?php echo '<button>Delete</button>';?>
								</form>
					
							</div>
							<div>
								<form method="POST" action="update.php">
										<?php echo '<input type="hidden" name="post_text" value="' . $logo['post_text'] . '">';?>
										<?php echo '<input type="hidden" name ="id" value="'. $logo['id'] .'">';?>
										<?php echo '<button>Update</button>';?>
								</form>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>
			</div>


			<!---- Post3 ---->
			<div class="col-3 bg-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
</body>
</html>