<?php
    function __autoload($class) {
        include "$class.php";
    }

    function initialise_site(csite $site, $headerfile) {
		echo $headerfile;
        $site->addHeader($headerfile);
        $site->addFooter("footer.php");
    }
	
?>