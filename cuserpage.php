<?php
    class cuserpage extends cpage {

		private $username;
		private $email;
		private $memtype;

		public function getUsername() { return $this->username; }
		public function getEmail() { return $this->email; }
		public function getMemtype() { return $this->memtype; }
				
        public function __construct() {
			 parent::__construct($title);
			 
			 $userdata = ccontrol::getUserInfo();
			 $this->username = $userdata->username;
			 $this->email = $userdata->email;
			 $this->memtype = $userdata->memtype;
        }

        public function __destruct() {
            // clean up here
        }

        public function render() {
		   parent::render();	
        }
	}
?>
