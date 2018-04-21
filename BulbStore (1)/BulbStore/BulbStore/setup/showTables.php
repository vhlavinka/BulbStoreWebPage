<pre>
<?php

chdir(__DIR__);
require_once "../include/db.php";

echo "\n---- database = ", DBProps::which, "\n";

echo "\n---- users\n";
$users = R::find('user');
foreach($users as $user) {
  echo "$user->id: $user->name";
  if ($user->is_admin) {
    echo " (admin)";
  }
  echo "\n";
}

echo "\n---- types\n";
$types = R::find('type', 'order by id');
foreach($types as $type) {
  echo "$type->id: $type->name";
  echo "\n";
}

echo "\n---- images\n";
$images = R::find('image', 'order by id');
foreach($images as $image) {
  echo "$image->id: $image->name";
  echo "\n";
}

echo "\n---- bulbs\n";
$bulbs = R::find('bulb', 'order by id');
foreach($bulbs as $bulb) {
  echo "$bulb->id: $bulb->name, {$bulb->type->name}, $bulb->price";
  echo "\n";
}
