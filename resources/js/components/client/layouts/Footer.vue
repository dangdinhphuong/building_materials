<template>
    <!-- Menubar -->
    <div class="menubar-area footer-fixed rounded-0">
        <div class="toolbar-inner menubar-nav">
            <a href="index.html" class="nav-link active">
                <i class="icon feather icon-home"></i>
                <span>Home</span>
            </a>
            <a href="category.html" class="nav-link">
                <i class="icon feather icon-grid"></i>
                <span>Categories</span>
            </a>
            <a href="cart.html" class="nav-link cart-handle">
                <div class="hexad-menu">
                    <img src="assets/images/menu-shape-dark.svg" class="shape-dark" alt="">
                    <img src="assets/images/menu-shape-light.svg" class="shape-light" alt="">
                    <i class="icon feather icon-shopping-bag"></i>
                </div>
            </a>
            <a href="wishlist.html" class="nav-link">
                <i class="icon feather icon-heart"></i>
                <span>Wishlist</span>
            </a>
            <a href="profile.html" class="nav-link">
                <i class="icon feather icon-user"></i>
                <span>Profile</span>
            </a>
        </div>
    </div>
    <!-- Menubar -->
    <!-- PWA Offcanvas -->
<!--    <div class="offcanvas offcanvas-bottom pwa-offcanvas">-->
<!--        <div class="container">-->
<!--            <div class="offcanvas-body small">-->
<!--                <img class="logo dark" src="assets/images/logo.png" alt="">-->
<!--                <img class="logo light" src="assets/images/logo-white.png" alt="">-->
<!--                <h5 class="title">W3Cart - Ecommerce Mobile Shop on Your Home Screen</h5>-->
<!--                <p class="pwa-text">Install "W3Cart Ecommerce Mobile App" template to your home screen for easy access, just like any other app</p>-->
<!--                <button type="button" class="btn btn-sm btn-primary pwa-btn">Add to Home Screen</button>-->
<!--                <button type="button" class="btn btn-sm pwa-close btn-secondary ms-2 text-white">Maybe later</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="offcanvas-backdrop pwa-backdrop"></div>-->
    <!-- PWA Offcanvas End -->
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
    mounted() {
    console.log('footer');
}
})
</script>
