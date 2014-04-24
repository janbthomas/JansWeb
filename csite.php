<?php
    class csite {
        private $headers;
        private $footers;
        public $page;

        public function __construct() {
            $this->headers = array();
            $this->footers = array();
        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
            foreach($this->headers as $header) {
				echo "render header";
                include $header;
            }

            $this->page->render();

            foreach($this->footers as $footer) {
                include $footer;
            }
        }

        public function addHeader($file) {
            $this->headers[]= $file;
        }

        public function addFooter($file) {
            $this->footers[] = $file;
        }

        public function setPage(cpage $page) {
            $this->page = $page;
        }
		

    }
?>