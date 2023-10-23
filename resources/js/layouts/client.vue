<template>
    <div id="layout">
        <a-layout>
            <Header></Header>
            <Sidebar></Sidebar>
            <router-view></router-view>
            <Footer></Footer>
        </a-layout>
    </div>
</template>
<script>

import {defineComponent, ref} from 'vue';
import Header from "../components/admin/layouts/Header.vue";
import Sidebar from "../components/admin/layouts/Sidebar.vue";
import Footer from "../components/admin/layouts/Footer.vue";

export default defineComponent({
    components: {
        Header,
        Footer,
        Sidebar,
    }
});
</script>

<style scoped>
</style>
