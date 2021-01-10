<section class="hero is-link is-medium">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                ANGGOTA KAMI
            </h1>
            <h2 class="subtitle">
                Anggota dari HIMATIKA
            </h2>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="columns">
                <div class="column is-10">
                    <h4 class="title">Angkatan :</h4>
                </div>
                <div class="column is-2">
                    <div class="field">
                        <div class="control has-icons-left">
                            <?php
                            $TahunSekarang = date('Y');
                            $BatasTahun = $TahunSekarang - 10;
                            $Tahun = range($TahunSekarang, $BatasTahun);
                            ?>
                            <div class="select">
                                <select>
                                    <option>Pilih tahun</option>
                                    <?php foreach ($Tahun as $Thn) : ?>
                                        <option value="<?= $Thn ?>" <?= ($Thn == $TahunSekarang) ? 'selected' : '' ?>><?= $Thn ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="icon is-small is-left">
                                <ion-icon name="calendar"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns is-multiline">
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Ketua Himatika</span>
                        <h4 class="team-name">Tatang Su Tatang</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/girl.png" alt="Team Member Picture">
                        </div><span class="team-position">Wakil Ketua Himatika</span>
                        <h4 class="team-name">Ita Nuri</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Sekretaris Himatika</span>
                        <h4 class="team-name">Didit Suderajat</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Ketua Himatika</span>
                        <h4 class="team-name">Tatang Su Tatang</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/girl.png" alt="Team Member Picture">
                        </div><span class="team-position">Wakil Ketua Himatika</span>
                        <h4 class="team-name">Ita Nuri</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Sekretaris Himatika</span>
                        <h4 class="team-name">Didit Suderajat</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Ketua Himatika</span>
                        <h4 class="team-name">Tatang Su Tatang</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/girl.png" alt="Team Member Picture">
                        </div><span class="team-position">Wakil Ketua Himatika</span>
                        <h4 class="team-name">Ita Nuri</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-card-style-3">
                        <div class="team-thumb"><img src="asset/img/anggota/man.png" alt="Team Member Picture">
                        </div><span class="team-position">Sekretaris Himatika</span>
                        <h4 class="team-name">Didit Suderajat</h4><a class="team-contact-link" href="tel:+6212345678">
                            <ion-icon name="call"></ion-icon></i>&nbsp;+6212345678
                        </a><a class="team-contact-link" href="mailto:info@example.com">
                            <ion-icon name="mail"></ion-icon>&nbsp;info@example.com
                        </a>
                        <div class="team-social-bar-wrap">
                            <div class="team-social-bar"><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-1 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-1 sb-skype" href="#"><i class="socicon-skype"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>