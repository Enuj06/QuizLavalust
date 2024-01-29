<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Side</title>
</head>
<body>
    <h2>User form</h2>

    <?php foreach ($data as $info) : ?>
    <form>
        <h2>quiz</h2>           
        <p><?= $info['quiz_title']; ?></p>
    <?php endforeach; ?>
</body>
</html>