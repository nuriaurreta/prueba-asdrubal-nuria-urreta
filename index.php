<?php get_header(); ?>

<main>
  <?php include('includes/welcome.php'); ?>
  <?php include('includes/posts.php'); ?>
  <?php 
    $hour = date('G');
    if ($hour >= 6 && $hour <= 18) {
      include('includes/conditional_content.php');
    }
    else {
      echo '<p>This content will not be displayed until 7 p.m.</p>';
    }
  ?>
</main>

<?php get_footer() ?>
