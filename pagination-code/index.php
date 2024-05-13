<?php 
$jsonFile = file_get_contents('data.json');
$array = json_decode($jsonFile, true);

$page = isset($_GET['page']) ? $_GET['page'] : 0;
$limit = 5;  // limit 5 per page

$total = count($array);
$pages = $total / $limit;
$offset = ($page - 1) * $limit;
$data = array_splice($array, $offset, $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination code</title>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>age</th>
                <th>name</th>
                <th>gender</th>
                <th>company</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) :?>
                <tr>
                    <?php foreach ($value as $v) {?>
                       <td> <?php echo $v;?> </td>
                    <?php }?>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <div class="mt-2 pagination">
        <?php if ($page > 1) :?>
            <span>
                <a href="?page=<?php echo intval($page) - 1?>" class="arrow"><</a>
            </span>
        <?php else: ?>
            <span>
                <a href="" class="arrow disable"><</a>
            </span>
        <?php endif?>

        <?php for ($i = 1; $i < $pages + 1; $i++) :?>
            <span class="pagination-item">
                <a href="?page=<?php echo $i?>" ><?php echo $i?></a>
            </span>
        <?php endfor?>

        <?php if ($page < $pages):?>
            <span>
                <a href="?page=<?php echo intval($page) + 1?>" class="arrow">></a>
            </span>
        <?php else :?>
            <span>
                <a class="arrow disable" disabled>></a>
            </span>
        <?php endif ?>
    </div>
</body>
</html>