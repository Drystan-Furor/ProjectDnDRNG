<?php
require_once 'includes/functions.php';  // PHP functions file
require_once 'includes/db_connect.php'; // Database connection file
/**
BUILD RESOURCE ARRAY'S
 */
require 'includes/scripts/bodydetails.inc.php';     //array's of bodytypes
require 'includes/scripts/arraysmaterials.inc.php'; //array's of resources
require 'includes/scripts/arrayemotions.inc.php';   //array's of emotions
require 'includes/scripts/scars.inc.php';           //array's of scars
require 'includes/scripts/weapons.inc.php';         //array's of weapons
require 'includes/scripts/prosperity.inc.php';      //boolean's of wardrobes
require 'includes/scripts/arraywardrobes.inc.php';  //array's of wardrobes

/**
GENERATORS
 */
require 'includes/scripts/gender.inc.php';          //Generate Gender
require 'includes/scripts/characteristics.inc.php'; //Generate Face 
require 'includes/scripts/race.inc.php';            //Generate race, name, age
require 'includes/scripts/wardrobe.inc.php';        //Generate Wardrobe 
//----------------------------------------------------------includes/scripts/

require 'npc.gen.php'; // collecting all vars

?>

<!-- header file -->
<?php
$title = "DnD NPC RNG";
require_once('includes/header.php');
?>

<!-------------------------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php' ?>
<!-------------------------------------------navigationn file ------------------------------->

<h1 class="rngcenter">D&D <br><span class="whitetext">Random NPC Generator</span></h1>

<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">More Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                    If you ever played D&D you might have noticed this does not go without social encounters.
                    Being a <a href="https://en.wikipedia.org/wiki/Dungeon_Master">Dungeon Master (DM)</a> is a challenge.
                    We have to take time and prepare a game session, but we cannot prepare everything that happens, so sometimes we improvise. However, with great improvisation comes great responsibility: <b>details.</b></p>
                <p>
                    Trough personal experience I realized that things would be easier making lists of details and using dice to randomly decide what <em>details</em> would fill my blanks.<br>
                    So I set out to write one page after another with random details that do not impact the story of a DM, like a <a href="https://www.reddit.com/r/d100/comments/l2oo00/d100_familiar_behavior/">D100 List: Familiar Behavior</a><br>
                    This led me to <a href="https://www.dndspeak.com/">a marvellous website with more D100 lists</a>.</p>
                <p>
                    After learning to write code based on my personal development plan, I realized I could use code to make more D100 lists beyond the scope of 100, and if I would write the code I would no longer need books, notes, notepads or dices to
                    prepare details. No longer would I remain inspiration-less or bland when my players would meet a new character.<br>
                    Inmagine, with one click of the mouse, a script would roll all dices and combine all results into a small text block, reading it out loud would give a detailed, unqique yet fully randomized NPC. So next time my party walks into a tavern
                    and ask the DM what people are inside, we don't have to come up on the spot with a memorable or less memorable character. Click the button and see who they meet!<br>
                </p>
            </div>
        </div>
    </div>
</div>
<h2 class="rngh2">RNG Tool to create a detailed npc as fast as possible.</h2>
<div class="greeting">
    <h3><?php echo greet();
        if ($_COOKIE['visit'] <= 0) {
            echo "Welcome to the NPC RNG Tool, ";
        } elseif ($_COOKIE['visit'] >= 5) {
            echo "Welcome back to the NPC RNG Tool, ";
        }
        ?></h3>
</div>

<p class="centeredpar">
    To facilitate homebrew you have the option to enter your custom race name, or choose to enter a race name from the <a href="https://www.dndbeyond.com/races">DnD page</a>. <br>
    If nothing is entered you are giving the generator a chance to randomly choose between
    any of the <a href="https://www.dndbeyond.com/races">DnD races</a>.
</p>



<!-- ----------------------------------------------------------------------FORM------------>
<div class="centertext">
    <form method="post">
        <label for="commonrace"><b>Enter a race you want to generate or enter a homebrew race, and press ENTER</b><br></label>
        <input type="text" name="commonrace" id="commonrace" placeholder="Example: Orc"> <br>
        <p>Or click the button below.</p>
        <button type="submit" class="setcommonrace" name="setcommonrace" id="setcommonrace">RNG<br> <span class="whitetext">an NPC</span></button>
        <!--------------------------------------------------------------------------------------------GENERATED CODE PARAGRAPH-->
        <p class="generatedcode"><?php echo $homebrewed ?><br><b><?php echo $randomizednpcresult ?></b></p><br>
    </form>
</div>

<!--------------------------------------button clicker------------------------------------------------------------->








<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle">All DnD Races</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <ul class="dndraces" id="dndraces">
                <?php foreach ($dndraces as $dndrace) : ?>
                    <a href="https://www.dndbeyond.com/races">
                        <b><?php echo $dndrace ?></a>, </b>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--collapsible ---------------------------------------------------------------------------------->
<div class="center">
    <p>
        It is a work in progress, for now it generates :
    <ul>
        <li>a random race <ul>
                <li>sometimes with a little background information.</li>
            </ul>
        </li>
        <li>NPC's get a name according to race lore, adhering to <a href="https://www.dndbeyond.com/races">WotC's idea's</a> where possible,
            <ul>
                <li>otherwise it generates a random name by lore naming conventions shared by Forgotten Realms.
            </ul>
        </li>
        </li>
        <li>Any and all races are optimalized for their ages, in a range between the stages of a child and whatever is a race specific maximum age.</li>
        <li>The generator gives a description of the NPC's <ul>
                <li>eyes</li>
                <li>nose</li>
                <li>chin</li>
                <li>lips</li>
                <li>teeth</li>
            </ul>
        <li>There is a randomly chosen mood</li>
        <li>If there are noticble scars or wounds visible.</li>
        <li>The amount of wealth is determined and based off that a fitting wardrobe is applied </li>
        <li>sometimes they even wear a hat.</li>
        <li>Most npc's usually have some form of trinket or jewel</li>
        <li>and each one carries a random weapon.</li>
        <li>there is Drow support, even though it's not a race on the list.</li>
    </ul>
    </p>
</div>
<!---------------------------------------------------------------------------web views---------------------------------------------->

<div class="center">
    <?php
    $total_website_views = total_views($conn); // Returns total website views
    echo "<strong>Total Website Views:</strong> " . $total_website_views;
    ?>
</div>





<!--------------------------------------------------------------------------------------------infinite loading-->


<h1 class="generateloader">GENERATING <br><span class="whitetext">MORE CHARACTER DETAILS</span></h1>
<div class="loading-box">
    <div class="loader"></div>
</div><br>













<!-- footer file -->
<?php require_once('includes/footer.php'); ?>




<script>
    let myLabels = document.querySelectorAll('.lbl-toggle');

    Array.from(myLabels).forEach(label => {
        label.addEventListener('keydown', e => {
            // 32 === spacebar
            // 13 === enter
            if (e.which === 32 || e.which === 13) {
                e.preventDefault();
                label.click();
            };
        });
    });
</script>
<!--
</body>

</html>
-->