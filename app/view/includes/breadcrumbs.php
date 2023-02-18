<nav aria-label="breadcrumb">
  <ol class="breadcrumb justify-content-center">
    <?php if(isset($crumb)):?>
      <?php foreach($crumb as $crumb):?>
    <li class="breadcrumb-item"><a href="<?=$crumb[1]?>"><?=$crumb[0]?></a></li>
    <?php endforeach;?>
    <?php endif;?>

  </ol>
</nav>