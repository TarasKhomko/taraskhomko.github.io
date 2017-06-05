
<div class="well">
  <div class="form-group">
    <form action="app/include/createtb.php" method="post">
      <h4>Follow news</h4>
      <br>
      <input type="email" name="email" value="" class="form-control" placeholder="Write your email" required  >
      <br>
      <button type="submit" class="btn btn-success">Follow </button>
    </form>
    <div class="row">
        <h4>Dropdowns</h4>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Email
          <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <?php
                $email = get_email();
             ?>
             <?php if  ( count($email)  === 0 ): ?>
                <li>  <a href="#">add Point</a></li>
               <?php else: ?>

            <?php  foreach ($email as $email): ?>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/email.php?id=<?=$email["id"]?>"><?=$email["email"]?></a></li>
            <?php endforeach; ?>

              <?php endif; ?>
          </ul>
        </div>




<table class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>№</th>
      <th>Firstname</th>
      <?php
          $email = get_email();
       ?>
       <?php if  ( count($email)  === 0 ): ?>
          <li>  <a href="#">add Point</a></li>
         <?php else: ?>

      <?php  foreach ($email as $email): ?>
    </tr>
  </thead>
  <tbody>
    <tr class="success">

      <td><?=$email["id"]?></td>
      <td><a role="menuitem" tabindex="-1" href="/email.php?id=<?=$email["id"]?>"><?=$email["email"]?></a</td>
    <?php endforeach; ?>

      <?php endif; ?>
    </tr>
  </tbody>
</table>




  </div>
</div>
