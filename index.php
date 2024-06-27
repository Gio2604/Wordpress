<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<?php echo get_the_title()?>
<div class="logo-nh">
    <?php wp_nav_menu()?>
<img src="http://localhost/wordpress/wp-content/uploads/2024/06/NH-logo-2-1.png"alt=""></a>
</div>
<body>
<?php echo get_header()?>


<p><?php echo get_the_content() ?></p>



</body>
<?php wp_footer()?>
<?php echo get_footer()?>
</html>


