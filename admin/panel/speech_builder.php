<?php
include("db_con.php");
$main_speech 	= $_REQUEST['main_speech']; 
$sub_speech 	= $_REQUEST['sub_speech']; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Abdul Basit">
    <title>Speech Generator</title>
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="src/css/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
    <script>
 
    function delete_step(id, row_id) {    	
				
		$.ajax({ url: 'delete_step.php',
         data: {action: id},
         type: 'post',
         success: function(output) {
         			alert("This step has been deleted successfully. You can refresh this page to see latest changes. ");
         			$('#row_'+id).hide(1100);
                  }
		});
							
    }
    
    function edit_step(id) {    	
		var main_speech_id 		= <?php echo $main_speech; ?>;
		var sub_speech_id 		= <?php echo $sub_speech; ?>;    	
    	window.location.href 	= 'speech_builder_edit_step.php?step_id='+id+'&main_speech='+main_speech_id+'&sub_speech='+sub_speech_id;
		
    }
    
    function listen(event, elem, func) {
	  	if (elem.addEventListener) return elem.addEventListener(event, func, false);
	  	else elem.attachEvent('on' + event, func);
	}
   
    function reorder() {
  	 var counter 			= 1;
  	 var reload_counter		= 1;
  	  	
	  	$('#sortable li').each(function() {
		  	if (this.id) {
		    	// this.id = this.id+"something";
		    	this.id = "row_"+counter;
		  	}
			counter++;  
		});
		
	 
		$('#sortable li').each(function() {			
			 
				var current_step_id     = this.id;
				var firstname 			= $(this).find("input[name=firstname]").val();
			 	var main_speech_reorder = $(this).find("input[name=main_speech]").val();
			 	var sub_speech_reorder	= $(this).find("input[name=sub_speech]").val();	
			 	var step_id_reorder		= $(this).find("input[name=step_id]").val();		  
				// alert(current_step_id);
				// alert("firstname: " + firstname);
				// alert(main_speech_reorder);
				// alert(sub_speech_reorder);
				// alert(step_id_reorder);
				
				 
				$.ajax({ url: 'reorder_step.php',
		         data: {new_step_order: current_step_id, tuple_id: step_id_reorder},
		         type: 'post',
		         success: function(output) {
         			// alert("This step has been reorder successfully " + output);
         			reload_counter++;
	         		// alert("reload_counter: " + reload_counter + "counter: " + counter);
	         			if (reload_counter == counter) {
	         				location.reload();
	         			}
                  }
				});			 
			 	
		});	
		 
	 			
  	}
  
    </script>
    <link rel="stylesheet" href="src/css/style.css">
    <style>
	
	#sortable { list-style-type: none; width:60%;  }
	#sortable li { font-size: 15px; border: 1px solid gray;  }
	#sortable li h1 { font-size: 15px; padding-left: 20px;  }
	#sortable li h2 { font-size: 14px; padding-left: 20px; }
	
	#sortable li input[type="text"] {
	    border: 1px solid #dcdcdc;
	    font: 0.813em/1.3 Verdana,Geneva,sans-serif;
	    padding: 10px;
	    transition: box-shadow 0.3s ease 0s, border 0.3s ease 0s;
	    width: 550px;
	}
	/*
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
	#sortable li span { position: absolute; margin-left: -1.3em; }
  	*/
  	
	.guidelines_heading {
		font-family: 'Catamaran', sans-serif;
		padding-left: 6px;
	}
	
	.guidelines {
		font-family: 'PT Serif', serif;
		font-size: 14px;
		padding-left: 6px;
	}
	
	.label4 {
	    color: #4e443c;
	    font-family: Georgia,serif;
	    font-variant: small-caps;
	    font-weight: 200;
	    letter-spacing: 0;
	    margin-bottom: 0;
	    text-transform: none;
	    font-size: 20px;
	}
	
	.delete_button {
		background-color: #A6C634;
	}
	
	.button1 {
		background-color: #A6C634;
		height: 35px;
		width: 150px;
	}
	
	table {
		width: 840px;
		border-collapse: collapse;
		border-spacing: 0;
	}
	
	td, th { border: 1px solid #CCC; }

	.label3 {
		color: brown;
		font-size: 14px;
		font-family: sans-serif;
		font-style: oblique; 	
	}
    
	tr h2 {	 
	    font: 15px/1.3 Verdana,Geneva,sans-serif;
	    padding-bottom: 2px;
	    padding-top: 2px;
	}

    #custom {	
	    -moz-appearance:none;
	    -webkit-appearance:none;			     
	    appearance:none;
	    width:60px;
	    height:60px;
	    border:5px solid #B0362D; 
	    background:white; 
	    border-radius:50%;
	    /* box-shadow:inset 0 0 50px rgba(0,0,0,.2); */ 
	}
	
	#custom:checked {
	    /*background:red;*/ 
	     border: 5px solid #B0362D;
		background-color:#cfdcdd !important;                
	}
    
    tr input[type="text"] {
	    border: 1px solid #dcdcdc;
	    font: 0.813em/1.3 Verdana,Geneva,sans-serif;
	    padding: 10px;
	    transition: box-shadow 0.3s ease 0s, border 0.3s ease 0s;
	    width: 550px;
	}
	
	tr h1 {
	    color: #115458;
	    font: 2em/1.3 "Open Sans",sans-serif;
	}
	
	.step_label {
		color: green; 
		font-family: 'Trocchi', serif; 
		font-size: 17px; 
		font-weight: normal; 
		margin: 0;	
		padding-left: 10px;
		text-decoration: underline;	
	}

    </style>
  </head>

  <body>
  	<?php
	$step_query		= "SELECT * FROM steps WHERE main_speech_id = '".$main_speech."' AND sub_speech_id = '".$sub_speech."' ORDER BY step_order";	
	$result_step	= mysql_query($step_query);
	$num_rows 		= mysql_num_rows($result_step);	
	?>	
	<div align="center">
		<?php
			if ($num_rows != 0) {
		?>		
			<div style="background-color: #54B551">
				<font style="color: white; font-size: 17px; font-family: 'Trocchi', serif; ">Current Steps</font>			
			</div>
		<?php	
			}
		?>			
	<ul id="sortable" >
	
		<?php
		$counter = 1;
		while ($row = mysql_fetch_array($result_step))  {
			$step_id 				= $row["id"];
			$step 					= $row["step"];
			$question				= $row["question"];
			$choice_selection_box	= $row["choice_selection_box"];
			$opening1				= $row["1opening"];
			$opening2				= $row["2opening"];
			$opening3				= $row["3opening"];
			$opening4				= $row["4opening"];
			$opening5				= $row["5opening"];
			$opening6				= $row["6opening"];						
		?>
			
			<li id="row_<?=$counter?>" align="center">
				 
					<div style="float: left;" class="step_label" >
						Step <?=$counter?>
					</div>			
					<br/>			
					<?php					
					if ($choice_selection_box == "no") {
						echo "<h1>".$question."</h1>";
					?>
					<br>
					<?php
						echo $step."<br><br><br>";						
					} else {
						echo "<font class='label3'>This step is placed on Editor</font><br>";
						if ($opening1 != "") {
							echo "<h2>".$opening1."</h2>";	
						}
						if ($opening2 != "") {
							echo "<h2>".$opening2."</h2>";
						}
						if ($opening3 != "") {
							echo "<h2>".$opening3."</h2>";
						}
						if ($opening4 != "") {
							echo "<h2>".$opening4."</h2>";
						}
						if ($opening5 != "") {
							echo "<h2>".$opening5."<h2>";	
						}
						if ($opening6 != "") {
							echo "<h2>".$opening6."<h2>";	
						} 
						echo $step."<br>";
					}			
					?>
				 	<div style="float: right;>				 		 
				 		<input type="hidden" name="firstname" value="ABCD" />
				 		<input type="hidden" name="main_speech" value="<?=$_REQUEST['main_speech']?>" />				 		
				 		<input type="hidden" name="sub_speech" value="<?=$_REQUEST['sub_speech']?>" />					 		
				 		<input type="hidden" name="step_id" value="<?=$step_id?>" />
				 		
				 		<input type="button" value="Delete" name="delete" class="delete_button" id="<?=$step_id?>" onclick="delete_step(this.id, 'row_<?=$counter?>');">
				 	</div>			 			
			 		<br/>
			</li>
		<?php
		$counter++;
		}	
		?>
				
	</ul>
	</div>
	<br>
	<div align="center">
		<input type="button" value="Reorder" onclick="reorder();" class="button1"><br/>		
		<font style="font-size: 12px; color: gray;">Note: After clicking "Reorder" button, please wait for some seconds, so the process completes.</font>
	</div>	 
	<br>	
	<table border="1" align="center" width="80%" cellpadding="10" style="background-color: #F9F9F9;">
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 1</strong></font></td>
			<td> <div class="guidelines">Click on Question/Opening button. Type in <b>"Field Description"</b> your required question or opening statement. Click on <b>"Add Field"</b> button once you are done.</div></td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 2</strong></font></td>
			<td> <div class="guidelines">Click on any 3 buttons (Single Line Text Field, Paragraph Text, Multiple Choice) according to your requirement. For opening statements of editor, use the button <b>Question / Opening</b> instead. You can use the optional <b>"Field Options"</b> to make the field mendatory. Please fill the <b>"Field Label"</b>. It will become special keyword. Click on <b>"Add Field"</b> button once you are done. </div></td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 3</strong></font></td>
			<td> <div class="guidelines">Please Click on <b>"Generate Speech"</b> button, once you are done with all fields.</div></td>
		</tr>
	</table>
	
    <div style="margin-top: 20px">

      <div id="formBuilder"></div>

      <div id="footer">

        <p style="color: Maroon ;">
          "Note: Plesse click only on 'Generate Speech' button when speech step is ready."
        </p>
		<div align="center">
			<a href="dashboard_admin.php"><font class="label4">Dashboard</font></a>
		</div>	
	 	<p style="margin-top: 0">
          <br/><br/>An exclusive program for <a target="_blank" href="http://www.write-out-loud.com">Write-out-loud.com</a><br/><br/>
        </p>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="src/jquery.min.js"></script>
    <script src="src/jquery-ui.min.js"></script>
    <script src="src/libraries/dust-js/dust-core-0.3.0.min.js"></script>
    <script src="src/libraries/dust-js/dust-full-0.3.0.min.js"></script>
    <script src="src/libraries/dust-js/dust-helpers.js"></script>
    <script src="src/libraries/tabs.jquery.js"></script>
    <script src="src/formBuilder.jquery.js"></script>


    <script>    
     
    $(document).ready(function() {    	
    	
     	$( "#sortable" ).sortable();
	    $( "#sortable" ).disableSelection();	
	    
     	$("#previous_steps :input[type='text']").each(function() {
 			var input = $(this); // This is the jquery object of the input, do what you will 			
 			input.val(" ");
		});
				
	});
	
	var main_speech_id 	= <?php echo $main_speech; ?> ;
	var sub_speech_id 	= <?php echo $sub_speech; ?> ;
      
      $('#formBuilder').formBuilder({        
      	
        load_url: 'src/json/example.json',
        save_url: 'demo/save.php',
        
	        onSaveForm: function() {
	          // redirect to demo page
	          window.location.href = 'demo/render.php?main_speech='+main_speech_id+'&sub_speech='+sub_speech_id;
	        }

      });
      
      

    </script>
    
  </body>
</html>
