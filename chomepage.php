<?php
    class chomepage extends cpage {

        public function __construct() {
			 parent::__construct($title);
        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
		 parent::render();	
        }		
				
    }
?>
