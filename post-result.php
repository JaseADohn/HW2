<?php
$pageTitle = "Post result";
include "view-header.php";
?>
      <h1>Post result</h1>
<?PHP
echo getDisplay();
include "view-footer.php";

function getDisplay(){
      
if (isset($_POST['my-name'])) {
return "<p>The value ent is:</p>". $_POST['my-name'];
}else {
return "<p>Nothing posted to the page.</p>";
}
      
}
?>
