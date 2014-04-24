<?php
    class cwebsitespage extends cpage {

		private $websiteNum;
		private $site_title;
		private $companyType;
		private $link;
		private $website;
		private $description;
		private $descItems;
		private $image;

		public function getDescription() { return $this->description; }
		public function getDescItems() { return $this->descItems; }
		public function getWebsite() { return $this->website; }
		public function getImage() { return $this->image; }
				
        public function __construct() {
			 parent::__construct($title);
			if (isset($_GET['website'])) {
  				$this->websiteNum = $_GET['website'];
		     }
			 
			 $websitedata = ccontrol::getWebsiteInfo($this->websiteNum);
			 $this->site_title = $websitedata->site_title;
			 $this->companyType = $websitedata->companyType;
			 $this->link = $websitedata->link;
			 $this->website = $websitedata->website;
			 $this->description = $websitedata->description;
			 $this->descItems = $websitedata->descItems;
			 $this->image = $websitedata->image;

        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
		   parent::render();	
        }
		public function getWebsites() {

		if (file_exists('features.xml')) 
	  	{
	  	$postNum = 0;
		$xml = simplexml_load_file('features.xml');
			foreach ($xml->item as $item) {
			  if ($postNum++ == $this->websiteNum) {
				$this->title = $item->title; 
				$this->companyType = $item->companyType; 
				$this->link = htmlentities($item->link);
				$this->image = htmlentities($item->image);
				$this->website = htmlentities($item->website);
				foreach ($item->descItem as $descItem) {
					$this->descItems = $this->descItems . '<li>' . $descItem . '</li>';
				}
				$this->description = $item->description;
			  }
			}
	     }
	   
	   }
	}
?>
