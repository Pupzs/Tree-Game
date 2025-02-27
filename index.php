<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tree Planting Game</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    h1 {
      margin-bottom: 20px;
    }

    .progress-container {
      width: 10%;
      background-color: #f3f3f3;
      margin-top: 20px;
      height: 20px;
      border-radius: 5px;
	  position:relative
    }

    .progress-bar {
      width: 0%;
      height: 100%;
      background-color: #4caf50;
      border-radius: 5px;
    }

    button {
      margin: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
	.progress-container .label{
	  position:absolute;
	  width:100%;
	  top:2px;
	  text-align:center;
	}
  </style>
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

  	<!--<script src="script.js" defer></script>-->
	<script>
		// Initialize variables
let trees = 0;
let treeIncrement = 1;
let treeIncrementIncrease = 1;
let treeIncrementCost = 5;
let doubleTreeIncrementCost = 100;

// Get DOM elements
const treesDisplay = document.getElementById('trees-display');
const treeIncrementDisplay = document.getElementById('treeIncrement-display');
const treeIncrementIncreaseDisplay = document.getElementById('treeIncrementIncrease-display');
const treeIncrementCostDisplay = document.getElementById('treeIncrementCost-display');
const doubleTreeIncrementCostDisplay = document.getElementById('doubleTreeIncrementCost-display');
const plantButton = document.getElementById('plant-button');
const increaseButton = document.getElementById('increase-button');
const doubleIncreaseButton = document.getElementById('doubleIncrease-button');
const resetButton = document.getElementById('reset-button');

// Update display functions
function updateTreesDisplay() {
    treesDisplay.textContent = trees;
}

function updateTreeIncrementDisplay() {
    treeIncrementDisplay.textContent = treeIncrement;
}

function updateTreeIncrementIncreaseDisplay() {
    treeIncrementIncreaseDisplay.textContent = treeIncrementIncrease;
}

function updateTreeIncrementCostDisplay() {
    treeIncrementCostDisplay.textContent = treeIncrementCost;
}

function updateDoubleTreeIncrementCostDisplay() {
    doubleTreeIncrementCostDisplay.textContent = doubleTreeIncrementCost;
}

// Progress bar function
function updateProgressBar() {
    const progressBar = document.getElementById('progress-bar-Incr');
	const percentage = (trees / treeIncrementCost) * 100; // Calculate the percentage
	let labelElement = document.getElementById("progress-label-Incr");
	if (percentage > 100) {
  		labelElement.innerText = 100 + "%"; //+ " (" + Math.floor(percentage/100) + ") "
		progressBar.style.width = 100 + "%";
	}
	else {
		labelElement.innerText = Math.round(percentage) + '%';
    	progressBar.style.width = percentage + '%'; // Update the width of the progress bar
	}
	

	const progressBar2 = document.getElementById('progress-bar-Double');
    const percentage2 = (trees / doubleTreeIncrementCost) * 100; // Calculate the percentage
	let labelElement2 = document.getElementById("progress-label-Double");
	if (percentage2 > 100) {
  		labelElement2.innerText = 100 + "%"; //+ " (" + Math.floor(percentage/100) + ") "
		progressBar2.style.width = 100 + "%";
	}
	else {
		labelElement2.innerText = Math.round(percentage2) + '%';
    	progressBar2.style.width = percentage2 + '%'; // Update the width of the progress bar
	}
}

// Game logic functions
function plantTrees() {
    trees += treeIncrement;
    updateTreesDisplay();
    updateProgressBar(); // Update the progress bar after planting trees
	// Add a visual effect (e.g., change button color)
    plantButton.style.backgroundColor = "#80c080"; // Green
    setTimeout(() => {
        plantButton.style.backgroundColor = "#4CAF50"; // Original color
    }, 100); // Delay for 100 milliseconds
}

function increaseTreeIncrement() {
    if (trees >= treeIncrementCost) {
        treeIncrement += treeIncrementIncrease;
        trees -= treeIncrementCost;
        treeIncrementCost *= 2;
        updateTreesDisplay();
        updateTreeIncrementDisplay();
        updateTreeIncrementCostDisplay();
        updateProgressBar(); // Update the progress bar
		// Add a visual effect (e.g., change button color)
    	increaseButton.style.backgroundColor = "#80c080"; // Green
    	setTimeout(() => {
        	increaseButton.style.backgroundColor = "#4CAF50"; // Original color
    	}, 100); // Delay for 100 milliseconds
    } else {
        alert("Not enough trees to increase tree increment!");
    }
}

function doubleTreeIncrementIncrease() {
    if (trees >= doubleTreeIncrementCost) {
        treeIncrement *= 2;
        treeIncrementIncrease *= 2;
        trees -= doubleTreeIncrementCost;
        doubleTreeIncrementCost *= 4;
        updateTreesDisplay();
        updateTreeIncrementDisplay();
        updateTreeIncrementIncreaseDisplay();
        updateDoubleTreeIncrementCostDisplay();
        updateProgressBar(); // Update the progress bar
		// Add a visual effect (e.g., change button color)
    	doubleIncreaseButton.style.backgroundColor = "#80c080"; // Green
    	setTimeout(() => {
        	doubleIncreaseButton.style.backgroundColor = "#4CAF50"; // Original color
    	}, 100); // Delay for 100 milliseconds
    } else {
        alert("Not enough trees to double tree increment increase!");
    }
}

function resetGame() {
    trees = 0;
    treeIncrement = 1;
    treeIncrementIncrease = 1;
    treeIncrementCost = 5;
    doubleTreeIncrementCost = 100;
    updateTreesDisplay();
    updateTreeIncrementDisplay();
    updateTreeIncrementIncreaseDisplay();
    updateTreeIncrementCostDisplay();
    updateDoubleTreeIncrementCostDisplay();
    updateProgressBar(); // Reset the progress bar
	// Add a visual effect (e.g., change button color)
    resetButton.style.backgroundColor = "#80c080"; // Green
    setTimeout(() => {
        resetButton.style.backgroundColor = "#4CAF50"; // Original color
    }, 100); // Delay for 100 milliseconds
}

// Event listeners
plantButton.addEventListener('click', plantTrees);
increaseButton.addEventListener('click', increaseTreeIncrement);
doubleIncreaseButton.addEventListener('click', doubleTreeIncrementIncrease);
resetButton.addEventListener('click', resetGame);

// Initial display updates
updateTreesDisplay();
updateTreeIncrementDisplay();
updateTreeIncrementIncreaseDisplay();
updateTreeIncrementCostDisplay();
updateDoubleTreeIncrementCostDisplay();
updateProgressBar(); // Initialize the progress bar

	</script>
</body>
</html>