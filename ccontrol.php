<?php 
class ccontrol {
	static public function getWebsiteInfo($websiteNum) {
		return cmodel::getWebsiteData($websiteNum);
	}
		static public function getUserInfo($websiteNum) {
		return cmodel::getUserData($websiteNum);
	}

}
?>