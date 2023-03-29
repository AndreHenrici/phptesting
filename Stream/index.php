<html>
<head>
    <h1>Suche</h1>
</head>
<body>



<?php
    include "../funktionen.php";

?>
<form class="navbar-search" id="topsearch" action="/search.php">
    <input type="hidden" name="scope" value="quickref">
    <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
</form>

<h1>Ergebnis:</h1>
<?php
    $kontext = stream_context_create(
        ["http" =>
            [
                "method" => "POST",
                "header" => "Content-type:application/x-www-form-urlencoded",
                "content" => "pattern=Streams&scope=quickref"
            ]
        ]
    );
    $daten = file_get_contents("https://www.php.net/search.php", false, $kontext);
    echo $daten;
    echo $_POST["scope"];
?>
</body>
</html>