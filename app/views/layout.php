<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->load_head() ?>
    <title>Document</title>
</head>

<body>
    <?= $this->load_sidebar() ?>
    <div class="content">
        <?= $this->load_topbar() ?>
        <div class="container">
            <?= $this->content($view_data) ?>
        </div>
    </div>
</body>

</html>