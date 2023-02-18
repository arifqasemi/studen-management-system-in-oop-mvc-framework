 <style>
    .cap{
        color:limegreen;
    }
    a{
        text-decoration: none;
        color:black;
    }

    .card-header{
        font-weight:bold;
    }
 </style>
 
 
 <?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

    <div class="container-fluid p-4 shadow mx-auto" style="width:1200px;">
        <div class="row justify-content-center">
            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/Schools">  
            <div class="card text-center">
            <div class="card-header"> SCHOOLS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa-solid fa-school"></i></h1></div>
            <div class="card-footer text-muted">View All Schools</div>
            </div>
            </a>  
            </div>

            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/student">
            <div class="card text-center">
            <div class="card-header">STUDENTS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-user-graduate"></i></h1></div>
            <div class="card-footer text-muted">View All Students</div>
            </div>
            </a>  
            </div>

            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/classes">  
            <div class="card text-center">
            <div class="card-header">CLASSES</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-university"></i></h1></div>
            <div class="card-footer text-muted">View All Classes</div>
            </div>
            </a>  
            </div>
           <?php if(Auth::access('admin') && Auth::access('super admin')):?>
            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/users">  
            <div class="card text-center">
            <div class="card-header"> STAFFS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-chalkboard-teacher"></i></h1></div>
            <div class="card-footer text-muted">View All Staffs</div>
            </div>
            </a>  
            </div>
          <?php endif;?>

            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/tests">  
            <div class="card text-center">
            <div class="card-header">TESTS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-file-signature"></i></h1></div>
            <div class="card-footer text-muted">View All Tests</div>
            </div>
            </a>  
            </div>



            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/profile">  
            <div class="card text-center">
            <div class="card-header">PROFILE</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-id-card"></i></h1></div>
            <div class="card-footer text-muted">View Your Profile</div>
            </div>
            </a>  
            </div>
        

            <?php if(Auth::access('admin') && Auth::access('super admin')):?>
            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/statistics">  
            <div class="card text-center">
            <div class="card-header">STATISTICS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-chart-pie"></i></h1></div>
            <div class="card-footer text-muted">View All Staffs</div>
            </div>
            </a>  
            </div>
            <?php endif;?>

            <?php if(Auth::access('admin') && Auth::access('super admin')):?>
            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/settings">  
            <div class="card text-center">
            <div class="card-header">SETTINGS</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-cogs"></i></h1></div>
            <div class="card-footer text-muted">View All Staffs</div>
            </div>
            </a>  
            </div>
            <?php endif;?>


            <div class="col-3 shadow rounded m-4 p-0 border">
            <a href="<?=ASSET?>/logout">  
            <div class="card text-center">
            <div class="card-header">LOGOUT</div>
            <div class="card-body">
            <h1 class="cap">  <i class="fa fa-sign-out-alt"></i></h1></div>
            <div class="card-footer text-muted">Logout From System</div>
            </div>
            </a>  
            </div>

     </div>
    </div>
    
<?php  $this->view('includes/footer');?>

