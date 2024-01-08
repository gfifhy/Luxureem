<?php

$html = 'http://localhost/play.pixels.xyz';

$doc = new DOMDocument();
@$doc->loadHTML($html);

$tags = $doc->getElementsByTagName('a');

foreach ($tags as $tag) {
    $href = $tag->getAttribute('href');
    $new_href = str_replace('http://localhost/', '', $href);
    $tag->setAttribute('href', $new_href);
}

echo $doc->saveHTML();

?>