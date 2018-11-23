<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP Farm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="js/script.js" defer></script>
</head>
<body>
<div class="wrap">
    <header>
        <h1>OOP Farm</h1>
    </header>
    <div class="barn-wrap">
        <div class="barn">
            <div id="barn-cow" class="barn-animal"></div>
            <div id="barn-sheep" class="barn-animal"></div>
            <div id="barn-chicken" class="barn-animal"></div>
            <div id="barn-pig" class="barn-animal"></div>
        </div>

        <div class="barn-facts">
            <div class="barn-facts-inner">
                <h2>Who is in the barn?</h2>
                <p id="default">OOP Farm uses an ES5 AJAX request to a OOP page to add animals to the barn.  Try it out!</p>
                <div id="barn-facts"></div>
            </div>
        </div>
    </div>


    <div id="animal-select" class="animal-select-wrap">
        <h2>Select an Animal</h2>
        <p>To add to the barn</p>

        <div class="animal-select">
            <div class="animal">
                <img src="img/animals/cow.png" data-animal="cow" class="add-animal">
            </div>
            <div class="animal">
                <img src="img/animals/sheep.png" data-animal="sheep" class="add-animal">
            </div>
            <div class="animal">
                <img src="img/animals/pig.png" data-animal="pig" class="add-animal">
            </div>
            <div class="animal">
                <img src="img/animals/chicken.png" data-animal="chicken" class="add-animal">
            </div>
        </div>
    </div>
</div>
</body>
</html>