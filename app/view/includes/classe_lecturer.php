<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
  <div class="">
  <a href="<?=ASSET ?>single_classe/add/<?=$row1[0]->classe_id?>?active=add_lecturer&selected=true">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add lecturer</button>
    </a>
      </div>
</nav>


<div class="card-group justify-content-center">
<?php if(is_array($lecturer)):?>
    <?php foreach($lecturer as $lecturer):?>
    <div class="card m-2 shadow-sm " style="min-width: 14rem;max-width: 14rem;">
    <?php if(in_array($lecturer->user->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap'  class='card-img-top'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  class='card-img-top'>";
    }
    ?>

  <div class="card-body">
    <h5 class="card-title text-capitalize"><?=$lecturer->user->firstname?> <?=$lecturer->user->lastname?></h5>
    <p class="card-text text-capitalize"><?=$lecturer->user->rank?></p>
    <a href="<?=ASSET?>profile/<?=$lecturer->user->id?>" class="btn btn-primary">Profile</a>
    <a href="<?=ASSET ?>single_classe/removelec/<?=$row1[0]->classe_id?>">
    <button id="user"  class="btn  btn-danger float-end check"  value="<?=$lecturer->user_id?>" > Remove</button>
    </a>
   </div>
</div>
<?php endforeach;?>
<?php else:?>
<h4>No lecturers were found</h4>
<?php endif;?>
</div>  
    </div>




<script>
        $(document).ready(function(){
          $('#user').click(function(){
            var user_id = $(this).attr('value');

            $.ajax({
              url:"http://localhost/school/public/single_classe/removelec",
              data:{user_id: user_id},
              type:"Post",
              success: function(data){
                if(!data.error){
                  // alert(data);
                $('.dis').html(data);
                }

              }


                
            })
      

          })
      
         

          

       
        })
    </script>