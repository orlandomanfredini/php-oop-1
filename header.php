<?php

include_once __DIR__ . '/Db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>HEADER</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">LOGO DELLA WEB APP</div>
                <ul class="d-flex col-7 justify-content-end list-unstyled gap-4 m-0 p-0">
                    <?php foreach($links as $link){ ?>
                        <li><a :href="<?php echo $link->linkUrl()?>"; ><?php echo $link->linkTitle(); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header>
</body>
</html>