<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

    <div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php  $this->view('includes/breadcrumbs');?>
    <div class="row">
        <div class="col-sm-4 col-md-3">
        <?php if(in_array($profile->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap' style='width:140px;' class='d-block m-auto rounded-circle border-primary'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  style='width:140px;' class='d-block m-auto rounded-circle border-primary'>";
    }
    ?>
      <h3 class="text-center text-capitalize"><?= $profile->firstname?> <?= $profile->lastname?></h3>
        </div>
        <div class="col-sm-8 col-md-9">
            <table class="table table-hover table-striped table-bordered">
                <tr><th>Firstname:</th><td><?= ucwords($profile->firstname)?></td></tr>
                <tr><th>Lastname:</th><td><?= ucwords($profile->lastname)?></td></tr>
                <tr><th>Gender:</th><td><?= ucwords($profile->gender)?></td></tr>
                <tr><th>Rank:</th><td><?= ucwords($profile->rank)?></td></tr>
                <tr><th>Date Creation:</th><td><?= $profile->date?></td></tr>


            </table>
        </div>
    </div>
    <br/>
<div class="container-fluid">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link <?= $active == ''? 'active':''?>" href="<?=ASSET?>profile/<?=$profile->id?>?active=basic info">Basic Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $active == 'classe'? 'active':''?>" href="<?=ASSET?>profile/<?=$profile->id?>?active=classe">Classe</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $active == 'test'? 'active':''?>" href="<?=ASSET?>profile/<?=$profile->id?>?active=test">Test</a>
  </li>
</ul>

</div>
<?php
switch($active){
        case 'basic info':
          //  $this->view('includes/classe_lecturer',['row'=>$row]);
          include(view_path('includes/single_user_info'));

            break;

        case 'classe':
        //  $this->view('includes/classe_lecturer',['row'=>$row]);
         include(view_path('includes/single_user_classe'));

          break;

        case 'test':
          // $this->view('includes/classe_student',['row'=>$row]);
          include(view_path('includes/single_user_test'));

  
            break;
        }

?>

    </div>

    
<?php  $this->view('includes/footer');?>


