
<div id="contentarea" class="clearfix">
        <p><?php echo $this->getUsername(); ?></p>
        <p><?php echo $this->getEmail(); ?></p>
        <p><?php echo $this->getMemtype(); ?></p>
        <?php
		
		class Emp {
			   public $name = "";
			   public $hobbies  = "";
			   public $birthdate = "";
			   public function __toString() {
				   $str = "My name is {$name}";
				   $str .= "My hobbies are {$hobbies}";
				   $str .= "My birthdate is {$birthdate}";
			   }
		   }
		   $e = new Emp();
		   $e->name = "sachin";
		   $e->hobbies  = "sports";
		   $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
		   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
		
		   $json = json_encode($e);	
		   echo "Jason encode" . $json;
		   
		   $out = new Emp();
		   $out = json_decode($json);
		   
		   echo serialize($out);
		
?>
  </div><!--end contentarea -->
