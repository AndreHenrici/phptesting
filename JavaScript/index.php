<?php
// Include the Sajax library
require_once '../Sajax.php';
// Define the PHP function that will be called via Ajax
function my_ajax_function($name) {
    return "Hello, $name!";
}

// Register the function with Sajax
export("my_ajax_function");

// Initialize Sajax
init();

// Process incoming Ajax requests
sajax_handle_client_request();

?>

<!-- HTML code to display a form that will trigger the Ajax request -->
<html>
<head>
    <script type="text/javascript" src="sajax/sajax.js"></script>
    <script type="text/javascript">
        // Call the PHP function via Ajax when the form is submitted
        function submitForm() {
            var name = document.getElementById('name').value;
            x_my_ajax_function(name, handleResponse);
            return false;
        }

        // Handle the response from the server
        function handleResponse(response) {
            document.getElementById('output').innerHTML = response;
        }

        // Initialize Sajax and register the Ajax function
        sajax_init_object();
        sajax_register("my_ajax_function", "ajax.php");
    </script>
</head>
<body>
<form onsubmit="return submitForm();">
    Enter your name: <input type="text" id="name" name="name"><br>
    <input type="submit" value="Submit">
</form>
<div id="output"></div>
</body>
</html>
