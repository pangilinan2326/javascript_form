<html>
		<head> <title> 
		Javascript form 
		</title>
		</head>
	<body style="background-color: black; color: #fff;">
		<h1>Student Record</h1>
		<table id="student_table" border="1">
		</table>
		
		<script>
			const studentTable = document
				.getElementById("student_table")
			
			const row1 = studentTable.insertRow1();
			
			const row1col1 = row1.insertCell();
			const row1col2 = row1.insertCell();
			
			row1col1.innerHTML = "LASTNAME";
			row1col2.innerHTML = "FIRSTNAME";
			
			const row2 = studentTable.insertRow();
			const row2col1 = row2.insertCell();
			const row2col2 = row2.insertCell();
			
			const inputLastName = document.createElement("input");
			inputLastName.type="type";
			inputLastName.Placeholder="insert"
			inputLastName.name"last_name";
			
			row2col1.append(inputLastName);
			
			const inputFirstName = document.createElement("input");
			inputFirstName.type="text";
			inputFirstName.placeholder="insert First Name";
			
			row2col2.append(inputFirstName;
			
			const row3 = studentTable.insertRow();
			const row3col1 = row3.inserCell();
			row3col1.colSpan="2";
			
			const inputSubmit = document.createElement("input");
			inputSubmit.type="submit";
			inputSubmit.value="create record";
			
			row3col1.append(inputSubmit);
			
			const studentForm = document.createElement("form);
			studentForm.append(studentTable);
			studentForm.action="create.php";
			studentForm.method="POST"
			
			body = document.getElementByTagName("body") [0];
			body.append(studentForm):			
		</script>
	</body>
</html>
