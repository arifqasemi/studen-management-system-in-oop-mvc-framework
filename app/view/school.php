<?php  $this->view('includes/header');?>
<?php  $this->view('includes/nav');?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php  $this->view('includes/breadcrumbs',['crumb'=>$crumb]);?>
   
<div class="card-group justify-content-center">
    <table class="table table-striped table-hover">
        <tr><th>Details</th><th>School</th><th>Created by</th><th>Date</th>
        <?php if (Auth::access('admin') && Auth::access('usper admin')):?>
        <th>
            <a href="<?=ASSET?>schools/add">
            <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</button>
            </a>
        </th>
        <?php endif;?>
    </tr>
    <?php if(is_array($row)):?>
        <?php foreach($row as $row):?>

    <tr>
        <td>
        <a href="<?=ASSET ?>schools/details/<?=$row->id ?>"><button class="btn-sm btn btn-primary text-white"><i class="fa fa-chevron-right"></i>Details</button></a>
      </td>
    <td><?=$row->school?></td>
    <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
    <td><?=get_date($row->date)?></td>
    <?php if (Auth::access('lecturer')):?>
<?php if(Auth::access('admin') && Auth::access('super admin')):?>
    <td>
        <a href="<?=ASSET ?>schools/edit/<?=$row->id ?>"><button class="btn-sm btn btn-primary text-white"><i class="fa fa-edit"></i></button></a>
        <a href="<?=ASSET ?>schools/delete/<?=$row->id ?>"><button class="btn-sm btn btn-danger text-white"><i class="fa fa-trash alt"></i></button></a>
        <a href="<?=ASSET ?>switch_school/<?=$row->id ?>"><button class="btn-sm btn btn-success text-white">Switch<i class="fa fa-chivron"></i></button></a>
    </td>
<?php endif;?>
    <?php endif;?>
</tr>
    <?php endforeach;?>
    <?php else:?>
    <h4>No Schools were found</h4>
    <?php endif;?>
    </table>

    </div>  

    </div>
    
<?php  $this->view('includes/footer');?>
