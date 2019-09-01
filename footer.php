
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
                <div class="col-md-12 col-lg-6">
                    <i class="far fa-hand-scissors text-white"></i>
                    <p class="text-white-50">Hey what's up!!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt asperiores ex pariatur alias doloribus perspiciatis maxime inventore debitis voluptatibus! Ut facilis quidem sequi deserunt quos recusandae eius quo in earum atque quasi animi alias, magnam quisquam repellendus a nam cupiditate sapiente doloremque explicabo porro! Consequuntur ab repellat iste consectetur provident.</p>
                    <p class="text-white-50 float-right">&copy; <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?></p>
                </div>
                <div class="col-md-12 col-lg-6">
                    <h5 class="text-capitalize text-white">pages</h5>
                    <ul class="list-inline text-capitalize">
                        <a href="<?php echo site_url(''); ?>"><li class="list-inline-item pr-3 text-white-50">home</li></a>
                        <a href="<?php echo site_url( '/about' ); ?>"><li class="list-inline-item pr-3 text-white-50">about us</li></a>
                        <a href="<?php site_url( '/services' ); ?>"><li class="list-inline-item pr-3 text-white-50">services</li></a>
                        <a href="<?php site_url( '/contact' ); ?>"><li class="list-inline-item pr-3 text-white-50">contact</li></a>
                        <a href="<?php site_url( '/blog' ); ?>"><li class="list-inline-item pr-3 text-white-50">blog</li></a>
                    </ul>
                    <h5 class="text-capitalize text-white">social medias</h5>
                    <ul class="list-inline text-capitalize">
                        <a href="#">
                            <li class="list-inline-item pr-3 text-white-50">
                                <i class="fab fa-facebook"></i>
                            </li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item pr-3 text-white-50">
                                <i class="fab fa-twitter"></i>
                            </li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item pr-3 text-white-50">
                                <i class="fas fa-envelope"></i>
                            </li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item pr-3 text-white-50">
                                <i class="fab fa-youtube"></i>
                            </li>
                        </a>
                    </ul>
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