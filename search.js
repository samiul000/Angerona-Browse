
function handleSearch() {
   
    var query = document.getElementById("q").value;
    var engine = document.getElementById("engine").value;

   
    if (query && engine) {
        var url;
        switch (engine) {
            case "brave":
                url = "https://search.brave.com/search?q=" + encodeURIComponent(query);
                break;
            case "duckduck":
                url = "https://duckduckgo.com/?va=q&t=hg&q=" + encodeURIComponent(query);
                break;
            case "google":
                url = "https://www.google.com/search?q=" + encodeURIComponent(query);
                break;
            case "bing":
                url = "https://www.bing.com/search?q=" + encodeURIComponent(query);
                break;
            case "wiki":
                url = "https://en.wikipedia.org/wiki/" + encodeURIComponent(query);
                break;
            case "firefox":
                url = "https://wiki.mozilla.org/index.php?search=" + encodeURIComponent(query);
                break;
            case "chromium":
                url = "https://source.chromium.org/search?q=" + encodeURIComponent(query);
                break;
            case "avast":
                url = "https://us.search.yahoo.com/search?fr=yhs-invalid&p=" + encodeURIComponent(query);
                break;
            case "britannica":
                url = "https://www.britannica.com/place/" + encodeURIComponent(query);
                break;
            case "archive":
                url = "https://archive.org/search?query=" + encodeURIComponent(query);
                break;
            default:
                console.log("Invalid search engine selection.");
                return;
        }

        
        window.location.href = url;
    } else {
        console.log("Please enter a search query and select a search engine.");
    }
}
