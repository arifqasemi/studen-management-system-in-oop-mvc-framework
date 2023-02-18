<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
<?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
    <h4 class="text-center">Add Classes</h4>
   <div class="card-group justify-content-center">
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
    <input type="text" name="classe" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Classe name" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Add Classes</button>
  <a href="<?=ASSET?>classes" class="btn btn-danger float-end">Cancel</a>
</form> 
    </div>
    </div>
<?php  $this->view('includes/footer');?>
