<?php
    include 'stdlib.php';

    $site = new csite();

    // this is a function specific to this site!
    initialise_site($site, "header.php");
    
    $page = new chomepage("Jans Home Page");

    $site->setPage($page);

    // $content = "Jans Home Page";
    // $page->setContent($content);
	
	$page->setContentFile("homemain.php");

    $site->render();

?>