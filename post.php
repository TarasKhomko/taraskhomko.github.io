<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
$post_id = $_GET['post_id'];
require 'app/header.php';

  $post = get_post_by_id($post_id);

?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="page-header">
        <h1> <?=$post['title']?></h1>
      </div>
            <ul class="list-inline">
              <li><i class="glyphicon glyphicon-list"></i> <a href="#"> Name categories </a>| </li>
              <li><i class="glyphicon glyphicon-calendar"></i> 04.06.2017 | </li>
            </ul>
            <div class="post-content">
              <?=$post['content']?>
            </div>



    </div>
    <div class="col-md-3">
       <img src="http://placehold.it/260x180" alt="">
    </div>
  </div>
</div>
 <?php
 require 'app/footer.php';
