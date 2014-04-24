    <div id = "menu">
<div id="contactbtn"><a href="#" onclick="window.open('http://www.janbthomas.com/jansblog/contact/', 'askconsultant','toolbar=yes,location=yes,directories=no,status=no,menubar=yes,scrollbars=no,resizable=no,width=525,height=500,top=100,left=250');">
    <img src="../images/contactbtn.jpg" alt="Contact Jan Thomas Consulting" width="98" height="29" border="0"/></a></div>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="websites.php">WEBSITES</a></li>
        <li><a href="about.php">ABOUT JAN</a></li>
        <li><a href="jansblog">BLOG</a></li>
      </ul>
    </div>
<div id="banner" class="clearfix">
	<div id="logo"><img src="../images/logo.gif" alt="janbthomas.com web development" width="343" height="172" /></div>
    <div id="bannerphoto"><?php $this->rotateImages("../images/banner");?> </div>
</div>
<div id="contentarea" class="clearfix">
  <div id="column1" class="clearfix">
    <div class="boxheader">
      <h2>Featured Website</h2>
      <p>&nbsp;</p>
    </div>
    <div class="boxcontent">
      <?php $this->readWebsites(); ?>
    </div>
    <div class="boxfooter">
      <p>&nbsp;</p>
    </div>
  </div>
  <!--end column1-->
<div id="column2">
      <div class="boxheader"> 
      	<h2>What's New</h2>
      	<p>&nbsp;</p>
      </div>
      <div class="boxcontent">
    <div id="blog">
		<ul>
            <li class="blogpost"><a href="http://www.janbthomas.com/jansblog/picasaslideshowinwebsit/">Embed a Picasa Slideshow into Your Website</a><br />Picasa comes with a slideshow utility that can be embedded into any webpage.  Setup is easy and the photo album maintainance is handled by Picasa.<a href="http://www.janbthomas.com/jansblog/picasaslideshowinwebsit/">(more...)</a></li>
        	<li class="blogpost"><a href="http://www.janbthomas.com/jansblog/photo-gallery-from-picasa-album/">Create a Photo Gallery From Your Picasa Album</a>
            <br />Picasa provides an option to export your photo album as an HTML webpage.  For a more polished look, use one of the free Picasa templates available on the internet. Learn how to use Picasa to generate a photo gallery on your website. <a href="http://www.janbthomas.com/jansblog/photo-gallery-from-picasa-album/">(more...)</a>
			</li>
    		<li class="blogpost"><a href="http://www.janbthomas.com/jansblog/jalbum-photo-gallery/">Using JAlbum to Create a Photo Gallery</a><br />JAlbum  transfers photos from your computer hard drive onto your website. <a href="http://www.janbthomas.com/jansblog/jalbum-photo-gallery/">(more...)</a></li>
			</ul>
    </div>
    <!--end blog-->
      </div>
      <div class="boxfooter">
      	<p>&nbsp;</p>
      </div>
    </div><!--end column2-->
  </div><!--end contentarea --> 
