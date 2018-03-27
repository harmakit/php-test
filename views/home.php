<!doctype html>
<html lang="ru">
  <head>
  	<title>upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/photos">Photos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid text-center">
      <form action="upload" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-control" minlength="3" maxlength="20" name="author" placeholder="Author name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" minlength="3" maxlength="100" name="comment" placeholder="Comment">
        </div>
        <div class="form-group">
          <input type="file" class="form-control" name="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


  </body>
</html>
