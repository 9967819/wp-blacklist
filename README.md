This scripts exports a method in the namespace Blacklist for blocking bad
domain names based on a preconfigured blacklist.

To change the contents of the blacklist, just edit the $blacklist array.

Usage example :

<?php
$email = "somebadguy@example.com";

# Check if example.com is blacklisted. 
Blacklist\isLegitEmailAddress($email);

Have fun!
