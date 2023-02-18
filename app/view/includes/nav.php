<style>
    nav ul li a:hover{
        background:black;
        color:white  !important;

    }
    .drop{
      position:relative;
      right:30px;
    }
</style>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="<?= ROOT?>/logo.png" alt="" class="d-block mx-auto rounded-circle" style="width:70px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">       <?=Auth::getSchool_name();?>
 <span class="sr-only">(current)</span></a>
      </li>
      <?php if (Auth::access('lecturer')):?>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>">Dashboard</a>
      </li>
      <?php endif;?>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>schools">Schools</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>student">Students</a>
      </li>
      <?php if(Auth::access('admin')):?>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>users">Stuffs</a>
      </li>
      <?php endif;?>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>classes">Classes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ASSET?>test">Tests</a>
      </li>
      </ul>
      <ul class="navbar-nav ms-auto mx-5 drop">
      <li class="nav-item dropdown dropend">
        <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?=Auth::getFirstname();?>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=ASSET?>profile">Profile</a>
          <a class="dropdown-item" href="#">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ASSET?>logout">logout</a>
        </div>
      </li>
      
    </ul>
    
  </div>





   

<!-- Default dropstart button -->

</nav>