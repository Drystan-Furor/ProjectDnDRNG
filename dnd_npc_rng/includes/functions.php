<?php
/**
functions of DND NPC RNG 
 */
error_reporting(E_ALL);
setcookie("visit", $cookie_visitor, time() + (86400 * 30), "/"); // 86400 = 1 day
$cookie_visitor = $_COOKIE['visit'];
if (!isset($_COOKIE['visit'])) {
    setcookie('visit', $cookie_visitor, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    $cookie_visitor = ++$_COOKIE['visit'];
    setcookie('visit', $cookie_visitor, time() + (86400 * 30), "/"); // 86400 = 1 day
}



/**
 Is Homebrew
 */
function Is_homebrew($var)
{
    return (((bool)$var !== null) && ($var != "")
        && is_numeric($var) && (intval($var) < 0));
}

/** 
  Time based greeting
 */
function greet()
{
    $hour = date("H");
    if ($hour >= 0 && $hour < 6) {
        $greet = "Good night, ";
    } else if ($hour >= 6 && $hour < 12) {
        $greet = "Good morning, ";
    } else if ($hour >= 12 && $hour < 18) {
        $greet = "Good afternoon, ";
    } else if ($hour >= 18 && $hour < 24) {
        $greet = "Good evening, ";
    } else {
        $greet = "Hello, ";
    }

    return "$greet";
}

/** 
FUNCTIONS TO COUNT WEBPAGE
 */
function total_views($conn, $page_id = null)
{
    if ($page_id === null) {
        // count total website views
        $query = "SELECT sum(total_views) as total_views FROM pages";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['total_views'] === null) {
                    return 0;
                } else {
                    return $row['total_views'];
                }
            }
        } else {
            return "No records found!";
        }
    } else {
        // count specific page views
        $query = "SELECT total_views FROM pages WHERE id='$page_id'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['total_views'] === null) {
                    return 0;
                } else {
                    return $row['total_views'];
                }
            }
        } else {
            return "No records found!";
        }
    }
}



function is_unique_view($conn, $visitor_ip, $page_id)
{
    $query = "SELECT * FROM page_views WHERE visitor_ip='$visitor_ip' AND page_id='$page_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        return false;
    } else {
        return true;
    }
}



function add_view($conn, $visitor_ip, $page_id)
{
    if (is_unique_view($conn, $visitor_ip, $page_id) === true) {
        // insert unique visitor record for checking whether the visit is unique or not in future.
        $query = "INSERT INTO page_views (visitor_ip, page_id) VALUES ('$visitor_ip', '$page_id')";

        if (mysqli_query($conn, $query)) {
            // At this point unique visitor record is created successfully. Now update total_views of specific page.
            $query = "UPDATE pages SET total_views = total_views + 1 WHERE id='$page_id'";

            if (!mysqli_query($conn, $query)) {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}
