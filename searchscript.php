<?php

ob_start(); // ensures anything dumped out will be caught

$searchTerm = $_GET['term']; //sanatize filter on this variable breaks quoted searching functionality in Primo

$type = filter_var($_GET['type'], FILTER_SANITIZE_STRING);


$filter = filter_var($_GET['filter'], FILTER_SANITIZE_STRING);




	if ($filter=="book")
{$filter="&facet=rtype,include,books";}

		
if ($filter=="kit")
{$filter="&facet=rtype,include,kits";}
	
	if ($filter=="audio")
{$filter="&facet=rtype,include,audios";}

	


if ($filter=="all")
{$filter="";}


echo $filter;

$myUrl = "https://i-share-eiu.primo.exlibrisgroup.com/discovery/search?lang=en&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20box,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20juv,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20kit,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20audio,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20awards,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20stacks,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20big%20bk,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp17,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp14,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp02,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp01,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp07,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp10,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp05,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93disp03,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93anat%20mods,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20guided,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20poster,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20level,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20box%20ov,1&mfacet=location_code,include,5833%E2%80%93112038430005833%E2%80%93btc%20ref,1&query=". $type . ",contains,". $searchTerm . $filter . "&search_scope=MyInst_and_CI&sortby=rank&tab=LibraryCatalog&vid=01CARLI_EIU:CARLI_EIU";

		
		echo $myUrl;
		
// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

header("Location: $myUrl");



?>
