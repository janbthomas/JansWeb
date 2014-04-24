<?php
    class cpage {
        protected $title;
        private $content;
		private $contentfile;
		protected $url;

        public function __construct($title) {
            $this->title = $title;
			$this->setUrl("http://www.janbthomas.com");
        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
            echo "<H1>{$this->title}</H1>";
            echo $this->content;
			include $this->contentfile;
        }
		
		public function setContentFile($filename)
		{
			$this->contentfile = $filename;
		}
		
        public function setContent($content) {
            $this->content = $content;
        }
		
		function setUrl($url)
		{
			$this->url = $url;
		}
		
		function getUrl()
		{	
			return $this->url;
		}
		
    }
?>
