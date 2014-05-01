<?php
//views/news_view.php

  print '<h1>' . $xml->channel->title . '</h1>';
  echo '<p>' . $xml->channel->description . '</p>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }
  
?>

