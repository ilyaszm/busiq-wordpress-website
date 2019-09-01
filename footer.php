
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container p-3">
            <div class="titles pb-3">
                <h1 class="section-title text-center text-uppercase text-white">stay up to date to our news and offers</h1>
                <h3 class="section-subtitle text-center text-white-50">A good start is to subscribe to our weekly newsletter.</h3>
            </div>
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <form>
                        <div class="input-group">
                            <input
                                type        = "email"
                                placeholder = "Type your email"
                                class       = "form-control"
                            />
                            <div class="input-group-append">
                                <button class="btn light-button text-capitalize font-weight-bold" type="submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12 col-lg-8">
                    <i class="far fa-hand-scissors text-white"></i>
                    <p class="text-white-50">Hey what's up!!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt asperiores ex pariatur alias doloribus perspiciatis maxime inventore debitis voluptatibus! Ut facilis quidem sequi deserunt quos recusandae eius quo in earum atque quasi animi alias, magnam quisquam repellendus a nam cupiditate sapiente doloremque explicabo porro! Consequuntur ab repellat iste consectetur provident.</p>
                    <p class="text-white-50 float-right">&copy; <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?></p>
                </div>
                <div class="col-md-12 col-lg-4">
                    <h5 class="text-capitalize text-white">links</h5>
                    <nav class="footer-nav">
                        <div class="container">
                            <?php
                            wp_nav_menu ( array(
                                'menu'            => 'footer_menu',
                                'theme_location'  => 'footer_menu',
                                'container'       => 'div',
                                'container_id'    => 'bs4navbar',
                                'container_class' => '',
                                'menu_id'         => false,
                                'menu_class'      => 'footer-menu',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalker()
                            ));
                            ?>
                        </div>
                    </nav>
                    <h5 class="text-capitalize text-white">reach us</h5>
                    <nav class="social-icons-nav">
                        <div class="container">
                            <?php
                            wp_nav_menu ( array(
                                'menu'            => 'social_icons_menu',
                                'theme_location'  => 'social_icons_menu',
                                'container'       => 'div',
                                'container_id'    => 'bs4navbar',
                                'container_class' => '',
                                'menu_id'         => false,
                                'menu_class'      => 'social-icons-menu',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalker()
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="bottom-footer text-center bg-dark p-2 m-0">
        <p class="text-capitalize text-white-50 m-0">designed & coded by <a href="https://izemspot.netlify.com">IZEMSPOT</a></p>
    </div>

    <?php
    function bq_wow_init() { ?>

        <script type="text/javascript">
            new WOW().init()
        </script>

    <?php } ?>

<?php wp_footer(); ?>
</body>
</html>