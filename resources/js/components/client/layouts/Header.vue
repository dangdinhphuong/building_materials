<template>
    <my-loader  v-if="preloader"></my-loader>
    <!-- Header -->
    <header class="header shadow header-fixed border-0">
        <div class="container">
            <div class="header-content">
                <div class="left-content">
                    <a href="javascript:void(0);" class="menu-toggler">
                        <i class="icon feather icon-menu"></i>
                    </a>
                </div>
                <div class="mid-content header-logo">
                    <a href="index.html">
                        <img class="logo app-logo" src="assets/images/logos/light/logo1.svg" alt="logo">
                        <!-- <img class="logo-dark" src="assets/images/svg/logo.svg" alt="logo">
                        <img class="logo-light" src="assets/images/svg/logo-white.svg" alt="logo"> -->
                    </a>
                </div>
                <div class="right-content">
                    <a href="search.html" class="search-icon">
                        <i class="icon feather icon-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->
</template>

<script>

import {defineComponent, ref} from "vue";

export default defineComponent({
    props: [],
    components: {},
    data() {
        return {
            preloader: true
        }
    },
    mounted() {
        setTimeout(()=>{
            this.preloader = false;
        },1000)

    }
})
</script>
