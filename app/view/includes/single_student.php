

<?php if(is_array($student)):?>
    <?php foreach($student as $student):?>
    <div class="card m-2 shadow-sm " style="min-width: 14rem;max-width: 14rem;">
    <?php if(in_array($student->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap'  class='card-img-top'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  class='card-img-top'>";
    }
    ?>


  <div class="card-body justify-content-center">
    <h5 class="card-title text-capitalize"><?=$student->firstname?> <?=$student->lastname?></h5>
    <p class="card-text text-capitalize"><?=$student->rank?></p>
    <a href="<?=ASSET?>profile/<?=$student->id?>" class="btn btn-primary">Profile</a>
  </div>
</div>
<?php endforeach;?>
<?php else:?>
<h4>No Students were found</h4>
<?php endif;?>
