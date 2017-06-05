<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

require 'app/header.php';
require 'app/carousel.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="page-header">
        <h1>content</h1>
      </div>
        <?php $posts = get_posts(); ?>
        <?php  foreach ($posts as $post): ?>
      <div class="row">
          <div class=" col-md-3 ">
              <a href="#" class="thumbnail">
                  <img src="<?=$post['image']?>" alt="">
              </a>
          </div>
          <div class=" col-md-9 ">
          <h4><a href="post.php?post_id=<?=$post['id']?>"> <?=$post['title']?></a> </h4>
          <p>
              <?=mb_substr($post['content'], 0, 128, 'UTF-8')?>
          </p>

            <p><a class="btn btn-info btn-sm" href="post.php?post_id=<?=$post['id']?>">Read more</a></p>
            <br/>
          <ul class="list-inline">
            <li><i class="glyphicon glyphicon-list"></i> <a href="#"> Name categories </a>| </li>
            <li><i class="glyphicon glyphicon-calendar"></i> 04.06.2017 | </li>
          </ul>
        </div>
</div>
  <hr/>
<?php endforeach; ?>
    </div>

      <hr/>

    <div class=" col-md-3 >
<?php include_once 'app/sidebar.php' ?>
    </div>
  </div>
</div>
<?php
include_once 'app/footer.php';
