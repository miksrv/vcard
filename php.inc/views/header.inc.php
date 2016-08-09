            <header>
                <div class="content">
                    <div class="row">
                        <nav>
                            <ul>
                                <li><a href="/#profile"><?= $language->menu->about; ?></a></li>
                                <li><a href="/#skills"><?= $language->menu->skills; ?></a></li>
                                <li><a href="/#interests"><?= $language->menu->interests; ?></a></li>
                                <li><a href="/#contacts"><?= $language->menu->contacts; ?></a></li>
                                <li<?= ($url == 'portfolio' ? ' class="current"' : NULL); ?>><a href="/portfolio"><?= $language->menu->portfolio; ?></a></li>
                                <?= $lang_menu; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>