<!DOCTYPE html>
<?php include('header.php');?>
<body>
	<nav class="navbar navbar-inverse" style="margin-bottom:0px">
	  <div class="container-fluid">
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	      	<li class="">
      		<a href="<?php echo base_url(); ?>index.php/welcome/masuk" data-toggle="tooltip" data-placement="bottom" title="Back to Dashboard">
	      			<span class="glyphicon glyphicon-home"></span> Dashboard</a>
	      	</li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
        	<li>
          		
        	</li>
	       		<li class="dropdown">
	         		 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	          		<span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;</a>
	          		<ul class="dropdown-menu">
	            	<li><a href="<?php echo base_url(); ?>index.php/welcome/logout">Log Out</a></li>
	           		 <li><a href="<?php echo base_url(); ?>index.php/welcome/ubah_password">Change Password</a></li>
	          		</ul>
	      		</li>
        	<ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<?php $this->load->view('/'.$page); ?>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>