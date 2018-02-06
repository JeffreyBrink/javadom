<!DOCTYPE html>
<html>
	<head>
		<script>
			function myFunction() {
				var str = document.getElementById("js").innerHTML;
				var res = str.replace(/Captain/g, "admiral");
				document.getElementById("js").innerHTML = res;
			}
		</script>
	</head>
	<body>

		<h2>Click the button to replace "captain" with "admiral" in the paragraph below:</h2>

		<p id="js">The Operative: [Speaking on the bridge of his blue ship] You should have let me see her, Captain. We should have done this as men, Captain - not with fire.[Mal suspects Inara is being forced to lure them into a trap]  Kaylee Frye: But how can you be sure Inara don't just want to see you, Captain? Sometimes people have blue feelings, Captain. I'm referring here to people.  Captain Malcolm Reynolds: Y'all were watching I take it?</p>

		<button onclick="myFunction()">Shiney</button>

		<script>
			function myFunction() {
				var str = document.getElementById("js").innerHTML;
				var res = str.replace(/Captain/g, "admiral");
				document.getElementById("js").innerHTML = res;
			}
		</script>

		</body>
</html>

<html>

	<body>


		<h2>The Text below will turn red if you mouse over it.</h2>

		<p id="mouse me">Elizabeth Weir, Ph. D.: The city can handle that?  Dr. Rodney McKay: Yes. Theoretically.  Maj. John Sheppard: Like "dinosaurs turned into birds" theoretically or "theory of relativity" theoretically?  Dr. Rodney McKay: [looks confused] What? Um, somewhere between.

			Commander Acastus Kolya: My name is Commander Kolya.  Maj. John Sheppard: "Kolya", that's a difficult name to pronounce. Is that a first name or a last name?</p>

		<script>
			document.getElementById("mouse me").onmouseover = function() {mouseOver()};
			document.getElementById("mouse me").onmouseout = function() {mouseOut()};

			function mouseOver() {
				document.getElementById("mouse me").style.color = "red";
			}

			function mouseOut() {
				document.getElementById("mouse me").style.color = "black";
			}
		</script>

	</body>
</html>





