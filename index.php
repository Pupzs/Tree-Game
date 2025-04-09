<!DOCTYPE html>
<html>
<head>
<title>Tree Planting Game with Prestige</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="Box">
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

    <div class="progress-container">
        <div class="progress-bar" id="progress-bar-Incr"></div>
        <div class="label" id="progress-label-Incr"></div>
    </div>

    <div>
        Double Tree Increment Cost: <span id="doubleTreeIncrementCost-display">100</span>
    </div>

    <div class="progress-container">
        <div class="progress-bar" id="progress-bar-Double"></div>
        <div class="label" id="progress-label-Double"></div>
    </div>

    <div>
        Prestige Points: <span id="prestige-display">0</span>
    </div>

    

    <button id="plant-button">Plant Tree</button>
    <button id="increase-button">Increase Tree Increment</button>
    <button id="doubleIncrease-button">Double Tree Increment Increase</button>
    <button id="prestige-button">Prestige</button>
    <button id="reset-button">Hard Reset</button>
    <button id="x10i">x10</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
