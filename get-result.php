<?php
$pageTitle = "Get result";
include "view-header.php";
?>
      <h1>Get result</h1>
<?PHP
echo getDisplay();
include "view-footer.php";

function getDisplay(){
      
if (isset($_Get['my-name'])) {
return "<p>The value sent is:</p>". $_GET['my-name'];
}else {
return "<p>Nothing seems to be posted on this page.</p>";
}
      
}
?>
