<?php

/**
 * JSSoundEvents.php
 */

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">

		<title>JSSoundEvents</title>

	</head>

	<body>

		<h1>JSSoundEvents</h1>

		<p>
			Click on the buttons and see what happens.
		</p>

		<p id="sound-buttons">
			<button id="success-button" data-sound="success">Success</button>
			<button id="failure-button" data-sound="failure">Failure</button>
			<button id="error-button" data-sound="error">Error</button>
			<button id="info-button" data-sound="info">Info</button>

			<button id="delayed-button" data-sound="failure">Delayed</button>
		</p>

		<audio preload data-soundsource="success">
			<source src="./audio/beep-xylo.mp3" type="audio/mpeg">
		</audio>

		<audio preload data-soundsource="error">
			<source src="./audio/beep-rejected.mp3" type="audio/mpeg">
		</audio>

		<audio preload data-soundsource="failure">
			<source src="./audio/beep-rejected.mp3" type="audio/mpeg">
		</audio>

		<audio preload data-soundsource="info">
			<source src="./audio/beep-xylo.mp3" type="audio/mpeg">
		</audio>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="./js/jssoundevents.js"></script>
		<script type="text/javascript" src="./js/demo.js"></script>

	</body>

</html>
