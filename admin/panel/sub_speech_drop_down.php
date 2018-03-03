<?php
include("db_con2.php");
	if(!$db) {	
		echo 'Could not connect to the database.';
	} else {	
		if (isset($_POST['action'])) {				
			$queryString = $db->real_escape_string($_POST['action']);			
				if (strlen($queryString) >0) {				
					$query = $db->query("SELECT id, sub_speech_title FROM sub_speech WHERE main_speech_id = '$queryString'");
						if ($query) {
							?>
								<select name="sub_speech" id="sub_speech" class="selecter" required="required" >
									<option value="" selected="selected">Select One</option>
									<?php
										while ($result = $query->fetch_object()) {														 														    
										    echo "<option value='" . $result->id . "' >" . $result->sub_speech_title . "</option>";
										}
									?>
								</select>
							<?php	
		         		}					
				} else {
					echo 'OOPS we had a problem :(';
				}
			} else {
				// do nothing
			}
			
		} 
?>