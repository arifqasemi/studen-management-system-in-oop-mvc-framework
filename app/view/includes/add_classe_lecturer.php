<div class="justify-content-center">
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
<form  method="post" enctype="multipart/form-data" style="">
  <div class="mb-3 mt-4 j">
    <input type="text" name="classe" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lecturer name" >
  </div>
  <a href="<?=ASSET ?>single_classe/<?=$row1[0]->classe_id?>?active=add_lecturer">
  <button  name="" value="<?=$row1[0]->classe_id?>" class="btn btn-primary float-end">Search Lecturer</button>
</a>
  <div class="clearfix"></div>
  <?php include(view_path('includes/single_user'));?>

</form> 


<div class="container-fluid">
<div class="card-group justify-content-center">
<form  method="post" >
<div class="card-group justify-content-center">
<?php if(is_array($row)):?>
 
    <?php foreach($row as $row):?>
    <div class="card m-2 shadow-sm " style="min-width: 14rem;max-width: 14rem;">
    <?php if(in_array($row->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap'  class='card-img-top'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  class='card-img-top'>";
    }
    ?>


  <div class="card-body">
    <h5 class="card-title text-capitalize"><?=$row->firstname?> <?=$row->lastname?></h5>
    <p class="card-text text-capitalize"><?=$row->rank?></p>
    <a href="<?=ASSET?>profile/<?=$row->id?>" class="btn btn-primary">Profile</a>
    <?php if(isset($_GET['selected'])):?>
    <button name="selected" value="<?=$row->firstname?>" class="btn btn-danger float-end"  >Selected</button>
    <?php endif;?>
  </div>
</div>
<?php endforeach;?>
<?php else:?>
<!-- <h4>No lecturers were found</h4> -->
<?php endif;?>
</div>  
    </div>
  </form>
</div>  
    </div>

</div>
</div>
