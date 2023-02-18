<form  method="post" enctype="multipart/form-data" id="search-form" >
  <div class="mb-3">
    <input type="text" name="student" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Student name" >
  </div>
  <a href="<?=ASSET ?>single_classe/addStudent/<?=$row1[0]->classe_id?>?active=add_student">
    <button class="btn btn-primary float-end">Search Student</button>
</a>
  <div class="clearfix"></div>
</form> 
<div class="justify-content-center">
<div class=" dis ">
</div>
</div>
<?php

?>

<script>
        $(document).ready(function(){
          $('#search-form').submit(function(evt){
            evt.preventDefault();
            var datapost = $(this).serialize();
            var value = $('#exampleInputEmail1').val();
          
            $.ajax({
              url:"http://localhost/school/public/single_classe/addStudent",
              data:{student: value},
              type:"Post",
              success: function(data){
                if(!data.error){
                $('.dis').html(data);
                }

              }


                
            })
       
      

          })
      
         

          

       
        })
    </script>