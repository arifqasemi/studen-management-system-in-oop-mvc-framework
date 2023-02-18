<?php $this->view('includes/header',$data); ?>

<div class="mt-5 container-fluid">
<div class=" shadow rounded" style="margin:auto; max-width:600px; width:100%; padding:20px;">
<h4 class="text-center">My School</h4>

<img src="<?= ROOT?>/logo.png" alt="" class="d-block mx-auto rounded-circle" style="width:70px;">
<h4 class="">Add User</h4>
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



<form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="firstname" value="<?= get_var('firstname')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="firstname">
  </div>
  <div class="mb-3">
    <input type="text" name="lastname" value="<?= get_var('lastname')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lastname">
  </div>
  <div class="mb-3">
    <input type="email" name="email" value="<?= get_var('email')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="mb-3">
    <select name="gender" class="my-2 form-control" id="">
    <option <?= get_select('firstname','')?> value="">--Selet Gender--</option>
      <option <?= get_select('firstname','male')?>value="male">male</option>
      <option <?= get_select('firstname','female')?>value="female">female</option>
    </select>
  </div>
  <div class="mb-3">
  <?php if($mode =='student'):?>
  <input type="hidden" value="student" name="rank">
  <?php else:?>
    <select name="rank" class="my-2 form-control" id="">
    <option <?= get_select('firstname','')?> value="">--Select Rank--</option>
      <option <?= get_select('firstname','student')?> value="student">student</option>
      <option <?= get_select('firstname','lecturer')?> value="lecturer">lecturer</option>
      <option <?= get_select('firstname','Reception')?> value="Reception">Reception</option>
      <option <?= get_select('firstname','Admin')?> value="admin">Admin</option>
      <?php endif;?>

<?php if(Auth::getRank() == 'super admin'):?>
      <option <?= get_select('firstname','super Admin')?> value="super admin">Super Admin</option>

  <?php endif;?>

    </select>
  </div>
  <div class="mb-3">
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" password">
  </div>
  <div class="mb-3">
  <input type="password" name="retypepassword" class="form-control"id="exampleInputPassword1" placeholder=" Retype Password" >
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
  <?php if($mode =='student'):?>
  <a href="<?=ASSET?>student">
  <button type="button"  class="btn btn-danger float-end">Cancel</button>
</a>
<?php else:?>
  <a href="<?=ASSET?>users">
  <button type="button"  class="btn btn-danger float-end">Cancel</button>
</a>
  <?php endif;?>

</form>
</div>
</div>
<?php $this->view('includes/footer');?>