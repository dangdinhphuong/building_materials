import '@/bootstrap';
import App from '@/App.vue';
import {createApp} from "vue";
import {createPinia} from 'pinia';
import router from "@/router/index.js";

import {
    Drawer,
    Button,
    List,
    Menu,
    message,
    Card,
    Table,
    Select,
    Input,
    Layout,
    Form,
    Alert,
    Dropdown
} from 'ant-design-vue';

import 'ant-design-vue/dist/antd.css';
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';


import axios from "axios";

window.axios = axios;

const pinia = createPinia();

const app = createApp(App);

//Antd
// app.use(Button);
// app.use(Drawer);
// app.use(List);
// app.use(Menu);
// app.use(Card);
// app.use(Table);
// app.use(Select);
// app.use(Input);
// app.use(Layout);
// app.use(Form);
// app.use(Alert);
// app.use(Dropdown);

app.use(router);
app.use(pinia);
// app.use(languages);

app.mount("#app");

