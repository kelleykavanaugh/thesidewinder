<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- font awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- /font awesome -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
<body>
    <div class="container-fluid">
      <div class="blogtitle"><?php bloginfo('name'); ?></div>

<!-- NAVBAR -->
      <div class="navbar">
        <div class="navbar-inner navbar-inverse">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>">home</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.navbar-inner -->
      </div><!--/.navbar" -->
<!-- END NAVBAR -->
