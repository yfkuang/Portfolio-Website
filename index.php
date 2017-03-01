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
			show_head('Ye Fang Kuang | Graphic Arts & Multimedia');
			break;
		case "fr":
			show_head('Ye Fang Kuang | Arts graphiques et multimédia');
			break;
		default:
			show_head('Ye Fang Kuang | Graphic Arts & Multimedia');
	}
?>

<body>
	<div class="content" id="content-index">
    	<div class="cover">
        	<div class="name">
    	    	<h1 class="yefang">YE FANG</h1><br>
	            <h1 class="kuang">KUANG</h1>
            </div><!-- .name -->
        </div><!-- .cover -->
    </div><!-- .content #content-index -->
    
    <?php
		switch ($lang)
		{
			case "en":
				show_nav_en('index');
				break;
			case "fr":
				show_nav_fr('index');
				break;
			default:
				show_nav_en('index');
		}
		show_footer('index');
	?>
</body>
</html>
