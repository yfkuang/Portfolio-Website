<?php
//error_reporting(E_ALL);
//Include Language Functions
include 'lang.php';

//Database Functions
function db_connect()
{
	$hostname = "db622256595.db.1and1.com";
	$username = "dbo622256595";
	$password = "PokemonA1996288";
	$database = "db622256595";
	$hostnametest = "localhost";
	$usernametest = "root";
	$passwordtest = "";
	$databasetest = "yfkuang";
	//$result = new mysqli($hostname, $username, $password, $database);
	$result = new mysqli($hostnametest, $usernametest, $passwordtest, $databasetest);
	mysqli_set_charset($result, 'utf8');
	if (!$result)
	{
		return false;
	}
	$result->autocommit(TRUE);
	return $result;
}

function db_result_to_array($result)
{
   	$res_array = array();

   	for ($count=0; $row = $result->fetch_assoc(); $count++)
	{
   		$res_array[$count] = $row;
   	}

   return $res_array;
}

//Query Functions
function get_work()
{
	//Query database for a list of work
	$conn = db_connect();
   	$query = "select * from work";
   	$result = @$conn->query($query);
	mysqli_set_charset($conn, 'utf8');
   	if (!$result)
	{
    	return false;
   	}
   	$num_work = @$result->num_rows;
   	if ($num_work == 0)
	{
    	return false;
   	}
   	$result = db_result_to_array($result);
   	return $result;
}

function get_workid() {
	//Query database for a list of workid
	$conn = db_connect();
   	$query = "select workid from work";
   	$result = @$conn->query($query);
	mysqli_set_charset($conn, 'utf8');
   	if (!$result)
	{
    	return false;
   	}
   	$num_work = @$result->num_rows;
   	if ($num_work == 0)
	{
    	return false;
   	}
   	$result = db_result_to_array($result);
   	return $result;
}

function get_show_work($workid)
{
	//Query database for a list of work columns based on work id
	$conn = db_connect();
   	$query = "select * from work where workid = $workid";
   	$result = @$conn->query($query);
	mysqli_set_charset($conn, 'utf8');
   	if (!$result)
	{
    	return false;
   	}
   	$num_work = @$result->num_rows;
   	if ($num_work == 0)
	{
    	return false;
   	}
   	$result = db_result_to_array($result);
   	return $result;
}

//Output Functions

function show_head($title)
{ //Injects <head>
	echo '
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Ye Fang, Kuang, Graphic, Art, Designer, Developper, Web, Multimedia, Freelance, Photography, Services, Professional, Artist, Digital">
		<meta name="description" content="Ye Fang Kuang | Graphic Arts and Multimedia">
		<meta name="author" content="Ye Fang Kuang">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>'.$title.'</title>
		<!-- Favicon -->
		<link rel="icon" href="img/favicon.gif" type="image/gif">
		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<!-- Assets from Google -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet" type="text/css">
		<link href="css/icon.css" rel="stylesheet">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- jQuery API -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!-- Mosaic Flow Plugin -->
		<script src="js/jquery.mosaicflow.js"></script>
		<script src="js/jquery.mosaicflow.min.js"></script>
		<!-- Main JavaScript functions -->
		<script src="js/functions.js"></script>
		<!-- Script to initialize JavaScript functions on load -->
		<script>
			$(document).ready(function(){
				init();	
			});
		</script>
	</head>
	
	';
}

