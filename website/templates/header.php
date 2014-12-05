<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="J. Almeida">
    <meta name="author" content="J. Almeida">
    <link rel="icon" href="../../favicon.ico">

    <title>LTW Project</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">LTW Project</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Polls <span class="caret"></span></a>
                           		<ul class="dropdown-menu" role="menu">
                                <li><a href="create_poll.php">Create a new Poll</a></li>
                                <li><a href="list_polls.php">List of Polls</a></li>
								<li><a href="#">Search(TBI)</a></li>
                                </ul>
                        </li>
						<li>
						<div class="contentArea">
						<input type="text" class="search" id="inputSearch" />Ex: swadesh, ipsita, dharitri<br /> 
						
						</div>
						
						</li>
						<?  if( !(isset($_SESSION['username'])) || !(isset($_SESSION['password'])) ) {?>
							<li> <form class="navbar-form " >
							<a href="register.php" class="btn btn-danger">Register</a>
							</form>
							</li>
							
							<?}?>
						
					</ul>
					
					<?  if( !(isset($_SESSION['username'])) || !(isset($_SESSION['password'])) ) {?>
					<form class="navbar-form navbar-right" action="action_login.php" method="post">
						<div class="form-group">
							<input type="text" name="username" placeholder="username" class="form-control">
							<input type="password" name="password" placeholder="password" class="form-control">
						</div>
							<button type="submit" class="btn btn-success">Sign in</button>
						</form>
						<?}
						else {?>
							<form class="navbar-form navbar-right" action="action_logout.php" method="post">
								<button type="submit" class="btn btn-danger">Logout</button>
							</form>
						<?}?>
					</div>
				</div>
            </div>
        </nav>
    </div>
</div>
