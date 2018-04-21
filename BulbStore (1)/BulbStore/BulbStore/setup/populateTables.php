<pre>
<?php

chdir(__DIR__);
require_once "../include/db.php";

echo "\n---- database = ", DBProps::which, "\n";

R::begin();  // start tranaction

//==================================================
echo "\n---- users\n";

// name, email, password, for simplicity password = name
$user_data = [
    ["john", "arachnid@oracle.com", "john"],
    ["kirsten", "buffalo@go.com", "kirsten"],
    ["bill", "digger@gmail.com", "bill"],
    ["mary", "elephant@wcupa.edu", "mary"],
    ["joan", "kangaroo@upenn.edu", "joan"],
    ["alice", "feline@yahoo.com", "alice"],
    ["carla", "badger@esu.edu", "carla"],
    ["dave", "warthog@temple.edu", "dave"],
];

foreach ($user_data as $data) {
  list($username, $email, $password) = $data;
  $user = R::dispense('user');
  $user->name = $username;
  $user->email = $email;
  $user->password = hash('sha256', $password);
  $user->is_admin = false;
  try {
    $id = R::store($user);
    echo "$id: $username\n";
  }
  catch (Exception $ex) {
    echo $ex->getMessage(), "\n";
  }
}

//==================================================
echo "\n---- admins\n";
foreach (['dave', 'carla'] as $name) {
  $user = R::findOne('user', 'name = ?', [$name]);
  $user->is_admin = true;
  R::store($user);
  echo "admin: $name\n";
}

//==================================================
echo "\n---- types\n\n";

foreach ([
'Primrose',
 'Dahlia',
 'Begonia',
 'Ground Cover',
 'Daisy',
/*
Butterfly Bush
Coneflower
Daylily
Geranium
Hibiscus
Hummingbird Mint
Iris
 */
]
as $name) {
  $type = R::dispense('type');
  $type->name = $name;
  $id = R::store($type);
  echo "$id: $name\n";
}

//==================================================
echo "\n---- images\n\n";

$images_dir = __DIR__ . "/../img/bulbs/";

// get all files in $images_dir minus "." and ".."
$imageFiles = array_diff( scandir($images_dir), [".", ".."] );

foreach($imageFiles as $file) {
  $image = R::dispense('image');
  $image->name = $file;
  $id = R::store($image);
  echo "$id: $file\n";
}

//==================================================
echo "\n---- bulbs\n\n";

require_once __DIR__ . "/bulb_data.php";

foreach ($bulb_data as $name => $data) {
  echo "===> $name\n";
  if (!isset($data['type'])) {
    echo "omitting $name\n";
    continue;
  }
  $type_rec = R::findOne('type', 'name = ?', [$data['type']]);
  if ($type_rec === null) {
    echo "no such type name: '{$data['type']}'\n";
    continue;
  }
  $image_name = preg_replace("/ /", "", $name) . ".jpg";
  $image_rec = R::findOne('image', 'name = ?', [$image_name]);
  if ($image_rec === null) {
    echo "no such image name: '$image_name'\n";
  } 
  $bulb = R::dispense('bulb');
  $bulb->name = $name;
  $bulb->type_id = $type_rec->id;
  if ($image_rec !== null) {
    $bulb->image_id = $image_rec->id;
  } 
  $bulb->price = $data['price'];
  $bulb->in_stock = $data['in_stock'];
  $bulb->description = $data['description'];
  $id = R::store($bulb);
  echo "OK\n";
  $bulbs[$id] = $bulb;
}

//==================================================
echo "\n---- bags\n";

define("SECONDS_PER_DAY", 3600 * 24);

function randTimeNdaysPast($days) {
  $timestamp = time() - $days * SECONDS_PER_DAY + rand(0, SECONDS_PER_DAY);
  return date("Y-m-d H:i:s", $timestamp);
}

function makeBag($user, $ndays, $bulbQuant) {
  $bag = R::dispense('bag');
  $bag->user_id = $user->id;
  $bag->made_on = randTimeNdaysPast($ndays);
  echo "\nby $user->name on $bag->made_on\n";
  foreach ($bulbQuant as $arr) {
    list($bulb, $amount) = $arr;
    echo " #$bulb->id: $bulb->name ($amount)\n";
    $bag->link('item', ['amount' => $amount, 'price' => $bulb->price])
        ->bulb = $bulb;
  }
  R::store($bag);
}

$alice = R::findOne('user', 'name=?', ["alice"]);
$john = R::findOne('user', 'name=?', ["john"]);
$bill = R::findOne('user', 'name=?', ["bill"]);

$ndays = 7;

makeBag($alice, $ndays--, [
    [$bulbs[1], 22],
    [$bulbs[5], 33],
]);

makeBag($alice, $ndays--, [
    [$bulbs[12], 43],
    [$bulbs[8], 41],
]);

makeBag($bill, $ndays--, [
    [$bulbs[2], 15],
    [$bulbs[6], 52],
]);

makeBag($alice, $ndays--, [
    [$bulbs[3], 46],
    [$bulbs[11], 71],
]);

makeBag($bill, $ndays--, [
    [$bulbs[1], 73],
    [$bulbs[3], 37],
    [$bulbs[5], 51],
    [$bulbs[6], 21],
]);

R::commit();  // commit transaction

  