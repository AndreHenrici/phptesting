<?php
function serverZeit() {
    return date("H:i:s");
}
require_once "./Sajax/php/Sajax.php";

sajax_init();
sajax_export("serverZeit");
sajax_handle_client_request();
?>
<html>
<head>
    <title>PHP und JavaScript</title>
    <script type="text/javascript">
        <?php
        sajax_show_javascript();
        ?>
        function zeigeServerZeit() {
            x_serverZeit(serverZeit_callback);
            setTimeout(zeigeServerZeit, 1000);
        }
        zeigeServerZeit();
        function serverZeit_callback(ergebnis) {
            document.getElementById("Zeit").innerHTML = ergebnis;
        }
    </script>
</head>
<body>
<p id="Zeit"></p>
</body>
</html>
