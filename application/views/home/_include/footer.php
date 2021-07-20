<footer class="site__footer">
    <div class="site-footer">
        <div class="container">

            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="site-footer__widget footer-contacts text-justify pl-2">
                            <h5 class="footer-contacts__title">Contact</h5>

                            <?php $iden = $this->db->get_where('tb_web_identitas', "id_identitas='1'")->row_array(); ?>
                            <?php $id = $iden['kota_id'];
                            $kota = $this->db->get_where('tb_kota', "kota_id='$id'")->row_array(); ?>

                            <ul class="footer-contacts__contacts">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td style="width: 20px"><i class="footer-contacts__icon fas fa-globe-americas"></i></td>
                                        <td><?= $iden['alamat'] ?> <br>
                                            <?= $kota['nama_kota'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="footer-contacts__icon far fa-envelope"></td>
                                        <td> <?= $iden['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="footer-contacts__icon fas fa-mobile-alt"></i></td>
                                        <td> <?= $iden['no_telp'] ?></td>
                                    </tr>
                                </table>
                            </ul>

                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="site-footer__widget footer-links text-left pl-2">
                            <h5 class="footer-links__title">About</h5>
                            <ul class="footer-links__list">
                                <?php
                                $menu = $this->model_menu->menu_bawah();
                                foreach ($menu->result_array() as $mb) {
                                ?>

                                    <!--<li class="footer-links__item">
                                        <a href="<?= base_url($mb['link']) ?>" class="footer-links__link">
                                            <?= $mb['nama_menu']; ?>
                                        </a>
                                    </li>

                                <?php } ?>

                            </ul> -->
                                    <p style="text-align: justify;">Apakah Kamu Suka Jajan?
                                        <br>Kami hadir untuk Anda. Berawal dari offline, sekarang toko kami juga
                                        melayani via online sehingga layanan ini menjadi solusi untuk masalahmu. Anda tidak perlu keluar rumah untuk dapat mencicipi lezatnya snack kami.
                                        Setiap ada masalah, pasti ada solusi. Karena ada Toko Izah Delivery #JikaAndaMager
                                    </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Our Team</h5>
                            <div class="footer-newsletter__text">Riska Virliana M.H<br /> Anisha Rosela<br /> Aulia Dinin Putri A.<br /> Safira Khoirunnisa</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-footer__bottom">
                <div class="site-footer__copyright">&copy; <?= date('Y') ?> <a href="https://tokoizah.com/" target="_BLANK">TokoIzah</a></div>
            </div>



            <div class="totop">
                <div class="totop__body">
                    <div class="totop__start"></div>
                    <div class="totop__container container"></div>
                    <div class="totop__end"><button type="button" class="totop__button"><svg width="13px" height="8px">
                                <use xlink:href="<?= base_url('assets/template/tema/') ?>images/sprite.svg#arrow-rounded-up-13x8"></use>
                            </svg></button></div>
                </div>
            </div>
        </div>
</footer>