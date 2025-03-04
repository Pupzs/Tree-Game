// script.js
// Initialize variables
let trees = 0;
let treeIncrement = 1;
let treeIncrementIncrease = 1;
let treeIncrementCost = 5;
let doubleTreeIncrementCost = 100;
let prestigePoints = 0;
let potentialprestigePoints = 0;
let treesNeeded = 10000;
let potentialprestigePointsUp = 0;
let potentialprestigePointsDown = 0;

// Get DOM elements
const treesDisplay = document.getElementById('trees-display');
const treeIncrementDisplay = document.getElementById('treeIncrement-display');
const treeIncrementIncreaseDisplay = document.getElementById('treeIncrementIncrease-display');
const treeIncrementCostDisplay = document.getElementById('treeIncrementCost-display');
const doubleTreeIncrementCostDisplay = document.getElementById('doubleTreeIncrementCost-display');
const prestigeDisplay = document.getElementById('prestige-display');
const plantButton = document.getElementById('plant-button');
const increaseButton = document.getElementById('increase-button');
const doubleIncreaseButton = document.getElementById('doubleIncrease-button');
const resetButton = document.getElementById('reset-button');
const prestigeButton = document.getElementById('prestige-button');
const x10iButton = document.getElementById('x10i');


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

function updatePrestigePoints() {
    prestigeDisplay.textContent = prestigePoints + " (" + potentialprestigePoints + ")";
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
    potential_prestige();
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
        potential_prestige();
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
        potential_prestige();
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
    potentialprestigePoints = 0;
    prestigePoints = 0;
    treesNeeded = 10000;
    updateTreesDisplay();
    updateTreeIncrementDisplay();
    updateTreeIncrementIncreaseDisplay();
    updateTreeIncrementCostDisplay();
    updateDoubleTreeIncrementCostDisplay();
    updatePrestigePoints();
    updateProgressBar(); // Reset the progress bar
	// Add a visual effect (e.g., change button color)
    resetButton.style.backgroundColor = "#80c080"; // Green
    setTimeout(() => {
        resetButton.style.backgroundColor = "#4CAF50"; // Original color
    }, 100); // Delay for 100 milliseconds
}

function potential_prestige() {
    //prestige calculation
    if (potentialprestigePointsUp == 0) {
        //potentialprestigePointsUp = 1;
        if (trees/treesNeeded>=1) {
            potentialprestigePointsUp = 1;
            while (trees/treesNeeded>=1) {
                let potentialEarnedPoints = Math.floor(potentialprestigePoints + trees / treesNeeded);
                potentialprestigePoints = potentialEarnedPoints;
                updatePrestigePoints();
                treesNeeded *= 2;
                if (trees/treesNeeded<1) {
                    potentialprestigePointsUp = 0;
                    break;
                }
            }
        }
    }

    let treesNeededCheck = treesNeeded/2
    if (potentialprestigePointsDown == 0) {
        //potentialprestigePointsDown = 1;
        if (potentialprestigePoints >= 1) {
            if (treesNeededCheck/trees>1) {
                potentialprestigePointsDown = 1;
                while (treesNeededCheck/trees>1) {
                    potentialprestigePoints -= 1;
                    updatePrestigePoints();
                    treesNeeded /= 2;
                    treesNeededCheck=treesNeeded/2
                    if (potentialprestigePoints == 0) {
                        potentialprestigePointsDown = 0;
                        break;
                    }
                    if (treesNeededCheck/trees<=1) {
                        potentialprestigePointsDown = 0;
                        break;
                    }
                }
            } 
        }
    }
}
function prestige() {
    if (potentialprestigePoints >= 1){
        let earnedPoints = potentialprestigePoints 
        prestigePoints += earnedPoints;
        trees = 0; // Reset trees
        potentialprestigePoints = 0; // Reset Potential Prestige Points
        treesNeeded = 10000; // Reset Trees Needed for New Prestige Points
        updatePrestigePoints();
        updateTreesDisplay();
        alert(`You have earned ${earnedPoints} prestige points!`);
        updateProgressBar(); // Update the progress bar
        // Add a visual effect (e.g., change button color)
        prestigeButton.style.backgroundColor = "#80c080"; // Green
        setTimeout(() => {
            prestigeButton.style.backgroundColor = "#4CAF50"; // Original color
        }, 100); // Delay for 100 milliseconds
    }
    else {
        alert(`You do not have at least 10,000 trees`);
    }
}

function x10i() {
    trees = trees*10;
    updateTreesDisplay();
    potential_prestige();
}

// Event listeners
plantButton.addEventListener('click', plantTrees);
increaseButton.addEventListener('click', increaseTreeIncrement);
doubleIncreaseButton.addEventListener('click', doubleTreeIncrementIncrease);
resetButton.addEventListener('click', resetGame);
prestigeButton.addEventListener('click', prestige);
x10iButton.addEventListener('click', x10i)

// Initial display updates
updateTreesDisplay();
updateTreeIncrementDisplay();
updateTreeIncrementIncreaseDisplay();
updateTreeIncrementCostDisplay();
updateDoubleTreeIncrementCostDisplay();
updatePrestigePoints();
updateProgressBar(); // Initialize the progress bar 
