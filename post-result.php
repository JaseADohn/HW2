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
return "<p>The value sent consists of:</p>". $_POST['my-name'];
}else {
return "<p>Nothing seems to be posted on this page.</p>";
}
      
}
?>
