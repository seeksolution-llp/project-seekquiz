
<style type="text/css">
	.log
	{
		min-height: 500px
	}
	.marg{
		margin-left: 220px;
	}
	 .bg{
    background-image: url("images/forms-background.jpg");
}
</style>
<div class="row log bg">
	<div class="col-sm-1"></div>
	<div class="col-sm-10 ">
		<?php if($this->session->flashdata('status')):?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('status'); ?>
			</div>
		<?php endif;?>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form method="post" action="<?php echo base_url('LogIn/login');?>">
				<h1 class="text-center mt-5 mb-3">Login Here</h1>
		<hr>
		<div>
<!-- <select class="form-select" id="inputGroupSelect01" name="type">
    <option value="" >Choose User Type...</option>
    <option value="teacher">Teacher</option>
    <option value="admin">admin</option>
    <option value="superadmin">superadmin</option>
  </select>
</div>
	php echo form_error('type'); ?-->
			<div class="input-group mt-4 mb-3 px-3 flex-nowrap">
  <span class="input-group-text " id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
  <input type="text" class="form-control" name="email" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<?php echo form_error('email'); ?>
<div class="input-group mb-3 px-3">
  <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
  <input type="password" id="myInput" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping">
  <span class="input-group-text"><i class="fa-solid fa-eye" onclick="myFunction()"></i></span>
</div>
<?php echo form_error('password');?><br/>
<input type="checkbox" class="mt-3 px-3" name=""> Remember me?
<a href="<?php echo base_url('Teacher/ResetPassword');?>" class="marg px-3"> Forget Password ?</a><br>
<input type="submit" value="Login" style="background-color: #0072a9;" class="btn text-light my-3">
		</form>
		<a href="<?php echo base_url('Welcome/signup')?>"> Register</a> if you don't have an account.
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>

<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>