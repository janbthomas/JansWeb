<?php
    include 'stdlib.php';

    $site = new csite();

    // this is a function specific to this site!
    initialise_site($site, "header_2nd.php");

    $page = new cwebsitespage("Jans Websites Page");

    $site->setPage($page);

    // $content = "Jans Home Page";
    // $page->setContent($content);
	
	$page->setContentFile("websitesmain.php");

    $site->render();

?>