<?php

global $db_host,$db_username,$db_name,$operator_email,$whitelistdomain,$whitelistdomainlevel,$whitelistdomainlist;

$db_host = "localhost";
$db_username = "jrandom";
$db_password = "ASDF!!1!one1";
$db_name = "somedb";
## $operator_email is used to mail the user on script completion
$operator_email = "j.random@example.com";

# $whitelistdomain, $whitelistdomainlevel, $whitelistdomainlist; //NEED to document SAH
//Crawl all .gov.uk and .org.uk sites

//Restrict crawling to a whitelist? true | false
$whitelistdomain=true;	
//What level of domain to match (1=tld, 2=sld, etc. e.g. 1=uk, 2=gov.uk, 3=direct.gov.uk)
$whitelistdomainlevel=2; 
//list of domains starting, ending, and separated with :
$whitelistdomainlist=":gov.uk:.org.uk:";

// Set spider penetration depth. If 0 crawl only pages in database.
$MAX_PENETRATION = 5;                           
// Wait one second between page fetches
$FETCH_DELAY     = 1;
// Wait five seconds between page fetches on same domain (NOT IMPLEMENTED YET)
$SAME_DOMAIN_FETCH_DELAY= 5;
// Don't allow spider to roam from the SEED_URL's domain
$ALLOW_OFFSITE   = true;                       
// Only include URL's to remote domains
$ONLY_OFFSITE   = false;                       

?>
