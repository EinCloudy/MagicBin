<?php
			$n = 10;
			function getRandomString($n) {
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$randomString = '';
			
				for ($i = 0; $i < $n; $i++) {
					$index = rand(0, strlen($characters) - 1);
					$randomString .= $characters[$index];
				}
			
				return $randomString;
			}
			$str = getRandomString($n);
			$len = strlen(utf8_decode($_GET ['text']));
			$txta = '<link rel="stylesheet" href="./styles.css"></link><textarea name="text" rows="5" cols="40" disabled>' . $_GET ['text'] . '</textarea><script>document.addEventListener("keydown", function(e){if (e.ctrlKey && e.which == 83) {e.preventDefault();document.getElementById("submitform").submit();}else{document.getElementById("bottom").innerHTML = \`jBin <a href=\'https://jbin.cloudlesstv.repl.co/LICENSE.txt\'>(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${document.getElementById("txt").value.length} B used\`;}}, false);</script><div class="bottomrow"><font face="Courier New"><p id="bottom">jBin <a href="./LICENSE.txt">(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="bused">0</span> B used | url: https://jbin.cloudlesstv.repl.co/storage/' . $str . ".html" . '</p></font></div><script>window.onload=function(){document.getElementById("bused").innerHTML = document.getElementsByName("text")[0].innerHTML.length;}</script>';
			$txtb = '<link rel="stylesheet" href="../styles.css"></link><textarea name="text" rows="5" cols="40" disabled>' . $_GET ['text'] . '</textarea><script>document.addEventListener("keydown", function(e){if (e.ctrlKey && e.which == 83) {e.preventDefault();document.getElementById("submitform").submit();}else{document.getElementById("bottom").innerHTML = \`jBin  | ${document.getElementById("txt").value.length} B used\`;}}, false);</script><div class="bottomrow"><font face="Courier New"><p id="bottom">&copy; Magic4D | <span id="bused">0</span>B used | url: https://jbin.cloudlesstv.repl.co/storage/' . $str . ".html" . '</p></font></div><script>window.onload=function(){document.getElementById("bused").innerHTML = document.getElementsByName("text")[0].innerHTML.length;}</script>';
			file_put_contents('./storage/' . $str . '.html', $txtb);
			header('Location: https://jbin.cloudlesstv.repl.co/storage/' . $str . '.html')
		?>
