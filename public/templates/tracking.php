
<?php

$tracking_username = "null";

$tracking_username = $_SESSION["username"];
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163409638-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('set', {'user_id': '<?php $tracking_username ?>'}); // Set the user ID using signed-in user_id.
  gtag('config', 'UA-163409638-1');


</script>



