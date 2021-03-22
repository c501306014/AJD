<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- read ress.css -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css">
    <!-- read fawe -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Google icon font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>株式会社AJD</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <!-- logo -->
        <div id="header-logo">
            <?php the_custom_logo();
            if (!has_custom_logo()) {
                bloginfo('name');
            } ?>
        </div><!-- /logo -->


        <nav>
            <!-- links -->
            <?php if (is_active_sidebar('header-widgets')) : ?>
                <ul>
                    <?php dynamic_sidebar('header-widgets'); ?>
                </ul>
            <?php else : ?>
                <h1>not found sidebar</h1>
            <?php endif; ?>


        </nav>
    </header>