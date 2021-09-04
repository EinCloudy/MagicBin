<html>
	<body>
		<link rel="stylesheet" href="style.css"></link>
   		<form action="submitted.php" method="get" id="submitform">
      		<textarea name="text" rows="5" cols="40" id="txt"></textarea>
   		</form>
		<script>
			document.addEventListener("keydown", function(e) {
				if (e.ctrlKey && e.which == 83) {
					e.preventDefault();
					document.getElementById("submitform").submit();
				} else {
					document.getElementById("bottom").innerHTML = `&copy; Magic4D | ${document.getElementById("txt").value.length} B used`;
				}
			}, false);
		</script>
		<div class="bottomrow">
			<font face="Courier New">
				<p id="bottom">&copy; Magic4D | 0 B used</p>
			</font>
		</div>
	</body>
</html>

