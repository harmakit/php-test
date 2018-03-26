<?php
$limit = 5;
$page = (empty($_GET['page']) ? 1 : intval($_GET['page']));
$offset = ($page - 1) * $limit;
$nextpage = false;

if ($result = mysqli_query($mysqli, "SELECT * FROM photos LIMIT $limit OFFSET $offset")) {
  $num_rows = mysqli_num_rows($result);
  $more_rows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM photos"));
  $pages = ceil($more_rows / $limit);
  if ($pages > $page){
    $nextpage = true;
  }
  $data = [[]];
  $i = 0;
  while ($row = $result->fetch_assoc()) {
    $data[$i]['author'] = $row["author"];
    $data[$i]['comment'] = $row["comment"];
    $data[$i]['createdAt'] = $row["createdAt"];
    $data[$i]['photo'] = "<img src=\"images/".$row["photo"].".jpg\" height=\"15%\" width=\"15%\">";
    $i++;
  }
$result->free();
}
else{
  header("Location: /photos");
}
