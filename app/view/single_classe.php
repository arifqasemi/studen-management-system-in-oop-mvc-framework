<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

    <div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php  $this->view('includes/breadcrumbs');?>
    <h5 class="text-center"><?= ucwords($row1[0]->classe)?></h5>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered">
                <tr><th>Created by:</th><td><?= ucwords($row1[0]->user->lastname)?> <?= ucwords($row1[0]->user->firstname)?></td>
                <th>Date Creation:</th><td><?= $row1[0]->user->date?></td></tr> 


            </table>
        </div>
    </div>
    <br/>
<div class="container-fluid">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link <?= $active == 'lecturers'? 'active':''?>" href="<?=ASSET ?>single_classe/viewlecturer/<?=$row1[0]->classe_id?>?active=lecturers">Lecturer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  <?= $active == 'students'? 'active':''?>" href="<?=ASSET ?>single_classe/viewStudent/<?=$row1[0]->classe_id?>?active=students">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $active == 'tests'? 'active':''?>" href="<?=ASSET ?>single_classe/add/<?=$row1[0]->classe_id?>?active=tests" >Tests</a>
  </li>
</ul>
<?php
      switch($active){
        case 'lecturers':
        //  $this->view('includes/classe_lecturer',['row'=>$row]);
         include(view_path('includes/classe_lecturer'));

          break;

        case 'students':
          // $this->view('includes/classe_student',['row'=>$row]);
          include(view_path('includes/classe_student'));

  
            break;

        case 'tests':
        // $this->view('includes/classe_test',['row'=>$row]);
        include(view_path('includes/classe_test'));

        break;
        case 'add_lecturer':
          // $this->view('includes/add_classe_lecturer',['row'=>$row]);

          include(view_path('includes/add_classe_lecturer'));

          break;
        case 'add_student':
          // $this->view('includes/add_classe_student',['row'=>$row]);
          include(view_path('includes/add_classe_student'));

            break;

        case 'add_test':
          include(view_path('includes/add_classe_test'));

          // $this->view('includes/add_classe_test',['row'=>$row]);
  
            break;
        // case 'remove_lecturer':
        //   $this->view('includes/remove_classe_lecturer');
  
        //     break;
        
      }






?>
    </div>
    
<?php  $this->view('includes/footer');?>
