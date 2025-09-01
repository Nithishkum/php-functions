<?php
if (isset($_GET['inputText']) && isset($_GET['func'])) {
    $text = $_GET['inputText'];
    $func = $_GET['func'];

    switch ($func) {
        case "length":
            echo "Length of the string: " . strlen($text);
            break;
        case "reverse":
            echo "Reversed string: " . strrev($text);
            break;
        case "uppercase":
            echo "Uppercase: " . strtoupper($text);
            break;
        case "lowercase":
            echo "Lowercase: " . strtolower($text);
            break;
        case "wordcount":
            echo "Word count: " . str_word_count($text);
            break;
        case "position":
            $pos = strpos($text, "PHP");
            echo $pos !== false ? "Position of 'PHP': $pos" : "'PHP' not found.";
            break;
        case "replace":
            echo "Replaced string: " . str_replace("PHP", "Awesome", $text);
            break;
        case "ucfirst":
            echo "Replaced string: " . ucfirst($text);
            break;
        case "ucwords":
            echo "Replaced string: " . ucwords($text);
            break;
        default:
            echo "Invalid function.";
    }
} else {
    echo "Please provide input.";
}
?>
