<?php include ('/header.php'); ?>
<div >
  <?php if (is_admin()) { ?>
    <form class="" action="../indexAdmin.php" method="post">
      <input  class="admin" type="submit" name="" value="Admin only">
    </form>
    <?php } ?>
  </div>
<?php include ('/footer.php'); ?>
