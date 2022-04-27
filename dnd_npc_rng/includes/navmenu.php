<?php

$navigationMenuList = [
    "index.php" => '<span class="redtext">DnD </span> RNG',
    "page_1.php" => '<span class="redtext">Exploration:</span> Forest',
    "page_2.php" => "Page 2",
    "page_3.php" => "Page 3",
];
/*
foreach ($navigationMenuList as $link_address => $pagename) {
}
*/

?>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-------------------------------- navigation menu-------------------------navmenu.php ------------->
    <div class="navmenufixed">
        <nav>
            <?php foreach ($navigationMenuList as $link_address => $pagename) : ?>

                <a href="<?php echo $link_address; ?>"><?php echo $pagename; ?> - </a>

            <?php endforeach ?>
        </nav>
    </div>
    <!----------
    <div class="navmenu">
        <nav>
        <a href="index.php">Main Page</a> -
        <a href="page_1.php">Page 1</a> -
        <a href="page_2.php">Page 2</a> -
        <a href="page_3.php">Page 3</a>
        </nav>
    </div>
    -------------->

    <!----------
    <ul>
        <li><a href="index.php">Main Page</a></li>
        <li><a href="page_1.php">Page 1</a></li>
        <li><a href="page_2.php">Page 2</a></li>
        <li><a href="page_3.php">Page 3</a></li>
      </ul>
      -------------->