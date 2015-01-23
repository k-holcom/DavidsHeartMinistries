<?php
	//coding for header
	function heading(){
		echo ' 
			<header id="header">
    	<div class="row">
            <div class="col-lg-6"><img src="images/logo.gif" class="img-responsive"/></div>
            <div class="col-lg-6 hidden-sm hidden-xs" id="mainNav"><a href="index.php">HOME</a> <a href="about.php">ABOUT</a> <a href="music.php">MUSIC</a> <a href="calendar.php">CALENDAR</a> <a href="contact.php">CONTACT</a></div>
        </div>
    </header>
		';
	}

	//coding for footer
	function foot(){
		echo "<footer>
    	<div class=\"row visible-xs\">
        	<div class=\"col-xs-12\" style=\"word-spacing:15px; text-align:center;\"><a href=\"index.php\">HOME</a> <a href=\"about.php\">ABOUT</a> <a href=\"music.php\">MUSIC</a> <a href=\"calendar.php\">CALENDAR</a> <a href=\"contact.php\">CONTACT</a></div></div>
        </div> <br />
    	<div class=\"row\">
            <div class=\"col-lg-3 copyright\">
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png\" /></a>
            </div>
        </div>
        <div class=\"row\">
        	<div class=\"col-lg-3 col-md-4 copyright hidden-sm hidden-xs\">
            <span xmlns:dct=\"http://purl.org/dc/terms/\" property=\"dct:title\">David's Heart Ministries</span> by <span xmlns:cc=\"http://creativecommons.org/ns#\" property=\"cc:attributionName\">Kimerlee Holcom</span> is licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.<br />Based on a work at <a xmlns:dct=\"http://purl.org/dc/terms/\" href=\"http://davidsheart.us\" rel=\"dct:source\">http://davidsheart.us</a>.
        </div>
    </footer>";
	}
	?>
