<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
<?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
    <h4 class="text-center">School Details</h4>

   <div class="card-group justify-content-center">
 
    <form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="school" class="form-control" value="<?=get_var('school',$row->school)?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="School name" >
  </div>
    <a href="<?=ASSET?>schools" class="btn btn-danger float-end">Cancel</a>
</form> 
    </div>
    </div>
<?php  $this->view('includes/footer');?>
