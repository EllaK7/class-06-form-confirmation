<?php
$page_title = 'Yoko\'s Kitchen';

$nav_home_class = '';
$nav_citations_class = '';
$nav_cooking_class = 'active_page';
$form_class1 = $_POST['japanese-vegetarian'];
$form_class2 = $_POST['sauces-masterclass'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="courses">

    <h2><?php echo $page_title; ?></h2>

    <p>Thank you for your request. We'll get back to you shortly at <?php echo $email; ?>. </p>

    <h3>Cooking Classes Information Request Confirmation</h3>
    <p>You requested information about these courses:</p>

    <ul>
        <li>Japanese Vegetarian: <?php echo $form_class1; ?></li>
        <li>Sauces Masterclass: <?php echo $form_class2; ?></li>
    </ul>

    <cite>&copy; 2011 Yoko's Kitchen (<a href="http://www.htmlandcssbook.com/code-samples/chapter-17/example-with-links.html">Source</a>)</cite>
  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
