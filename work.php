<?php
	session_start();
?>
<!doctype html>
<html>
<?php
	include('php/fns.php');
	
	//Inject <head>
	show_head('Ye Fang Kuang | Portfolio');
	
	//Get work out of database
	$work_array = get_work();
?>

<body>
	<div class="content content-regular" id="content-work">
        <div class="wrapper-work">
            <h1>PORTFOLIO</h1>
            <div class="clearfix mosaicflow" data-min-item-width="400">
				<?php
					switch ($lang)
					{
						case "en":
							list_work_en($work_array); // display as links to work pages in english
							break;
						case "fr":
							list_work_fr($work_array); // display as links to work pages in french	
							break;
						default:
							list_work_en($work_array); //Default to English
					}
                ?>    
            </div><!-- .clearfix .mosaicflow -->
            <?php
				show_footer('regular');
			?>
        </div><!-- .wrapper-work -->
    </div><!-- .content .content-regular #content-work -->
    
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
