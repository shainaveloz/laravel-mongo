<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
$html = file_get_html('http://www.recode.net/');

foreach ($html -> find('h2') as $element)
echo $element->src . '<br>';

// Find all article blocks
foreach($html->find('div.article') as $article) {
$item['title']     = $article->find('div.title', 0)->plaintext;
$item['intro']    = $article->find('div.intro', 0)->plaintext;
$item['details'] = $article->find('div.details', 0)->plaintext;
$articles[] = $item;
}

print_r($articles);
}
