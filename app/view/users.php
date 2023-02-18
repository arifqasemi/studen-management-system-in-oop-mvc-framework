<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php  $this->view('includes/breadcrumbs');?>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
  <a href="<?=ASSET?>sign_up">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</button>
    </a>
</nav>
   
<?php include(view_path('includes/single_user'));?>

    
<?php  $this->view('includes/footer');?>
