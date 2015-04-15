<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!-- Describe your site here -->
        <title></title>
        <meta name="description" content="your description">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    </head>
    <body>
        <!-- Add your site or application content here -->
        <div class="centered">
            <h1><?php bloginfo('name'); ?></h1>
        </div>
        <!-- Loads jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.8.3.min.js"><\/script>')</script>
    </body>
</html>