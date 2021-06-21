<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Mijo Brands</title>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
</head>
<body>

    <div class="container">
        <header class="">Mijo Brands Theme</header>

        <main>
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                        <h1><?= the_title(); ?></h1>
                        <div><?= the_content(); ?></div>
                        <?php
                    }
                }
            ?>
        </main>

        <footer>
            © Félix Serna | 2021
        </footer>
    </div>
    
</body>
</html>