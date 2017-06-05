<<?php
$link = mysqli_connect('localhost','root','','my_first_blog');

if (mysqli_connect_errno())
{
  echo 'Error connect DB ('.mysqli_connect_errno().'):' .mysqli_connect_error();
exit();
}