function show_nav_en($nav_id)
{//Displays nav in english
	if($nav_id == 'index')
	{//Displays nav for index
		echo '
		<nav id="nav-index">
		';
		
		include ('php/nav_en.php');
		
		echo '
		</nav>
		';
	}
	elseif($nav_id == 'regular')
	{//Displays nav for all other pages
		echo '
		<nav class="nav-regular">
		';
		
		include ('php/nav_en.php');
		
		echo '
			<div class="nav-logo">
				<img class="nav-hover" src="img/loader.gif">
				<!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In  -->
				<svg class="nav-logo-inner" version="1.1"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
					 x="0px" y="0px" width="55.6px" height="55.6px" viewBox="0 0 55.6 55.6" enable-background="new 0 0 55.6 55.6"
					 xml:space="preserve">
					<defs>
					</defs>
					<g>
						<g>
							<path d="M27.8,55.1c-15.1,0-27.3-12.3-27.3-27.3S12.8,0.5,27.8,0.5s27.3,12.3,27.3,27.3S42.9,55.1,27.8,55.1z"/>
							<path fill="#FFFFFF" d="M27.8,1c14.8,0,26.8,12,26.8,26.8s-12,26.8-26.8,26.8C13,54.6,1,42.6,1,27.8S13,1,27.8,1 M27.8,0
								C12.5,0,0,12.5,0,27.8s12.5,27.8,27.8,27.8s27.8-12.5,27.8-27.8S43.1,0,27.8,0L27.8,0z"/>
						</g>
						<g>
							<path fill="#FFFFFF" d="M23.3,33.7l4.1-4.4v6.1c0,1.3,0.1,2.2,0.2,2.8c0.1,0.6,0.4,1.1,0.8,1.5c0.3,0.3,0.7,0.6,1.2,0.8
								c0.4,0.2,1,0.3,1.7,0.3v0.4H19.4v-0.4c0.7,0,1.3-0.1,1.7-0.3c0.4-0.2,0.8-0.4,1.2-0.8c0.4-0.4,0.7-0.9,0.8-1.5
								c0.1-0.6,0.2-1.5,0.2-2.8L23.3,33.7z"/>
							<path fill="#FFFFFF" d="M31.5,25.2L40,36.1l1.1,1.4c0.8,1,1.6,1.7,2.4,2.3c0.5,0.3,1,0.6,1.3,0.7c0.4,0.1,0.9,0.3,1.4,0.3v0.4H34
								v-0.4c0.9-0.1,1.6-0.2,2-0.5c0.4-0.2,0.6-0.6,0.6-1c0-0.5-0.3-1.1-0.8-1.9c-0.2-0.4-0.7-1-1.4-1.9c-0.7-0.9-1.3-1.7-1.7-2.2
								l-4.2-5.2L31.5,25.2z"/>
							<g>
								<path fill="#FFFFFF" d="M42.5,14.4v0.4c-0.5,0-1,0.1-1.4,0.3c-0.4,0.1-0.8,0.4-1.2,0.7c-0.5,0.3-1.3,1.1-2.5,2.2L24.1,31.1
									c-2.8,2.9-7.7,7.9-9.4,9.3c-0.9,0.7-1.5,0.7-1.5,0.7H9.8v-0.5c0.9-0.1,1.7-0.3,2.3-0.6c0.6-0.2,1.3-0.7,2.1-1.3
									c1.2-0.9,2.9-2.3,5-4.4l4.1-4V20.2c0-1.3-0.1-2.2-0.2-2.8c-0.1-0.6-0.4-1.1-0.8-1.5c-0.3-0.4-0.7-0.6-1.2-0.8
									c-0.4-0.2-1-0.3-1.7-0.3v-0.4h11.9v0.4c-0.7,0-1.3,0.1-1.7,0.3c-0.4,0.2-0.8,0.4-1.2,0.8c-0.4,0.4-0.6,0.9-0.8,1.5
									c-0.1,0.6-0.2,1.6-0.2,2.8v6.6l8.8-8.8c0.8-0.8,0.3-0.3,0.5-0.6c0.2-0.3,0.3-0.6,0.3-0.9c0-0.6-0.3-1.1-0.9-1.4
									c-0.3-0.1-0.8-0.3-1.6-0.3v-0.4H42.5z"/>
							</g>
						</g>
					</g>
				</svg>
			</div>
		</nav>
		';	
	}
}

