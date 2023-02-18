<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
  <a href="<?=ASSET ?>single_classe/viewStudent/<?=$row1[0]->classe_id?>?active=add_student">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Student</button>
    </a>
</nav>
<form  method="post" enctype="multipart/form-data" >

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

  <div class="card-body">
    <h5 class="card-title text-capitalize"><?=$row->user->firstname?> <?=$row->user->lastname?></h5>
    <p class="card-text text-capitalize"><?=$row->user->rank?></p>
    <a href="<?=ASSET?>profile/<?=$row->user->id?>" class="btn btn-primary">Profile</a>
    <a href="<?=ASSET?>single_classe/removeStudent/<?=$row->classe_id?>">
    <button id="student" name="<?=$row->classe_id?>"  class="btn  btn-danger float-end check"  value="<?=$row->user->userId?>" > Remove</button>
    </a>
   </div>
</div>
</form>

<?php endforeach;?>
<?php else:?>
<h4>No students were found</h4>
<?php endif;?>
</div>  
    </div>



    <script>
        $(document).ready(function(){
          $('#student').click(function(){
            var user_id = $(this).attr('value');
            var classe_id = $(this).attr('name');

            $.ajax({
              url:"http://localhost/school/public/single_classe/removeStudent",
              data:{user_id: user_id,classe_id:classe_id },
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