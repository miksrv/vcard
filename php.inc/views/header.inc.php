            <!-- Yandex.Metrika counter -->
            <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40285659 = new Ya.Metrika({ id:40285659, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40285659" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
            <header>
                <div class="content">
                    <div class="row">
                        <nav>
                            <ul class="main-menu">
                                <li class="mobile-menu"><a href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                                <li><a href="/#profile" title="<?= $language->menu->about; ?>"><?= $language->menu->about; ?></a></li>
                                <li><a href="/#skills" title="<?= $language->menu->skills; ?>"><?= $language->menu->skills; ?></a></li>
                                <li><a href="/#interests" title="<?= $language->menu->interests; ?>"><?= $language->menu->interests; ?></a></li>
                                <li><a href="/#contacts" title="<?= $language->menu->contacts; ?>"><?= $language->menu->contacts; ?></a></li>
                                <li<?= ($url == 'portfolio' ? ' class="current"' : NULL); ?>><a href="/portfolio"><?= $language->menu->portfolio; ?></a></li>
                            </ul>
                            <ul class="language-menu">
                                <?= $lang_menu; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>