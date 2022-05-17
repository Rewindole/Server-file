
<!-- This page was created by Dhurv -->

<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='description' Content='SGML and XML Quiz'>
		<meta name='keywords' Content='SGML, XML, Quiz'>
		<meta name='Author' Content='Dhruv Patel, Luag, Aston, Arbar, Farraz'>
		<link rel="stylesheet" href="styles/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
		
		<title>XML and SGML Quiz</title>
		
	</head>
	 
	<body>
		<?php include "menu.inc";?>
		<header>
			<h1>SGML and XML Quiz</h1>
		</header>

		<form id='survey' method='post' action='https://mercury.swin.edu.au/it000000/formtest.php'>
				
		<fieldset>
			<legend>Enter your details</legend>
			<p>
				<label for='fstudentID'>Student ID: </label>
				<input type='text' pattern='\d{7,10}' name='fstudentID' id='fstudentID' maxlength='10' required='required' placeholder='123456789'/>
				<br/>
				<label for='flastname'>First Name: </label>
				<input type='text' name='fname' id='fname' pattern='^[a-zA-Z]+$' maxlength='30' required='required' placeholder='Ben'/>
				<label for='flastname'>Last Name: </label>
				<input type='text' name='flastname' id='flastname' pattern='^[a-zA-Z]+$' maxlength='30' required='required' Placeholder='Coaster' />
			</p>
		</fieldset>

		<fieldset> 
			<legend>Complete the sentence by filling in the missing word</legend>
				<ol>
					<li>SGML was developed by <input id='q1' type='text'/> in the October 1985</li>
					<li>SGML and XML use a similar <input id='q2' type='text'/> to define documents.</li>
					<li>JSON and XML are both <input id='q3' type='text'/> readable</li>
				</ol>
		</fieldset>

		<fieldset>
			<legend>When was the first draft of SGML established?</legend>
			<p>
				<label><input type='radio' name='q4' value='1970' />1970</label>
				<label><input type='radio' name='q4' value='1980' />1980</label>
				<label><input type='radio' name='q4' value='1890' />1890</label>
				<label><input type='radio' name='q4' value='2022' />2022</label>
			</p>
		</fieldset>

		<fieldset>
			<legend> When was SGML & XML first created? </legend>
			<p>
				<label><input type='checkbox' name='q5' value='2008' />2008</label>
				<label><input type='checkbox' name='q5' value='2022' />2022</label>
				<label><input type='checkbox' name='q5' value='1890' />1890</label>
				<label><input type='checkbox' name='q5' value='1200' />1200</label>
				<label><input type='checkbox' name='q5' value='1880' />1880</label>
				<label><input type='checkbox' name='q5' value='1998' />1998</label>
				<label><input type='checkbox' name='q5' value='1780' />1780</label>
			</p>
		</fieldset>
				
		<fieldset>
			<legend>Select the correct statement</legend>
			<label>What is a difference between XML and JSON?</label>
			<select name='multiplechoice' id='multiplechoice'>
				<option value='MC1'>JSON is W3C recommended whilst XML is not</option>
				<option value='MC2' >XML is not limited to the pre-defined tags</option>
				<option value='MC3' >XML doesn't have more verbose and less structured then JSON</option>
				<option value='MC4' >JSON allows for custom tags while XML doesn't</option>
				<option value='MC5' >XML is W3C recommended and so is JSON</option>		
			</select>	
		</fieldset>
			
		<fieldset>
			<legend>Short Answer Question</legend>
			<label>Provide one similarity between SGML and XML?</label>
			<br/>
			<textarea name='q7' rows='8' cols='40' placeholder='Enter your answer in the textbox....'></textarea>
		</fieldset>
		<br/>	
			<input type='Submit' value='Submit'/>
			<input type='Reset' value='Reset'/>
		</form>
		
		<?php include "footer.inc";?>
	</body>
</html>

