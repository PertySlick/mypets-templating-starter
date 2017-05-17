<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
    <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User logged in as <?= $username ?> using <?= $password ?></p>
      <br />
      <!-- Working With Expressions -->
      <h3>Temperature</h3>
      <p>Farenheit: <?= $temp ?> degrees</p>
      <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
      <p>I like the color <?= $color ?>!</p>
      <p>The circumference of a circle with radius <?= $radius ?> is <?= 2 * 3.14 * $radius ?>.</p>
      <!-- Working With Loops -->
      <h3>Bookmarks</h3>
      <p>My first bookmark is <?= $bookmarks[0] ?></p>
      <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
          <li><a href="<?= trim($bookmark) ?>"><?= trim(str_replace('http://','',$bookmark)) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <!-- Associative Array -->
      <h3>Addresses</h3>
      <p><?= $addresses['primary'] ?></p>
      <p><?= $addresses['secondary'] ?></p>
      <?php foreach (($addresses?:[]) as $type=>$address): ?>
        <p><?= $type ?> - <?= $address ?></p>
      <?php endforeach; ?>
      <!-- Checkboxes -->
      <h3>Dessert Options</h3>
      <?php foreach (($desserts?:[]) as $flavor=>$item): ?>
        <input type="checkbox" value="<?= $key ?>" /><?= $item ?><br />
      <?php endforeach; ?>
 
        
    </body>
</html>