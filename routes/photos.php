<!doctype html>
<html lang="ru">
  <head>
  	<title>upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <?php
    include_once("db.php");
    include_once("controllers/getPhotos.php");
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/photos">Photos</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php
    if($num_rows){
      for ($i = 0; $i < $num_rows; $i++) {

    ?>
      <div class="container-fluid text-center">
         <div class="card">
           <div class="card-body">
             <h2 class="card-title"><?php echo $data[$i]['photo']; ?></h2>
             <p class="card-subtitle"><?php echo $data[$i]['comment'] ?></p>
           </div>
           <div class="text-muted">
             Posted on <?php echo $data[$i]['createdAt']; ?> by <?php echo $data[$i]['author']; ?>
           </div>
         </div>
       </div>
       </br>

    <?php
      }
    }

    if ($more_rows > 4){ ?>
            <ul class="pagination justify-content-center">
              <?php if ($page > 1) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo ($page - 1) ?>"> Previous </a></li>
              <?php } ?>
              <li class="page-item active"><a class="page-link" href="#"> <?php echo ($page) ?> </a></li>
               <?php if ($nextpage == true) {?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo ($page + 1) ?>"> Next </a></li>
              <?php } ?>
            </ul>
    <?php } ?>

</body>
</html>
