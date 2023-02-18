<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
  <a href="<?=ASSET ?>single_classe/<?=$row1[0]->classe_id?>?active=add_test">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Test</button>
    </a>
</nav>
