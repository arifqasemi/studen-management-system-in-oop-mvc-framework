<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
<?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
    <h4 class="text-center">Are You Sure To Delete This?</h4>
 
   <div class="card-group justify-content-center">
 
    <form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input disabled type="text" name="classe" class="form-control" value="<?=get_var('classe',$row->classe)?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="classe name" >
    <input type="hidden" name="id">
  </div>
  <input type="submit"  class="btn btn-danger" value="Delete"></input>
  <a href="<?=ASSET?>classes" class="btn btn-success float-end">Cancel</a>
</form> 
    </div>
    </div>
<?php  $this->view('includes/footer');?>
