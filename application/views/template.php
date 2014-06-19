<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<!-- Latest compiled and minified CSS -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet"  href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


</head>
<body>
	<div id="header" class="template">
		<div id="logo-div">
			<a href="#" class=""><img id="logo-main" src="<?php echo base_url();?>assets/img/system/logo.png" alt="Logo-main"></a>
			<?php //if(isset($_SESSION['user'])){?>
			<div id="search-div-main">
				<a href="#" id="activate-search" class="btn" style="color:#000"></a>
				<input type="text" id="search-box" class="search" name="search-box" icon="search-icon">
				<a href="#" id="search" class="btn search" style="color:#000">GO</a>
			</div>
			<?php //;}?>			
		</div>
		<div id="main-nav">
			<a href="<?php echo base_url()?>" class="menu">Home</a>			
			<a href="#" class="menu">About</a>
			<a href="#" class="menu">FAQ</a>
			<a href="#" class="menu">Contact Us</a>
			<a href="#" style="font-size:14px">| 
			<?php echo date("F j, Y, H:i a");?></a>
			<br/>
			<?php 
			if(isset($_SESSION['user'])){
			?>
			<div id="active-user" tabindex="1"><?php echo $_SESSION['user_name'] ?>|<a href="#">Logout</a>
			</div>

			<?php ;}?>
		</div>

	</div>

	<div id="body" class="template">
		<?php $this->load->view($content_view); ?>
	</div>

	<div id="footer" class="template">
		<center>&copy; <?php echo date('Y');?> Fort Files LTD
		</center>
	</div>

</body>
</html>
<!--Styling the Main Page-->
<style type="text/css">
	.template{
		width: 100%;
		height: auto;		
	}	


	#logo-div{
		float: left;
		height: auto;
		color: #000;
		width: 60%;
	}

	#active-user{
		float: right;
		text-align: justify;		
	}

	#activate-search{
		height: 20px;
		font-size: 10px;									
		background: #fff;
		color: #000;
		margin-left: 10px;
		margin-top: 4px;
		text-align: justify;
		background-color: transparent;
		background-image:url('<?php echo base_url()?>assets/img/system/find.png');
		background-repeat: no-repeat;
		background-position: center;
		border-left: 1px solid #fff;
		border-right: 1px solid #fff;
	}
	#search-div-main input{
		width: 160px;						
		height: 21px;
		font-weight: 100;
		border-width: thin;
		padding: 2px;
		margin-left: -4px;
	}
	#search-div-main{
		height: 25px;
		float: left;
		margin-top: 15px;
		width: 250px;			
	}
	#search-div-main a{
		color: #000;
	}

	#search{			
		height: 20px;
		font-size: 10px;									
		background-color:inherit; 
		color: #000;
		margin-left: -10px;
		margin-top: 4px;
		text-align: justify;
	}

	#logo-main{
		float: left;
		margin-top: -10px;
	}

	#search-box{
		font-size: 10px;
		border-radius: 0.5em;	
		width: 100%;
	}

	#main-nav{			
		margin-right: 30px;
		float: right;
	}

	#main-nav a{
		font-size: 15px;
		margin: 5px;
		margin-left: 15px;
		float: left;
		margin-top: -10px;
	}

	#main-nav  .menu:hover{
		border-top: 3px solid #fff;
	}
	#main-nav.current a {
		color: #00A1DB ! important;
	}

	#header,#footer{		
		width: 100%;		
		background-color: #007C21;
		margin-bottom: 1px solid #ccc;
		color: #fff;
		text-decoration: none;
		float: left;
		padding-top: 10px;
	}
	#header{
		height: 60px;

	}
	#header img{
		height: 55px;
	}
	#footer{
		height: 100%;
		margin-top: 0px;
	}
	#body{
		min-height: 574px;
		height: auto;
		float: left;
	}

	#header a{
		color: #fff;
		text-decoration: none;
	}


</style>
<script type="text/javascript">
	$(function(){
		$('.search').toggle();
		$('#activate-search').click(function(){
			$('.search').toggle("slow",function(){

			});
			$('#search-box').focusin();
		});
	});
</script>
<script type="text/javascript">

	function DropDown(el) {
		this.dd = el;
		this.initEvents();
	}
	DropDown.prototype = {
		initEvents : function() {
			var obj = this;

			obj.dd.on('click', function(event){
				$(this).toggleClass('active');
				event.stopPropagation();
			});	
		}
	}

	$(function() {

		var dd = new DropDown( $('#active-user') );

		$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

	});

</script>
<style type="text/css">
	.wrapper-dropdown-5 {
		/* Size & position */
		position: relative;
		width: 200px;
		margin: 0 auto;
		padding: 12px 15px;

		/* Styles */
		background: transparent;
		border-radius: 5px;
		box-shadow: 0 1px 0 rgba(0,0,0,0.2);
		cursor: pointer;
		outline: none;
		transition: all 0.3s ease-out;
	}

	.wrapper-dropdown-5:after { /* Little arrow */
		content: "";
		width: 0;
		height: 0;
		position: absolute;
		top: 50%;
		right: 15px;
		margin-top: -3px;
		border-width: 6px 6px 0 6px;
		border-style: solid;
		border-color: #4cbeff transparent;
	}
	.wrapper-dropdown-5 .dropdown {
		/* Size & position */
		position: absolute;
		top: 100%;
		left: 0;
		right: 0;

		/* Styles */
		background: #fff;
		color: #000;
		border-radius: 0 0 5px 5px;
		border: 1px solid rgba(0,0,0,0.2);
		border-top: none;
		border-bottom: none;
		list-style: none;
		transition: all 0.3s ease-out;

		/* Hiding */
		max-height: 0;
		overflow: hidden;
	}
	.wrapper-dropdown-5 .dropdown li {
		padding: 0 10px ;
	}

	.wrapper-dropdown-5 .dropdown li a {
		display: block;
		text-decoration: none;
		color: #000;
		padding: 10px 0;
		transition: all 0.3s ease-out;
		border-bottom: 1px solid #e6e8ea;
	}

	.wrapper-dropdown-5 .dropdown li:last-of-type a {
		border: none;
	}

	.wrapper-dropdown-5 .dropdown li i {
		margin-right: 5px;
		color: inherit;
		vertical-align: middle;
	}

	/* Hover state */

	.wrapper-dropdown-5 .dropdown li:hover a {
		color: #57a9d9;
	}
	/* Active state */

	.wrapper-dropdown-5.active {
		border-radius: 5px 5px 0 0;
		background: #4cbeff;
		box-shadow: none;
		border-bottom: none;
		color: white;
	}

	.wrapper-dropdown-5.active:after {
		border-color: #82d1ff transparent;
	}

	.wrapper-dropdown-5.active .dropdown {
		border-bottom: 1px solid rgba(0,0,0,0.2);
		max-height: 400px;
	}




</style>
