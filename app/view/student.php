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
  <a href="<?=ASSET?>sign_up?mode=student">
  <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</button>
  </a>
</nav>
  
<div class="card-group justify-content-center">







<?php if(is_array($row)):?>
    <?php foreach($row as $row):?>
    <div class="card m-2 shadow-sm " style="min-width: 14rem;max-width: 14rem;">
    <?php if(in_array($row->user->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap'  class='card-img-top'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  class='card-img-top'>";
    }
    ?>


  <div class="card-body justify-content-center">
    <h5 class="card-title text-capitalize"><?=$row->user->firstname?> <?=$row->user->lastname?></h5>
    <p class="card-text text-capitalize"><?=$row->user->rank?></p>
    <a href="<?=ASSET?>profile/<?=$row->user->id?>" class="btn btn-primary">Profile</a>
  </div>
</div>
<?php endforeach;?>
<?php else:?>
<h4>No Students were found</h4>
<?php endif;?>




</div>  
    </div>

    
<?php  $this->view('includes/footer');?>
