            <section id="interests">
                <div class="animate-up content">
                    <h2 class="section-title"><i class="fa fa-flask"></i> <?= $language->interests->title; ?></h2>
                    <div class="box box-content">

                        <?php if(count($interests) > 0) { ?>

                            <?php foreach($interests as $index => $interest) { ?>

                        <div class="row">
                            <div class="col-xs-12 col-md-5 c <?= ($index % 2 == 0) ? 'left' : 'right'; ?>">
                                <img src="/images/interests/<?= $interest->image; ?>" alt="<?= $interest->title; ?>" />
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <h3><?= $interest->title; ?></h3>
                                <p><?= $interest->description; ?></p>
                            </div>
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