<?php
include_once 'header.php';
?>

<section class = "main-container">
<div class - "main-wrapper">
<h2>Home</h2>
<a href = "admin.php">Admin</a>
<?php
if (isset($_SESSION['loginUsername'])){

}
?>
</div>
</section>

<?php
include_once 'footer.php';
?>
