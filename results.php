<?php

class EnvatoAPI {
  
  private $token = "JBLHCgUkfnWcDqAyNhSnWVT4zLr7MBGz";
  
  public function getResults($options) {
    
    $url  = "https://api.envato.com/v1/discovery/search/search/item";
    $url .= "?site=codecanyon.net&category=wordpress";
    $url .= "&suggest=true&sort_by=relevance";
    
    // Dynamic Params
    $url .= "&price_max=" . $options['budget'];
    $url .= "&term=" . $options['term'];
    $url .= "&tags=" . urlencode($options['tags']);
    $url .= "&rating_min=" . $options['rating'];
    $url .= "&page_size=" . 5;
    
    // var_dump($url);
    
    $ch = curl_init();
    $timeout = 0; // set to zero for no timeout
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer $this->token",
    ));
    
    $results = curl_exec($ch);
    curl_close($ch);

    // display file
    return json_decode($results);
    
  } // end getResults
  
} // end EnvatoAPI;

$api = new EnvatoAPI();
var_dump($api->getResults($_POST));
?>
<?php
// Get our class file
require "app.php";
$app = new WhatPress;
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <title><?php echo $app->name; ?> - <?php echo $app->desc; ?></title>
    
    <meta name="description" content="<?php echo $app->name; ?> - <?php echo $app->desc; ?>" />
    <meta name="keywords" content="wordpress, themes, plugins, discover, what plugin, what theme, plugin price" />
    
    <meta name="author" content="732" />
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
    <script src="js/modernizr.custom.js"></script>
  </head>
  
  <body>
    <div class="container">

      <div class="fs-form-wrap" id="fs-form-wrap">
        <div class="fs-title">
          <h1><?php echo $app->name; ?> <small><?php echo $app->desc; ?></small></h1>
          
          <div class="codrops-top">
            <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
            <a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
            <a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
          </div>
          
        </div>
        
        <div id="dsds">sasasasa</div>
        
      </div><!-- /fs-form-wrap -->

      <!-- Related demos -->
      <div class="related">
        
        <p>Looking for awesome WordPress Plugins? Check this out:</p>
        
        <?php
        $related = array(
          'material-wp' => array(
            'title' => "Material WP",
            'desc'  => "WordPress admin interface has been the same for ages. It’s time to bring something entirely new to the table: Material WP. Every wonder how a Material Design version of the admin interface would look like? You now can get that look and feel right in your admin panel.",
            'link'  => "http://codecanyon.net/item/material-wp-material-design-dashboard-theme/12981098?ref=732",
            'img'   => "https://image-cc.s3.envato.com/files/160349753/cover.jpg",
          ),
          
          'wpamm' => array(
            'title' => "WP Admin Menu Manager",
            'desc'  => "Manage WordPress admin menu was never so easy! You can hide, rename, reorder and change the icon of every WordPress admin menu item, and submenus too! You can have a clean and mistake-free menu for your clients, to other WordPress users and even entire roles. ",
            'link'  => "http://codecanyon.net/item/wp-admin-menu-manager/9520160?ref=732",
            'img'   => "https://image-cc.s3.envato.com/files/157534947/cover.jpg",
          )
        );
        ?>
        
        <?php foreach($related as $related) : ?>
        <a target="_blank" href="<?php echo $related['link']; ?>">
          <img src="<?php echo $related['img']; ?>" />
          <h3><?php echo $related['title']; ?></h3>
          <p><?php echo $related['desc']; ?></p>
        </a>
        <?php endforeach; ?>
        
      </div>

    </div><!-- /container -->
    
    <script src="js/jquery.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script src="js/fullscreenForm.js"></script>
    <script src="js/run.js">

    </script>
  </body>
</html>