<template>
    <div id="layout">
            <Header></Header>
            <Sidebar></Sidebar>
            <router-view></router-view>
            <Footer></Footer>
    </div>
</template>
<script>

import {defineComponent, ref} from 'vue';
import Header from "../components/client/layouts/Header.vue";
import Sidebar from "../components/client/layouts/Sidebar.vue";
import Footer from "../components/client/layouts/Footer.vue";

export default defineComponent({
    components: {
        Header,
        Footer,
        Sidebar
    },
    data() {
        return {

        }
    },
    mounted() {
        // Function to append a script to the document's head
        const domain = window.location;
        const appendScript = (src) => {
            const script = document.createElement('script');
            if (src.startsWith('http') || src.startsWith('https')) {
                script.src = src;
            } else {
                script.src = domain + src;
            }
            document.head.appendChild(script);
        };

        // Call the appendScript function for each script URL
        const scriptUrls = [
            'assets/js/jquery.js',
            'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
            'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
            'assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
            'assets/js/dz.carousel.js',
            'assets/js/settings.js',
            'assets/js/custom.js',
            'assets/js/index.js',
        ];

        scriptUrls.forEach((url) => {
            appendScript(url);
        });
    }
});
</script>

<style scoped>
</style>
