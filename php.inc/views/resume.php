<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
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
            <section id="profile">
                <div class="animate-up content">
                    <div class="box box-content">
                        <div class="row">
                            <div class="col-md-5 ">
                                <div class="profile-photo"><img src="/images/20160609M6ssYe1l7UaTka9z_Xq8bf_large.jpeg" alt="<?= $profile->full_name; ?>"></div>
                            </div>
                            <div class="col-md-7">
                                <div class="profile-info">
                                    <h1 class="profile-title"><span><?= $language->profile->hello; ?> - </span> <?= $profile->full_name; ?></h1>
                                    <h2 class="profile-position"><?= $profile->position; ?></h2>
                                </div>
                                <ul class="profile-list">
                                    <li class="clearfix">
                                        <strong class="title"><?= $language->profile->date_of_birth; ?></strong>
                                        <span class="cont"><?= $profile->age; ?></span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title"><?= $language->profile->location; ?></strong>
                                        <span class="cont"><?= $profile->location->country; ?></span>
                                    </li>
                                    <li class="clearfix">
                                        <strong class="title"><?= $language->profile->email; ?></strong>
                                        <span class="cont"><?= $contacts->email; ?></span>
                                    </li>
                                </ul>
                                <p><?= $profile->biography; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="social">
                <div class="animate-up content">
                    <div class="box box-content">
                        <div class="row">
                            <div class="col-xs-3">
                                <a class="ripple-centered" href="http://facebook.com/miksrv.ru" target="_blank"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="ripple-centered" href="http://vk.com/greenexpedition" target="_blank"><i class="fa fa-vk"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="ripple-centered" href="http://instagram.com/greenexp.ru/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a class="ripple-centered" href="https://github.com/miksrv" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include(VIEWPATH . 'sections/skills.inc.php'); ?>
            <?php include(VIEWPATH . 'sections/interests.inc.php'); ?>
            <?php include(VIEWPATH . 'sections/contacts.inc.php'); ?>
        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="/js/frontend.js"></script>
    <script type="text/javascript" src="/js/contactform.js"></script>
</html>