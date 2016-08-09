<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <title><?= $language->title; ?></title>
    </head>
    <body>
        <div class="wrapper">
            <?php include(VIEWPATH . 'header.inc.php'); ?>
            <section id="profile">
                <div class="animate-up content">
                    <div class="box box-content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="profile-photo"><img src="/images/20160609M6ssYe1l7UaTka9z_Xq8bf_large.jpeg" alt="<?= $profile->full_name; ?>"></div>
                            </div>
                            <div class="col-xs-7">
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
            <?php include(VIEWPATH . 'sections/skills.inc.php'); ?>
            <?php include(VIEWPATH . 'sections/interests.inc.php'); ?>
            <?php include(VIEWPATH . 'sections/contacts.inc.php'); ?>
        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="/js/autoresize.js"></script>
    <script type="text/javascript" src="/js/hash.js"></script>
    <script type="text/javascript" src="/js/contactform.js"></script>
</html>