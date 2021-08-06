<?php
  session_start();
  session_destroy();
  unset($_SESSION['email']);
  echo'<script type="text/javascript">alert ("Invalid username and Password");</script>';
  header("location:index.php");
?>
