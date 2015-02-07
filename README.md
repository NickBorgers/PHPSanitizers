# PHPSanitizers
These are my PHP Sanitizers. I feel this is the most secure method of input validation; strip out anything that is not on the whitelist.

# Usage
Simply import them and then call the functions; they are global.

An example would be:

    <?php
    require("Sanitizers.php"); 

    echo SanitizeUsername($_GET['username'])
    ?>
