<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
<?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
    <h4 class="text-center">Edit School</h4>
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
   <div class="card-group justify-content-center">
 
    <form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="school" class="form-control" value="<?=get_var('school',$row->school)?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School name" >
  </div>
  
  <input type="submit"  class="btn btn-primary"></input>
  <a href="<?=ASSET?>schools" class="btn btn-danger float-end">Cancel</a>
</form> 
    </div>
    </div>
<?php  $this->view('includes/footer');?>
