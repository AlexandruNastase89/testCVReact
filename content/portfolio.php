<?php
$current_page = "Portfolio";
$background_image = "portfolio_inverted.jpg";
include("../partials/head.php");
include("../partials/navbar.php");
?>

<div class="my-content-overlay">
    <h1 class="uk-text-center">Portfolio</h1>
    <div class="uk-flex">
        <div class="uk-width-1-2 uk-margin-remove" uk-grid uk-lightbox="animation: slide">
            <div class="uk-padding-small">
                <a class="uk-inline" href="/assets/img/dconsult/preview.jpg">
                    <img src="/assets/img/dconsult/preview.jpg" width="1800" height="1200" alt="">
                </a>
            </div>
            <div class="uk-hidden">
                <a class="uk-inline" href="/assets/img/dconsult/shot1.png">
                    <img src="/assets/img/dconsult/shot1.png" width="1800" height="1200" alt="">
                </a>
            </div>
            <div class="uk-hidden">
                <a class="uk-inline" href="/assets/img/dconsult/shot2.png">
                    <img src="/assets/img/dconsult/shot2.png" width="1800" height="1200" alt="">
                </a>
            </div>
        </div>

        <div class="uk-width-1-2 uk-margin-remove" uk-grid uk-lightbox="animation: slide">
            <div class="uk-padding-small">
                <a class="uk-inline" href="/assets/img/grauberger/preview.jpg">
                    <img src="/assets/img/grauberger/preview.jpg" width="1800" height="1200" alt="">
                </a>
            </div>
            <div class="uk-hidden">
                <a class="uk-inline" href="/assets/img/grauberger/shot1.png">
                    <img src="/assets/img/grauberger/shot1.png" width="1800" height="1200" alt="">
                </a>
            </div>
            <div class="uk-hidden">
                <a class="uk-inline" href="/assets/img/grauberger/shot2.png">
                    <img src="/assets/img/grauberger/shot2.png" width="1800" height="1200" alt="">
                </a>
            </div>
            <div class="uk-hidden">
                <a class="uk-inline" href="/assets/img/grauberger/shot3.png">
                    <img src="/assets/img/grauberger/shot3.png" width="1800" height="1200" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include("../partials/sidebar.php");
include("../partials/footer.php");
?>