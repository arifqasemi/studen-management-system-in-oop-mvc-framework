<div class="card-group justify-content-center">
    <table class="table table-striped table-hover">
        <tr><th>Details</th><th>Classe</th><th>Created by</th><th>Date</th>
        <?php if (Auth::access('lecturer')):?>
        <th>
            <a href="<?=ASSET?>classes/add">
            <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</button>
            </a>
        </th>
        <?php endif;?>
    </tr>

    <?php if(isset($classe)){
        $row = $classe;
    }
    ?>
    <?php if(is_array($row)):?>
        <?php foreach($row as $row):?>

    <tr>
        <td>
        <a href="<?=ASSET ?>single_classe/viewlecturer/<?=$row->classe_id?>"><button class="btn-sm btn btn-primary text-white"><i class="fa fa-chevron-right"></i>Details</button></a>
      </td>
    <td><?=$row->classe?></td>
    <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
    <td><?=get_date($row->date)?></td>
    <?php if (Auth::access('lecturer')):?>

    <td>
        <a href="<?=ASSET ?>classes/edit/<?=$row->id ?>"><button class="btn-sm btn btn-primary text-white"><i class="fa fa-edit"></i></button></a>
        <a href="<?=ASSET ?>classes/delete/<?=$row->id ?>"><button class="btn-sm btn btn-danger text-white"><i class="fa fa-trash alt"></i></button></a>
    </td>
    <?php endif;?>
</tr>
    <?php endforeach;?>
    <?php else:?>
    <h4>No Classes were found</h4>
    <?php endif;?>
    </table>

    </div>  