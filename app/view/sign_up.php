<?php $this->view('includes/header',$data); ?>
<div class="" style="margin:auto; max-width:600px; width:100%; padding:20px;">
<form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
  </div>
  <div class="mb-3">
  <input type="password" name="password" class="form-control"id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>

<?php $this->view('includes/footer');?>