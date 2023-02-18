<div class="justify-content-center">
<?php if($error):?>
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
<?php if(is_array($row)):?>

    <?php foreach($row as $row):?>
    <div class="card m-2 shadow-sm " style="min-width: 14rem;max-width: 14rem;">
    <?php if(in_array($row->gender,['male'])){
 echo "<img src='http://localhost/school/public/assets/user_male.jpg' alt='Card image cap'  class='card-img-top'>";

    }else{
        echo "<img src='http://localhost/school/public/assets/user_female.jpg' alt='Card image cap'  class='card-img-top'>";
    }
    ?>

<form method="post">
  <div class="card-body">
    <h5 class="card-title text-capitalize"><?=$row->firstname?> <?=$row->lastname?></h5>
    <p class="card-text text-capitalize"><?=$row->rank?></p>
    <a href="<?=ASSET?>profile/<?=$row->id?>" class="btn btn-primary">Profile</a>
    <?php if(isset($_GET['selected'])):?>
    <button name="selected" value="<?=$row->userId?>" class="btn btn-danger float-end"  >Selected</button>
    <?php endif;?>
    <?php if($active == 'add_student'):?>
    <button  name="add" value="<?=$row->userId?>" class="btn btn-primary float-end"  >Add</button>
    </a>
    </form>
    <?php endif;?>
  </div>
</div>
<?php endforeach;?>
<?php endif;?>
  <?php if(count($_POST)<0):?>

<h4>No lecturers were found</h4>
<?php endif;?>

</div>  
    </div>




    <script>
        $(document).ready(function(){
          $('#add').click(function(){
            var value = $('#add').attr('value');
            alert(value);
            // $.ajax({
            //   url:"http://localhost/school/public/single_classe/addClasseStudent",
            //   data:{add: value},
            //   type:"Post",
            //   success: function(data){
            //     if(!data.error){
            //     $('.dis').html(data);
            //     }

            //   }


                
            // })
       
      

          })
      
         

          

       
        })
    </script>