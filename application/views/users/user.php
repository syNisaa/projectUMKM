<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($users as $u) { ?>
        <tr>
            <td><?php echo $u->username ?></td>
        </tr>
    <?php } ?>
</body>

</html>