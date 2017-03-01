<?php
	session_start();
?>
<!doctype html>
<html>
<?php
	include 'php/fns.php';
	
	//Inject <head>
	show_head('Ye Fang Kuang | Contact');
?>

<body>
	<div class="content content-regular" id="content-contact">
    	<div class="wrapper">
        	<div class="wrapper-contact">
				<?php
					switch ($lang)
					{
						case "en":
							include ('content/contact_en.html'); // display as links to work pages in english
							break;
						case "fr":
							include ('content/contact_fr.html');	
							break;
						default:
							include ('content/contact_en.html'); //Default to English
					}
					show_footer('regular');
                ?>
            </div><!-- .wrapper-contact -->
        </div><!-- .wrapper -->
    </div><!-- .content .content-regular #content-contact -->
    
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
