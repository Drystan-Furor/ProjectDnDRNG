<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);
?>

<!-- header file -->
<?php 
$title = "Page 2";
require_once('includes/header.php'); ?>

<!-------------------------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php'?>
<!-------------------------------------------navigationn file ------------------------------->

<div>
  <?php
  $total_page_views = total_views($conn, $page_id); // Returns total views of this page
  echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
  ?>
</div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>