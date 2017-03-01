<?php
	session_start();
?>
<!doctype html>
<html>
<?php
	include('php/fns.php');
	
	// get work from database
	$workid = $_GET['workid'];
	$work_array = get_show_work($workid);
	$workid_array = get_workid();
	$maxid = count($workid_array);
	
	//Inject <head>
	switch ($lang)
	{
		case "en":
			show_title_en($work_array);
			break;
		case "fr":
			show_title_fr($work_array);
			break;
		default:
			show_title_en($work_array);
	}
?>
    
<body>
	<div class="content content-regular" id="content-show-work">
		<?php
			switch ($lang)
			{
				case "en":
					show_work_en($work_array, $maxid); // display as links to work pages in english
					break;
				case "fr":
					show_work_fr($work_array, $maxid); // display as links to work pages in french
					break;
				default:
					show_work_en($work_array, $maxid); // Default to English
			}
			
			show_footer('regular');
        ?>                          
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
