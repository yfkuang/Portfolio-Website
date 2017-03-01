<?php
	session_start();
?>
<!doctype html>
<html>
<?php
	include 'php/fns.php';
	
	//Inject <head>
	switch ($lang)
	{
		case "en":
			show_head('Ye Fang Kuang | About');
			break;
		case "fr":
			show_head('Ye Fang Kuang | À propos');
			break;
		default:
			show_head('Ye Fang Kuang | About');
	}
?>

<body>
	<div class="content content-regular" id="content-about">
    	<div class="wrapper">
        	<div class="wrapper-about">
            	<?php
					switch ($lang)
					{
						case "en":
							include ('content/about_en.html');
							break;
						case "fr":
							include ('content/about_fr.html');
							break;
						default:
							include ('content/about_en.html');
					}
					show_footer('regular');
				?>
            </div><!-- .wrapper-about -->
        </div><!-- .wrapper -->
    </div><!-- .content .content-regular #content-about -->
    
    <?php
		switch ($lang)
		{
			case "en":
				show_nav_en('regular');
				break;
			case "fr":
				show_nav_fr('regular');	
				break;
			default:
				show_nav_en('regular');
		}
	?>
</body>
</html>
