
<!-- Footer -->
<footer class="footer">
    <div class="tf-container">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-3">
                <div class="widget widget-infor">
                    <div class="logo">
                        <img id="logo_footer" src="/assets/images/logo/logo_dark.png" alt="Image">
                    </div>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                    <ul class="social-item">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-fl-tik-tok-2"></i></a></li>
                        <li><a href="#"><i class="icon-fl-vt"></i></a></li>
                    </ul>
                    <p class="copy-right">Copyright © 2022 Themesflat. All Rights Reserved.

                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="widget widget-menu">
                    <div class="menu menu-1">
                        <h6 class="widget-title">Maketplace</h6>
                        <ul >
                            <li><a href="#">Explore</a></li>
                            <li><a href="#">Item Detail</a></li>
                            <li><a href="#">Live Auditon</a></li>
                        </ul>
                    </div>
                    <div class="menu menu-2">
                        <h6 class="widget-title">Stats</h6>
                        <ul >
                            <li><a href="#">Ranking</a></li>
                            <li><a href="#">Ativity</a></li>
                            <li><a href="#">Auther</a></li>
                        </ul>
                    </div>
                    <div class="menu menu-3">
                        <h6 class="widget-title">Resoure</h6>
                        <ul >
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Help and Center</a></li>
                            <li><a href="#">FaQs</a></li>
                        </ul>
                    </div>
                    <div class="menu menu-4">
                        <h6 class="widget-title">My account</h6>
                        <ul >
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">My wallet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="widget widget-subcribe">
                    <h6 class="widget-title">Subscribe Us</h6>
                    <p class="content">Signup for our newsletter to get the latest news in your inbox.</p>
                    <form action="#" id="subscribe-form">
                        <input type="email" placeholder="Info@yourgmail.com" required="" id="subscribe-email">
                        <button class="tf-button" type="submit" id="subscribe-button"><i class="icon-fl-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom -->
</div>
<!-- /#page -->
</div>
<!-- /#wrapper -->

<?php include_once(rootDir.'partials/users/footer/parts/popup_bid.php');  ?>

<a id="scroll-top"></a>

<!-- Javascript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the target element
        var targetElement = document.getElementById("targetElement");

        // Set interval to remove the 'is-fixed' class every 5 seconds
        if (targetElement) {
            setInterval(function() {
                targetElement.querySelector('.dashboard-user').classList.remove("is-fixed");
            }, 5); // 5000 milliseconds = 5 seconds
        }
    });
</script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.easing.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/swiper.js"></script>
<script src="/assets/js/count-down.js"></script>
<script src="/assets/js/jquery.isotope.min.js"></script>
<script src="/assets/js/switchmode.js"></script>
<script src="/assets/js/plugin.js"></script>
<script src="/assets/js/shortcodes.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/front_footer_js.js"></script>
<script src="/assets/js/user_footer_js.js"></script>

</body>

</html>