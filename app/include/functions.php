<<?php

function get_categories(){
  global $link;
  $sql  = "SELECT * FROM categories";

  $result = mysqli_query($link, $sql);

$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $categories;
}

function get_posts(){
  global $link;
  $sql  = "SELECT * FROM posts";

  $result = mysqli_query($link, $sql);

$posts= mysqli_fetch_all($result, MYSQLI_ASSOC);

return $posts;
}

function get_post_by_id($post_id){
  global $link;
  $sql = "SELECT * FROM posts WHERE id = ".$post_id;
  $result = mysqli_query($link, $sql);
  $post = mysqli_fetch_assoc($result);
  return $post;
}

function get_email(){
  global $link;
  $sql = "SELECT * FROM email_tb" ;
  $result = mysqli_query($link, $sql);
$email = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $email;
}

function setHeight() {
    echo "The height is : $minheight <br>";
}
