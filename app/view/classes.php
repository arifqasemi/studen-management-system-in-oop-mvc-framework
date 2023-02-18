<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
    <h5>Classes</h5>

    <?php  include(view_path('includes/classe_view'));?>


    </div>
    
<?php  $this->view('includes/footer');?>
