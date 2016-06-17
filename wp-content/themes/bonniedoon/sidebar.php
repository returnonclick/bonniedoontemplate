<?php
if ( is_user_logged_in() ) { ?>

<?php include ('sidebar-mem.php'); ?>

<?php } else { ?>

<?php include ('sidebar-guest.php'); ?>


<?php } ?>
