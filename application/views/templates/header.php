<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Posts App</title>
	<link rel="stylesheet" href=" <?=base_url(); ?>css/bootstrap.min.css">
</head>
<body>

 <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="<?=base_url()?>">Blog Post</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add">Add New Post</a>
        </li>




        <?php if ($this->session->logged_in) {?>

          <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>logout" tabindex="-1" aria-disabled="true">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><?=$this->session->fullname;?></a>
        </li>
       
      <?php  } else{?>   

           <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>login" tabindex="-1" aria-disabled="true">Login</a>
        </li>


        <?php } ?>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0" method="post" action="<?= base_url();?>search ">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<div class="container mt-2">











	