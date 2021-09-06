<?php
/**
 AGE Script
 */

$age = rand(14, 80);
/*
VAR applies to all,
SWITCH specifies ON $dndrace
age is always 14 - 80
not dependend on $race
*/

    // Age Selector IF race != human aging
    //------------------------------------------------------age definer
    switch ($dndrace) {
case $dndrace == "Elf":
    $age = rand(14, 750);
    break;
case $dndrace == "Kenku" || $dndrace == "Lizardfolk" || 
    $dndrace == "Tabaxi" || $dndrace == "Goblin":
    $age = rand(14, 60);
    break;
case $dndrace == "Dwarf" || $dndrace == "Firbolg":
    $age = rand(14, 350);
    break;
case $dndrace == "Human" || $dndrace == "Yuan Ti Pureblood" || $dndrace == "Goliath":
    $age = rand(14, 90);
    break;
case $dndrace == "Tiefling" || $dndrace == "Gith" || $dndrace == "Changeling" :
    $age = rand(14, 100);
    break;
case $dndrace == "Aarakocra" || $dndrace == "Warforged":
    $age = rand(3, 30);
    break;
case $dndrace == "Tortle" || $dndrace == "Orc":
    $age = rand(12, 50);
    break;
case $dndrace == "Aasimar":
    $age = rand(14, 160);
    break;
case $dndrace == "Kobold" || $dndrace == "Genasi":
    $age = rand(14, 120);
    break;   
case $dndrace == "Halfling" || $dndrace == "Verdan":
    $age = rand(14, 250);
    break;
case $dndrace == "Orc of Exandria" || $dndrace == "Orc of Ebberon" || 
    $dndrace == "Half Orc":
    $age = rand(14, 75);
    break;
case $dndrace == "Gnome" || $dndrace == "Loxodon":
    $age = rand(14, 425);
    break;  
case $dndrace == "Vedalkan":
    $age = rand(14, 500);
    break;      
default:
    $age = $age;
    break;  
    }