function show_nav_fr($nav_id)
{//Displays nav in french
	if($nav_id == 'index')
	{//Displays nav for index
		echo '
		<nav id="nav-index">
		';
		
		include ('php/nav_fr.php');
		
		echo '
		</nav>
		';
	}
	elseif($nav_id == 'regular')
	{//Displays nav for all other pages
		echo '
		<nav class="nav-regular">
		';
		
		include ('php/nav_fr.php');
		
		echo '
			<div class="nav-logo">
				<img class="nav-hover" src="img/loader.gif">
				<!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In  -->
				<svg class="nav-logo-inner" version="1.1"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
					 x="0px" y="0px" width="55.6px" height="55.6px" viewBox="0 0 55.6 55.6" enable-background="new 0 0 55.6 55.6"
					 xml:space="preserve">
					<defs>
					</defs>
					<g>
						<g>
							<path d="M27.8,55.1c-15.1,0-27.3-12.3-27.3-27.3S12.8,0.5,27.8,0.5s27.3,12.3,27.3,27.3S42.9,55.1,27.8,55.1z"/>
							<path fill="#FFFFFF" d="M27.8,1c14.8,0,26.8,12,26.8,26.8s-12,26.8-26.8,26.8C13,54.6,1,42.6,1,27.8S13,1,27.8,1 M27.8,0
								C12.5,0,0,12.5,0,27.8s12.5,27.8,27.8,27.8s27.8-12.5,27.8-27.8S43.1,0,27.8,0L27.8,0z"/>
						</g>
						<g>
							<path fill="#FFFFFF" d="M23.3,33.7l4.1-4.4v6.1c0,1.3,0.1,2.2,0.2,2.8c0.1,0.6,0.4,1.1,0.8,1.5c0.3,0.3,0.7,0.6,1.2,0.8
								c0.4,0.2,1,0.3,1.7,0.3v0.4H19.4v-0.4c0.7,0,1.3-0.1,1.7-0.3c0.4-0.2,0.8-0.4,1.2-0.8c0.4-0.4,0.7-0.9,0.8-1.5
								c0.1-0.6,0.2-1.5,0.2-2.8L23.3,33.7z"/>
							<path fill="#FFFFFF" d="M31.5,25.2L40,36.1l1.1,1.4c0.8,1,1.6,1.7,2.4,2.3c0.5,0.3,1,0.6,1.3,0.7c0.4,0.1,0.9,0.3,1.4,0.3v0.4H34
								v-0.4c0.9-0.1,1.6-0.2,2-0.5c0.4-0.2,0.6-0.6,0.6-1c0-0.5-0.3-1.1-0.8-1.9c-0.2-0.4-0.7-1-1.4-1.9c-0.7-0.9-1.3-1.7-1.7-2.2
								l-4.2-5.2L31.5,25.2z"/>
							<g>
								<path fill="#FFFFFF" d="M42.5,14.4v0.4c-0.5,0-1,0.1-1.4,0.3c-0.4,0.1-0.8,0.4-1.2,0.7c-0.5,0.3-1.3,1.1-2.5,2.2L24.1,31.1
									c-2.8,2.9-7.7,7.9-9.4,9.3c-0.9,0.7-1.5,0.7-1.5,0.7H9.8v-0.5c0.9-0.1,1.7-0.3,2.3-0.6c0.6-0.2,1.3-0.7,2.1-1.3
									c1.2-0.9,2.9-2.3,5-4.4l4.1-4V20.2c0-1.3-0.1-2.2-0.2-2.8c-0.1-0.6-0.4-1.1-0.8-1.5c-0.3-0.4-0.7-0.6-1.2-0.8
									c-0.4-0.2-1-0.3-1.7-0.3v-0.4h11.9v0.4c-0.7,0-1.3,0.1-1.7,0.3c-0.4,0.2-0.8,0.4-1.2,0.8c-0.4,0.4-0.6,0.9-0.8,1.5
									c-0.1,0.6-0.2,1.6-0.2,2.8v6.6l8.8-8.8c0.8-0.8,0.3-0.3,0.5-0.6c0.2-0.3,0.3-0.6,0.3-0.9c0-0.6-0.3-1.1-0.9-1.4
									c-0.3-0.1-0.8-0.3-1.6-0.3v-0.4H42.5z"/>
							</g>
						</g>
					</g>
				</svg>
			</div>
		</nav>
		';	
	}
}

function show_footer($footer_id)
{
	if($footer_id == 'index')
	{
		echo '
		<footer id="footer-index">
			<hr>
			<h5>&copy; 2015 - '.date("Y").' Ye Fang Kuang.</h5>
			<h5><a href="http://be.net/ykuang">Behance</a> | <a href="http://twitter.com/yfkuang">Twitter</a> | <a href="http://ca.linkedin.com/in/yfkuang">LinkedIn</a> | <a href="https://www.flickr.com/photos/yfkuang/">Flickr</a> | <a href="https://github.com/yfkuang">GitHub</a></h5><br>
		</footer>
		';
	}
	elseif($footer_id == 'regular')
	{
		echo '
		<footer>
			<h5>&copy; 2015 - '.date("Y").' Ye Fang Kuang.</h5>
			<h5><a href="http://be.net/ykuang">Behance</a> | <a href="http://twitter.com/yfkuang">Twitter</a> | <a href="http://ca.linkedin.com/in/yfkuang">LinkedIn</a> | <a href="https://www.flickr.com/photos/yfkuang/">Flickr</a> | <a href="https://github.com/yfkuang">GitHub</a></h5>
		</footer>
		';
	}
}

function list_work_en($work_array)
{ //Display and list work
  if (!is_array($work_array))
  {
     echo "<p>No work is available</p>";
     return;
  }
  foreach ($work_array as $row)
  {
    $url = "show_work.php?workid=".$row['workid'];
    $title = $row['workname'];
	$thumb = "img/thumb/".$row['workshort'].".jpg";
	echo '		<figure class="mosaicflow__item">
					<figcaption><a href="'.$url.'">'.$title.'<br><span>- View -</span></a></figcaption>
					<a href="'.$url.'"><img src="'.$thumb.'" alt ="'.$title.'"></a>
				</figure>';
  }
}

function list_work_fr($work_array)
{ //Display and list work
  if (!is_array($work_array))
  {
     echo "<p>No work is available</p>";
     return;
  }
  foreach ($work_array as $row)
  {
    $url = "show_work.php?workid=".$row['workid'];
    $title = $row['workname_fr'];
	$thumb = "img/thumb/".$row['workshort'].".jpg";
	echo '		<figure class="mosaicflow__item">
					<figcaption><a href="'.$url.'">'.$title.'<br><span>- Ouvrir -</span></a></figcaption>
					<a href="'.$url.'"><img src="'.$thumb.'" alt ="'.$title.'"></a>
				</figure>';
  }
}

