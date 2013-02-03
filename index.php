
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body>
	<div class="container">

		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="#">Project name</a>
				<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Dropdown <b class="caret"></b>
						</a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!-- /.navbar-inner -->
		</div>
		<!-- /.navbar -->


		<div class="row show-grid">
			<div class="span12 text-success">
				<form class="form-inline pull-right">
					<input type="text" class="input-small" placeholder="Email"> <input
						type="password" class="input-small" placeholder="Password"> <label
						class="checkbox"> <input type="checkbox"> Remember me
					</label>
					<button type="submit" class="btn">Sign in</button>
				</form>


				<div class="row show-grid">
					<div class="span4 text-warning">

						<ul class="nav nav-list">
							<li class="active"><a href="#"><i class="icon-home icon-white"></i>
									Home</a></li>
							<li><a href="#"><i class="icon-book"></i> Library</a></li>
							<li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
							<li><a href="#"><i class="i"></i> Misc</a></li>
						</ul>

						<address>
							<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123)
							456-7890
						</address>

						<address>
							<strong>Full Name</strong><br> <a href="mailto:#">first.last@example.com</a>
						</address>

						<form class="form-search">
							<div class="input-append">

								<input type="text" class="input-medium search-query">
								<button type="submit" class="btn btn-success">
									<i class="icon-search"></i>
								</button>
							</div>

						</form>

						<span class="input-xlarge uneditable-input">Some value here</span>
					</div>
					<div class="span8">
						<blockquote class="pull-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Integer posuere erat a ante.</p>
							<small>Someone famous <cite title="Source Title">Source Title</cite>
							</small>
						</blockquote>



						<form class="form-horizontal pull-right">
							<div class="control-group warning">
								<label class="control-label" for="inputEmail">Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
									<input type="password" id="inputPassword"
										placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Age</label>
								<div class="controls">

									<select multiple="multiple">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<label class="checkbox"> <input type="checkbox"> Remember me
									</label>
									<button type="submit" class="btn">Sign in</button>
								</div>
							</div>
						</form>

						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success">
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr class="error">
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
						<div class="btn-toolbar" style="margin: 0;">
							<div class="btn-group">
								<button class="btn btn-primary">Prev</button>
								
							</div>
							<div class="btn-group">
								<button class="btn btn-info">1</button>
								<button class="btn">2</button>
								<button class="btn">3</button>
							</div>
							<div class="btn-group">
								<button class="btn btn-primary">Next</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid show-grid">
			<div class="span12">

				<div class="input-prepend input-append">
					<span class="add-on">$</span> <input class=""
						id="appendedPrependedInput" type="text"> <span class="add-on">.00</span>
				</div>
				<div class="input-append">
					<input class="" id="appendedInputButtons" type="text">
					<button class="btn" type="button">Search</button>
					<button class="btn" type="button">Options</button>
				</div>

				<div class="input-append">
					<input class="" id="appendedDropdownButton" type="text">
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">
							Action <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<!-- /btn-group -->
				</div>
				<div class="row-fluid show-grid">
					<div class="span6">
						Fluid 6
						<div class="row-fluid">
							<div class="span6">Fluid 6</div>
							<div class="span6">Fluid 6</div>
						</div>
					</div>
					<div class="span6">Fluid 6</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>
