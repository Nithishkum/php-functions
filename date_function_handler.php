<?php
date_default_timezone_set("Asia/Kolkata");

if (isset($_GET['inputDate']) || (isset($_GET['func']) && $_GET['func'] === 'today')) {
    $func = $_GET['func'];
    $inputDate = $_GET['inputDate'] ?? date("Y-m-d");

    switch ($func) {
        case "dayofweek":
            echo "Day of the Week: " . date("l", strtotime($inputDate));
            break;
        case "adddays":
            echo "Date After 7 Days: " . date("Y-m-d", strtotime($inputDate . " +7 days"));
            break;
        case "subdays":
            echo "Date Before 7 Days: " . date("Y-m-d", strtotime($inputDate . " -7 days"));
            break;
        case "timestamp":
            echo "Timestamp of $inputDate: " . strtotime($inputDate);
            break;
        case "today":
            echo "Today's Date: " . date("Y-m-d");
            break;
        case "difference":
            $today = new DateTime(date("Y-m-d"));
            $input = new DateTime($inputDate);
            $diff = $today->diff($input)->format("%r%a");
            echo "Days between today and $inputDate: $diff day(s)";
            break;
        default:
            echo "Invalid function.";
    }
} else {
    echo "Please provide a valid date.";
}
?>
