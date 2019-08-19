<?php

// define the data
$heroes = [
    "a-bomb" => [
        "id" => 1017100,
        "name" => "A-Bomb (HAS)",
    ],
    "captain-america" => [
        "id" => 1009220,
        "name" => "Captain America",
    ],
    "black-panther" => [
        "id" => 1009187,
        "name" => "Black Panther",
    ],
];

$selectedHero = [];

// process the get request, if any
if (array_key_exists('hero', $_GET)) {
    if (array_key_exists($_GET['hero'], $heroes)) {
        $heroId = $_GET['hero'];
        $selectedHero = $heroes[$heroId];
    }
}

// continue with the template
?>
<form action="./super-get.php" method="get" enctype="application/x-www-form-urlencoded">
    <label for="hero_select">Select your hero: </label>
    <select name="hero" id="hero_select">
        <?php foreach ($heroes as $heroId => $heroData) {
            echo sprintf('<option value="%s">%s</option>', $heroId, htmlentities($heroData['name']));
        } ?>
    </select>
    <input type="submit" value="Show">
</form>

<div style="background: #eee">
    <p>Selected hero:</p>
    <?php if ($selectedHero) { ?>
        <h3><?= $selectedHero['name'] ?></h3>
        <h4>ID: <?= $selectedHero['id'] ?></h4>
    <?php } else { ?>
        <p>None.</p>
    <?php } ?>
</div>
<br>
<p>The value of $_GET is:</p>
<pre><?= var_export($_GET, true); ?></pre>


