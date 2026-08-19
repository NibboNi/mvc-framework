<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Products</h1>

  <?php if (!empty($products)): ?>
    <ul>
      <?php foreach ($products as $product): ?>
        <li>
          <h2><?= htmlspecialchars($product["name"]); ?></h2>
          <p><?= htmlspecialchars($product["description"]); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>

</html>