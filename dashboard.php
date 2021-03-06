<!doctype HTML>
<html lang="en">

<head>
	
	<meta charset="UTF-8">
	<title>Privydoc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="assets/image/favicon.ico" sizes="16x16" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="index.html">
				
					<img  width="130" height="33" style="margin-top:-5px;" src="assets/image/logo2.png">
				
			</a>
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a></li>
						<li><a href="contract-templates.php">Contract Templates</a></li>
						<li><a href="manage-contract.php">Manage Contract</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="navbar-brand profil-image">
								<img src="assets/image/ketenagakerjaan.png" class="img-circle">
							</a>
						</li>
						<li>
							<div class="profil-name">
								<p>Bruce Wyne</p>
							</div>
							<div class="profil-id">
								<p>PrivyGate</P>
							</div>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"  id="menu1"role="button"><span class="glyphicon glyphicon-bell" style="margin-top: 5px;"></span><span class="caret" style="margin-top: -10px;"></span></a>
								<ul class="dropdown-menu" aria-labelledby="menu1" role="menu">
									<li class="dropdown-header" style="text-align: center;">Notifications</li>
									<li role="separator" class="divider"></li>
									
									<li></li>
								</ul>
						</li>
						<li>
						</li>
					</ul>
				</div><!-- /.navbar-collapse --------->
		</div> 
	</nav>
	
	<!-- / Container----------------------->
	
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 col-sm-12 col-xs-12 db-head">
				<h3>Dashboard</h3>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 2px solid #cacaca;">
				<h4 style="font-family: 'Roboto', sans-serif;">Create a Contract</h4>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<a class="create-contract" href="#">
					<div class="col-md-4 create-contract-img">
						<img src="assets/image/canvas.png">
					</div>
					<div class="col-md-8">
						<div class="inside-contract">
							<div class="tagline-contract">
								<h3>Canvas</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
									tempor incididunt ut labore et dolore magna aliqua. Ut enim<p>
							</div>
						</div>
					</div>
				</a>
				<a class="create-contract" href="#">
					<div class="col-md-4 create-contract-img">
						<img src="assets/image/contract-templates.png">
					</div>
					<div class="col-md-8">
						<div class="inside-contract">
							<div class="tagline-contract">
								<h3>Contract Templates</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
									tempor incididunt ut labore et dolore magna aliqua. Ut enim<p>
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<div class="col-md-12 recently">
				<h4 style="font-family: 'Roboto', sans-serif; font-weight: 300;">Recently Made Contracts</h4>
			</div>
			
			<div class="col-md-12 recently-box-contracts">
				<div class="col-md-2 recently-contract">
					<img src="assets/image/ketenagakerjaan.png">
				</div>
				<div class="col-md-8 recently-tagline">
					<h5>Perjanjian Karyawan Tetap</h5>
					<p>To Anna Arthdi Putra Soamole<br>
						Jun 12, 2015. 04.50 pm by Muhammad Albert Einstein</p>
					<button type="button" class="btn btn-primary btn-draft">Draft</button>
				</div>
				<div class="col-md-2 edit-contract">
					<button type="button" class="btn btn-default btn-edit">Edit Contract</button>
				</div>
				
				
			</div>
			
			<div class="col-md-12 recently-box-contracts">
				<div class="col-md-2 recently-contract">
					<img src="assets/image/sewa-menyewa.png">
				</div>
				<div class="col-md-8 recently-tagline">
					<h5>Perjanjian Sewa Menyewa</h5>
					<p>To Anna Arthdi Putra Soamole<br>
						Jun 12, 2015. 04.50 pm by Muhammad Albert Einstein</p>
					<button type="button" class="btn btn-success btn-outgoing">Outgoing</button>
				</div>
				<div class="col-md-2 success-sent">
					<p>Sent</p>
					<img src="assets/image/check.png">
					
				</div>
				
				
			</div>
			
			<div class="col-md-12 recently-box-contracts">
				<div class="col-md-2 recently-contract">
					<img src="assets/image/pinjam-meminjam.png">
				</div>
				<div class="col-md-8 recently-tagline">
					<h5>Perjanjian pinjam-meminjam</h5>
					<p>To Anna Arthdi Putra Soamole<br>
						Jun 12, 2015. 04.50 pm by Muhammad Albert Einstein</p>
					<button type="button" class="btn btn-success btn-outgoing">Outgoing</button>
				</div>
				<div class="col-md-2 success-sent">
					<p>Sent</p>
					<img src="assets/image/check.png">
					
				</div>
				
				
			</div>
			
		</div>
	</div>
	
	<div class="row">
	<div id="footer">
				<div class ="container" style="border-bottom: 1px solid #fff">
					<div class="col-md-4 column footer-about">
						<table class="ft-contact-tb">
							<tr class="tr-logo">
								<td >
									<a class="footer-td">
						
										<img src="assets/image/footer-info.png">
							
										About Us
									</a>
								</td>
							</tr>
						<tr>
							<td>
								<img class="img-foot-logo" src="assets/image/logo-3.png" width="250" height="50">
							</td>
						</tr>
						<tr>
							<td>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore maqna aliqua. Ut
									enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea commodo consequat.</p>
							</td>
						</tr>
						</table>
					
					</div>
				
					<div class="col-md-4 column footer-contact">
						<table class="ft-contact-tb">
						<tr>
							<td>
								<a class="footer-td">
									<img  style="float: left;" width="32" height="32" src="assets/image/footer-mail.png">
									Contact
								</a>
							</td>
						</tr>
						<tr>
							<td class="responsive-footer-contact">
							
								<img width="16" height="16" src="assets/image/pin-loc.png">
								<p class="footer-td">
								PT Privi Teknologi Ventura<br>
								Jalan Rejowinangun Perumahan<br>
								Gedong Kuning Asri no.27,<br>
								Kota Gede, Yogyakarta 55171.
								</p>
							</td>
						</tr>
						<tr>
							<td class="responsive-footer-contact">
						
								<img width="16" height="16" src="assets/image/e-mail16.png">
							
								<p class="footer-td">info@privydoc.com</p>
						
							</td>
						</tr>
					
						<tr>
							<td class="responsive-footer-contact">
						
								<img src="assets/image/footer-phone.png">
							
								<p class="footer-td">+62 274 4544668 </p>
						
							</td>
						</tr>
					
						</table>
					</div>
				
					<div class="col-md-4 column footer-link">
						<table class="col-md-12">
							<tr class="tr-logo">
								<td>
									<a class="footer-td">
										<img  style="float: left;" width="32" height="32" src="assets/image/footer-link.png">
										Link
									</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<div class="link-list">
										<img width="10" height="10" src="assets/image/box.png">
										<a>PrivyDoc Blog</a>
									</div>	
									<div class="link-list">
										<img width="10" height="10" src="assets/image/box.png">
										<a>FAQ</a>
									</div>
									<div class="link-list">
										<img width="10" height="10" src="assets/image/box.png">
										<a>Term of Use</a>
									</div>
									<div class="link-list">
										<img width="10" height="10" src="assets/image/box.png">
										<a>PrivyGet</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
				
				</div>
				<div class="ends-footer">
					<div class="right-reserved">
						<h6>Copyright &copy; 2015 PT. Privi Teknologi Ventura (PriviGate). All Rights Reserved</h6>
					</div>
				
					<div class="footer-media">
					
						<div class="img">
							<a target="_blank" href="#"><img src="assets/image/facebook.png" alt="facebook" width="32" height="32"></a>
							<a target="_blank" href="#"><img src="assets/image/twitter.png" alt="twitter" width="32" height="32"></a>
							<a target="_blank" href="#"><img src="assets/image/g+.png" alt="googleplus" width="32" height="32"></a>
							<a target="_blank" href="#"><img src="assets/image/youtube.png" alt="linkedin" width="32" height="32"></a>
						</div>
					
					</div>
				
				</div>
			</div>
	</div>
	
	<script>
		$(document).ready(function(){
		$(".dropdown-toggle").dropdown();
		});
	</script>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

