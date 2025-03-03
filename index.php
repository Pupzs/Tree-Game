<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Hi -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tree Planting Game</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Tree Planting Game</h1>

  	<div>
    	Trees: <span id="trees-display">0</span>
	</div>
	<div>
    	Tree Increment: <span id="treeIncrement-display">1</span>
	</div>
	<div>
    	Tree Increment Increase: <span id="treeIncrementIncrease-display">1</span>
  	</div>
  	<div>
    	Tree Increment Cost: <span id="treeIncrementCost-display">5</span>
  	</div>
	<div id="progress-container-Incr" class="progress-container">
    	<div id="progress-bar-Incr" class="progress-bar"></div>
		<label id="progress-label-Incr" class ="label">0</label>
  	</div>
  	<div>
    	Double Tree Increment Cost: <span id="doubleTreeIncrementCost-display">100</span>
  	</div>
	<div id="progress-container-Double" class="progress-container">
    	<div id="progress-bar-Double" class="progress-bar"></div>
		<label id="progress-label-Double" class ="label">0</label>
  	</div>
  

  	<button id="plant-button">Plant Trees</button>
  	<button id="increase-button">Increase Tree Increment</button>
  	<button id="doubleIncrease-button">Double Tree Increment Increase</button>
  	<button id="reset-button">Reset</button>

  	<script src="script.js" defer></script>
</body>
</html>