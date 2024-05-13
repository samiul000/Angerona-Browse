<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Angerona Browse</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
</head>
<body>
    <div class="container">
        <header>
            <br><img src="https://artsdatabanken.no/Media/F2872?mode=320x320" width="50px" height="50px">
            <h1>Angerona</h1>
        </header>
        <form action="search.php" method="get">
            <input type="text" name="q" placeholder="Enter your search query">
            <select name="engine">
                <option value="brave">Brave</option>
                <option value="duckduck">DuckDuckGo</option>
                <option value="google">Google</option>
                <option value="bing">Bing</option>
                <option value="firefox">FireFox</option>
                <option value="avast">Avast</option>
                <option value="wiki">Wikipedia</option>
                <option value="britannica">Britannica</option>
                <option value="archive">Internet Archive</option>
                <option value="chromium">Chromium</option>
                <!-- Add more search engine options here -->
            </select>
            <input type="submit" value="Search">
        </form>
    </div>
</body>
</html>
