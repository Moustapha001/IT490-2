<?php

  require_once ( 'InstagramApi.php' );
  
  // check for code in the URL, if there is none, we leave it empty
  $params = array(
   'get_code' => isset($_GET['code']) ? $_GET ['code'] : '' );

   //instantiat the IG class,
   $ig = new InstagramApi($params);

  ?>
  <h1> Instagram Api  </h1>
  <hr />
  <a href = "<?php echo $ig->authorizationUrl; ?>" >
     Authorize w/Instagram
  </a>
