<?php
namespace Blacklist;
// Blacklist temp email addresses.

# add some bad domains names here.
$blacklist = array('1secmail', '.ru', '.cn', '.xyz', 'mail.com', 'dnsabr.com', '.quest', '.biz', '.fans');

function isLegitEmailAddress($email) {
	foreach($blacklist as $value){
		if (str_contains($email, $value)) {
			error_log(sprintf("Notice: bad email address detected: %s", $email), 0);  
			return false;
		} else {
			return true;
		}	
	}	
	return false;
}
