<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite + React</title>
    <?php
        $assetsDir = '/var/www/html/app/assets';
        $assetsUrl = '/assets/';

        $assetFiles = scandir($assetsDir);
        foreach ($assetFiles as $assetFile) {
            if ( strpos($assetFile, '.js') == strlen($assetFile) - 3 ) {
                echo '<script a="b" type="module" crossorigin src="'.$assetsUrl.$assetFile.'"></script>'.PHP_EOL;
            }
            if ( strpos($assetFile, '.css') == strlen($assetFile) - 4 ) {
                echo '<link rel="stylesheet" crossorigin href="'.$assetsUrl.$assetFile.'">'.PHP_EOL;
            }
        }
    ?>
</head>
<body>
<H1>Before root</H1>
<div id="root"></div>
</body>
</html>

