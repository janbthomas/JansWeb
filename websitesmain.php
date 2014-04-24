
<div id="contentarea" class="clearfix">
  <div id="column1" class="clearfix">
    <div class="websiteMenu">
    	<ul>
            <li><a href="websites.php?website=0">CYC</a></li>
            <li><a href="websites.php?website=2">Ashbury Images</a></li>
            <li><a href="websites.php?website=3">Winter Nights</a></li>
            <li><a href="websites.php?website=6">Learningbytes</a></li>
        	<li><a href="websites.php?website=1">Sonrisas Dental</a></li>
            <li><a href="websites.php?website=4">OneAccord</a></li>
            <li><a href="websites.php?website=5">Voice Dynamics</a></li>
       </ul>
    </div>
    <div class="websiteDesc">
    	<h1><?php echo $this->title ?></h1>
        <p><?php echo $this->getDescription(); ?></p>
        <p>&nbsp;</p>
        <h3>Website Features:</h3>
        <ul>
        <?php echo $this->getDescItems(); ?>
        </ul>
    </div>
  </div>
  <!--end column1-->
      <div id="column2">
	  <?php if ($this->getWebsite() != 'N') { ?>
         <div id="websiteImgDiv">
         <a href="<?php echo $this->getWebsite() ?>" target="_blank"><img src="<?php echo $this->getImage() ?>" alt="CYC" name="websiteImg" border="1" id="websiteImg" /></a>
         
         <p><a class="viewWebsite" href="<?php echo $this->getWebsite() ?>" target="_blank">[View the Live Website]</a></p>
         </div>
     <?php } 
	 else { ?>
         <div id="websiteImgDiv">
         <img src="<?php echo $this->getImage() ?>" alt="CYC" name="websiteImg" border="1" id="websiteImg" />
         </div>
     <?php } ?>

      </div>
    <!--end column2-->
  </div><!--end contentarea -->
