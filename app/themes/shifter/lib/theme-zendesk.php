<?php
namespace Shifter\Theme\ZendeskAPI;

function get_zendesk_articles(
  $cache_time = '-1 hour'
) {

  // $url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token.'&count='.$count;
  $url = 'https://getshifter.zendesk.com/api/v2/help_center/sections/206966648/articles.json';

  // sections/{id}/articles.json
  $cache_directory = './app/cache/'; // path to cache folder, name should end in slash, such as './app/cache/'
  $cache_file = $cache_directory.sha1($url).'.json';


  if (file_exists($cache_file) && filemtime($cache_file) > strtotime($cache_time)) {
    // If a cache file exists, and it is newer than 1 hour, use it
    $jsonData = json_decode(file_get_contents($cache_file));
  } else {
    // If file does not exist, create directory and file, or update file with newer json data
    $jsonData = json_decode( file_get_contents($url) );
    $jsonEncode = json_encode($jsonData);

    if( !file_exists($cache_file) ) {
      $method = 'a';
      mkdir($cache_directory, 0755, true);
    } else {
      $method = 'w';
    }

    $fh = fopen($cache_file,$method);
    fwrite($fh, $jsonEncode."\n");
  }

  foreach ($jsonData->articles as $key => $value) { ?>
    <article class="accordion__item _white">
      <button data-target="#article-<?= $value->id ?>" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
        <?= $value->title ?>
        <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
      </button>
      <div id="article-<?= $value->id ?>" class="accordion__content tucked tuck-content">
        <?= $value->body ?>
      </div>
    </article>

    <?php if ($key == 10) { break; } ?>
  <?php } ?>
<?php } ?>
