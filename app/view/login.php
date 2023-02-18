<?php $this->view('includes/header',$data); ?>
<div class="mt-5 container-fluid">
<div class=" shadow rounded" style="margin:auto; max-width:600px; width:100%; padding:20px;">
<h4 class="text-center">My School</h4>
<?php if(count($error)> 0):?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Erros:</strong>
<?php foreach($error as $error):?>
 <?php echo $error;?>.
  <?php endforeach;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?>

<img src="<?= ROOT?>/logo.png" alt="" class="d-block mx-auto rounded-circle" style="width:70px;">
<form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" required>
  </div>
  <div class="mb-3">
  <input type="password" name="password" class="form-control"id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
  <a href="sign_up">Register?</a>
</form>
</div>

<?php $this->view('includes/footer');?>