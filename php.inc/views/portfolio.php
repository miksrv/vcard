<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
        <link rel="stylesheet" type="text/css" href="/css/imagelightbox.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="/images/icons/apple-touch-icon-167x167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon-180x180.png">
        <link rel="icon" sizes="192x192" href="images/icons/touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <meta name="msapplication-config" content="/images/icons/ieconfig.xml">
        <title><?= $language->title; ?></title>
    </head>
    <body>
        <div class="wrapper">
            <?php include(VIEWPATH . 'header.inc.php'); ?>
            <section id="works">
                <div class="content shake">
                    <h2 class="section-title"><i class="fa fa-briefcase"></i> <?= $language->portfolio->title; ?></h2>
                    <div class="row">

                        <?php if(count($portfolio) > 0) { ?>

                            <?php foreach($portfolio as $index => $project) { ?>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                                <figure class="effect">
                                        <img src="/images/portfolio/<?= $project->image; ?>" alt="<?= $project->title; ?>" />

                                        <figcaption>
                                                <h3><?= $project->title; ?></h3>
                                                <p><?= $project->description; ?></p>
                                                <a <?= (isset($project->link) ? 'href="' . $project->link . '" target="_blank"' : 'href="/images/portfolio/' . $project->image . '" data-imagelightbox="work"'); ?>>Подробнее</a>
                                        </figcaption> 
                                </figure>
                        </div>

                            <?php } ?>

                        <?php } else { ?>

                        <div class="alert alert-warning">
                            <?= $language->no_data; ?>
                        </div>

                        <?php } ?>

                    </div>
                </div>
            </section>
        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="/js/frontend.js"></script>
    <script type="text/javascript" src="/js/imagelightbox.min.js"></script>
</html>