<ul>
    <li><a href="work.php">Portfolio</a></li>
    <li><hr></li>
    <li><a href="about.php">About</a></li>
    <li><hr></li>
    <li><a href="contact.php">Contact</a></li>
    <li><hr></li>
    <?php
		$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
		$uri_parts_amp = explode('&', $_SERVER['REQUEST_URI'], 2);
		$page = reset(explode('?', end(explode('/', $_SERVER["REQUEST_URI"])), 2));
		
		if($page == 'show_work.php')
		{
			echo '
			<li><a href="'.'http://'.$_SERVER['HTTP_HOST'].$uri_parts_amp[0].'&lang=fr">Français</a></li>
			';
		}
		else
		{
			echo '
			<li><a href="'.'http://'.$_SERVER['HTTP_HOST'].$uri_parts[0].'?lang=fr">Français</a></li>
			';
		}
	?>
</ul>