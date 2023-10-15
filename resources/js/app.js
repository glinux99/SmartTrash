// import './bootstrap';

import { createApp } from "vue/dist/vue.esm-bundler";
import Welcome from "./Welcome.vue";
import mapView from "./maps/mapView.vue";

const app = createApp({
    components: {
        Welcome,
        mapView,
    },
});

// app.component("Welcome", Welcome);
app.mount("#app");
