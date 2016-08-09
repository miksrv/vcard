            <section id="skills">
                <div class="animate-up content">
                    <h2 class="section-title"><i class="fa fa-gears"></i> <?= $language->skills->title; ?></h2>
                    <div class="box box-content">
                        <div class="row">

                            <?php if(count($skills) > 0) { ?>

                            <div class="col-md-6">
                                <ul>

                                    <?php foreach($skills as $index => $skill) { ?>

                                    <li>
                                        <div class="progress-bar animated">
                                            <div class="bar-data">
                                                <span class="bar-title"><?= $skill->title; ?></span>
                                            </div>
                                            <div class="bar-line">
                                                <span class="bar-fill" data-width="<?= $skill->level; ?>%" style="width: <?= $skill->level; ?>%;"></span>
                                            </div>
                                        </div>
                                    </li>

                                        <?php if(ceil(count($skills) / 2) == $index + 1) { ?> 

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
			
                                        <?php } ?>
		
                                    <?php } ?>
		
                                </ul>
                            </div>
	
                            <?php } else { ?>
	
                            <div class="alert alert-warning">
                                <?= $language->no_data; ?>
                            </div>
	
                            <?php } ?>
	
                        </div>
                    </div>
                </div>
            </section>