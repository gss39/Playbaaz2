<?php
 
include('simple_html_dom.php');
 
$html = file_get_html(
'http://www.google.com/search?q='.$_POST["search"]);
 
foreach($html->find('div.kCrYT') as $elements) {
    echo $elements->plaintext;
    break;
}
?>
