<?php
class htmlspecialchars_filter extends php_user_filter {
    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            $bucket->data = htmlspecialchars($bucket->data);
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }
}
stream_filter_register(
    "string.htmlspecial",
    "htmlspecialchars_filter"
);
echo "<h1>Filter</h1><pre>";
echo htmlspecialchars(print_r(stream_get_filters(), true));
echo "</pre><h1>Ergebnis</h1><pre>";
echo file_get_contents(
    "php://filter/read=string.toupper|string.htmlspecial/resource=test.txt"
);
echo "</pre>";
?>