function show_title_en($work_array)
{ //Add variable <title> to <head> in english
	if (!is_array($work_array))
	{
    	echo "<p>No work is available</p>";
    	return;
	}
  	foreach ($work_array as $row)
  	{
    	$url = "show_work.php?workid=".$row['workid'];
    	$title = $row['workname'];
		$thumb = "img/thumb/".$row['workshort'].".jpg";
		
		show_head($title);
  	}
}

function show_title_fr($work_array)
{ //Add variable <title> to <head> in french
	if (!is_array($work_array))
	{
    	echo "<p>No work is available</p>";
    	return;
	}
  	foreach ($work_array as $row)
  	{
    	$url = "show_work.php?workid=".$row['workid'];
    	$title = "Ye Fang Kuang | ".$row['workname_fr'];
		$thumb = "img/thumb/".$row['workshort'].".jpg";
		
		show_head($title);
  	}
}

function show_work_en($work_array, $maxid)
{ //Displays work and description in english
	if (!is_array($work_array))
	{
    	echo "<p>No work is available</p>";
    	return;
  	}
  	foreach ($work_array as $row)
	{
    	$url = "show_work.php?workid=".$row['workid'];
    	$title = $row['workname'];
		$att = $row['workatt'];
		$desc = $row['workdesc'];
		$year = $row['workyear'];
		$emb = $row['workembed'];
		$thumb = "img/thumb/".$row['workshort'].".jpg";
		$dirname = "img/".$row['workshort'].'/';
		$images = glob($dirname."*.jpg");
		$prev = --$row['workid'];
		$next = ++$row['workid'];
	
		echo '		<div class="wrapper">
				<div class="wrapper-show-work">
				';
		if($row['workid'] > 1)
		{
			echo '	<a href="show_work.php?workid='.$prev.'"><i class="material-icons">chevron_left</i></a>
			';
		}
		if($row['workid'] < $maxid)
		{
			echo '		<a href="show_work.php?workid='.(++$row['workid']).'"><i class="material-icons">chevron_right</i></a>
			';
		}
			
		echo '		<br>
					<h2>'.$title.'</h2>
					<h4>'.$att.' '.$year.'</h4>
					<p>'.$desc.'</p>
					<br>
					<a href="work.php">Back to Gallery</a>
				</div><!-- .wrapper-show-work -->
			</div><!-- .wrapper -->
			<div class="wrapper-show-work-2">';
	
		foreach($images as $img)
		{
			echo '		<img class="show-work-img" src="'.$img.'">
			';
		}
		
		if($emb != NULL)
		{
			echo '	<div class="show-work-embed show-work-embed-16x9">'.
						$emb.'
					</div>';
		}
		
		echo '</div><!-- .wrapper-show-work-2 -->';
  }
}

function show_work_fr($work_array, $maxid)
{ //Displays work and description in french
	if (!is_array($work_array))
	{
    	echo "<p>No work is available</p>";
    	return;
  	}
  	foreach ($work_array as $row)
	{
    	$url = "show_work.php?workid=".$row['workid'];
    	$title = $row['workname_fr'];
		$att = $row['workatt_fr'];
		$desc = $row['workdesc_fr'];
		$year = $row['workyear'];
		$emb = $row['workembed'];
		$thumb = "img/thumb/".$row['workshort'].".jpg";
		$dirname = "img/".$row['workshort'].'/';
		$images = glob($dirname."*.jpg");
		$prev = --$row['workid'];
		$next = ++$row['workid'];
	
		echo '		<div class="wrapper">
				<div class="wrapper-show-work">
				';
		if($row['workid'] > 1)
		{
			echo '	<a href="show_work.php?workid='.$prev.'"><i class="material-icons">chevron_left</i></a>
			';
		}
		if($row['workid'] < $maxid)
		{
			echo '		<a href="show_work.php?workid='.(++$row['workid']).'"><i class="material-icons">chevron_right</i></a>
			';
		}
				
		echo '		<br>
					<h2>'.$title.'</h2>
					<h4>'.$att.' '.$year.'</h4>
					<p>'.$desc.'</p>
					<br>
					<a href="work.php">Retour</a>
				</div><!-- .wrapper-show-work -->
			</div><!-- .wrapper -->
			<div class="wrapper-show-work-2">';
	
		foreach($images as $img)
		{
			echo '		<img class="show-work-img" src="'.$img.'">
			';
		}
		
		if($emb != NULL)
		{
			echo '	<div class="show-work-embed">'.
						$emb.'
					</div>';
		}

		echo '</div><!-- .wrapper-show-work-2 -->';
  }
}
?>