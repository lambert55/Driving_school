  <?php
if($_POST["message"]) {
mail("rezaba3@seznam.cz", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>