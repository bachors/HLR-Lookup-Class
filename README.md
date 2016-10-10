# HLR-Lookup-Class
PHP HLR Lookup Class. Mengetahui Asal Nomor HP di Indonesia.

<h4>Example</h4>
<pre>&lt;?php

// include
include_once("hlr.class.php");

$hlr = new hlr('081706076876');

// Cek all. Return: array
$data = $hlr-&gt;lookup();

echo '&lt;pre&gt;';
print_r($data);
echo '&lt;/pre&gt;';

/* Cek by specific provider. Return: string
$city = $hlr-&gt;indosat(); // telkomsel, indosat, xl
echo $city;
*/</pre>

<a href="http://ibacor.com/tools/hlr-lookup"><h4>DEMO</h4></a>
