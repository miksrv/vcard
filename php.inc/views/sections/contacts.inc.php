            <section id="contacts">
                <div class="animate-up content">
                    <h2 class="section-title"><i class="fa fa-envelope"></i> <?= $language->contacts->title; ?></h2>
                    <div class="box box-content" id="email-container">
                        <div id="email-overlay" class="overlay"></div>
                        <form id="contact-form" method="post" action="/">
                            <div class="row">
                                <div class="input-field col col-xs-12 col-md-6">
                                    <input class="contact-name" type="text" id="name" name="name">
                                    <span class="line"></span>
                                    <label><?= $language->contacts->name; ?> *</label>
                                </div>
                                <div class="input-field col col-xs-12 col-md-6">
                                    <input class="contact-name" type="text" id="email" name="email">
                                    <span class="line"></span>
                                    <label><?= $language->contacts->email; ?> *</label>
                                </div>
                                <div class="input-field col col-xs-12">
                                    <textarea style="height: 3em;" id="message" name="message"></textarea>
                                    <span class="line"></span>
                                    <label><?= $language->contacts->message; ?> *</label>
                                </div>
                            </div>
                            <p class="mt c">
                                <a href="javascript:void(0)" class="button" data-role="send-message"><?= $language->contacts->send; ?></a>
                            </p>
                        </form>
                    </div>
                </div>
            </section>