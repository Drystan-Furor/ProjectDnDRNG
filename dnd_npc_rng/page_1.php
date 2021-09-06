<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

require 'includes/explorescripts/abbreviationlibrary.inc.php'; // Abbreviation library file
require 'includes/explorescripts/weathersurvival.inc.php';      // weather
require 'includes/explorescripts/forest.inc.php';              //array's of forests



$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);
?>

<!-- header file -->
<?php 
$title = "Exploration: Forest";
require_once('includes/header.php'); ?>

<!-------------------------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php'?>
<!-------------------------------------------navigationn file ------------------------------->

<!-- here goes the website -->
<h1 class="rngcenter">D&D <br><span class="whitetext">Exploration: Forest</span></h1>
<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">More Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                    If you ever played D&D you might have noticed this does not go without exploration and adventure.
                    Being a <a href="https://en.wikipedia.org/wiki/Dungeon_Master">Dungeon Master (DM)</a> is a challenge.
                    We have to take time and prepare a game session, but we cannot prepare every little detail, so sometimes we improvise. However, with great improvisation comes great responsibility: <b>details.</b></p>
                <p>
                    Trough personal experience I realized that things would be easier making lists of details and using dice to randomly decide what <em>details</em> would fill my blanks.<br>
                    So I set out to write one page after another with random details that do not impact the story of a DM, like a <a href="https://www.reddit.com/r/d100/comments/l2oo00/d100_familiar_behavior/">D100 List: Familiar Behavior</a><br>
                    This led me to <a href="https://www.dndspeak.com/">a marvellous website with more D100 lists</a>.</p>
                <p>
                    After learning to write code based on my personal development plan, I realized I could use code to make more D100 lists beyond the scope of 100, and if I would write the code I would no longer need books, notes, notepads or dices to
                    prepare details. No longer would I remain inspiration-less or bland when my players would enter a forest.<br>
                    Inmagine, with one click of the mouse, a script would roll all dices and combine all results into a small text block, reading it out loud would give a detailed, unqique yet fully randomized exploration moment. 
                    So next time my party walks into the woods, we don't have to come up on the spot with a memorable or less memorable adventurous moment. Click the button and see how exploration fares!<br>
                </p>
            </div>
        </div>
    </div>
</div>
<!--collapsible ---------------------------------------------------------------------------------->
<h2 class="rngh2">RNG Tool to create a detailed exploration of a forest region.</h2>

<div class="centertext">
<p class="generatedcode">
<?php echo $rngforest ?>
</p>
</div>
<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle">Exploration: Forest</label>
    <div class="collapsible-content">
        <div class="content-inner">
        <p>It's a work in progress, right now it utilizes:</p>
            <ul class="dndraces" id="dndraces">
                <li>DMG. 109 - 112</li>
            </ul>
        </div>
    </div>
</div>
<!--collapsible ---------------------------------------------------------------------------------->

<div>
  <?php
  $total_page_views = total_views($conn, $page_id); // Returns total views of this page
  echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
  ?>
</div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>