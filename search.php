<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $query = $_GET["q"];
    $engine = $_GET["engine"];

    if (!empty($query) && !empty($engine)) {
        switch ($engine) {
            case "brave":
                $url = "https://search.brave.com/search?q=" . urlencode($query);
                break;
            case "duckduck":
                $url = "https://duckduckgo.com/?va=q&t=hg&q=" . urlencode($query);
                break;
            case "google":
                $url = "https://www.google.com/search?q=" . urlencode($query);
                break; 
            case "bing":
                $url = "https://www.bing.com/search?q=" . urlencode($query);
                break;   
            case "wiki":
                $url = "https://en.wikipedia.org/wiki/" . urlencode($query);
                break;    
            case "firefox":
                $url = "https://wiki.mozilla.org/index.php?search=" . urlencode($query);
                break;
            case "chromium":
                $url = "https://source.chromium.org/search?q=" . urlencode($query);
                break;
            case "avast":
                $url = "https://us.search.yahoo.com/search?fr=yhs-invalid&p=" . urlencode($query);
                break;
            case "britannica":
                $url = "https://www.britannica.com/place/" . urlencode($query);
                break;
            case "archive":
                $url = "https://archive.org/search?query=" . urlencode($query);
                break;
            // Add more cases for other search engines
            default:
                echo "Invalid search engine selection.";
                exit;
        }

        // Redirect the user to the selected search engine's results page
        header("Location: " . $url);
        exit;
    } else {
        echo "Please enter a search query and select a search engine.";
    }
}
