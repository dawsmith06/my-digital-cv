import VueRouter from 'vue-router';
window.Vue.use(VueRouter);

// let office = JSON.parse(document.getElementById("welcome-container").getAttribute("v-init:office")) || {};
// Vue.prototype.$office = office;

/** Pages */
const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'cv',
            component: require("./components/cv.vue").default,
        },
    ],
});

new Vue({
    el: '#cv-container',
    router,

    data() {
        return {
            ready: false,
            // options    : [
            //     {name : "Venta",                 route : "/",                 icon  : "fas fa-plus-circle"},
            //     {name : "Anular",                route : "/cancel",           icon  : "fas fa-thumbs-down"},
            //     {name : "Cargar",                route : "/load",             icon  : "fas fa-search-dollar"},
            // ],   
        }
    },

    methods: {
        onLeave() {
            this.$root.$emit(`${this.$route.name}-view-leave`);
        },

        onEnter() {
            this.$root.$emit(`${this.$route.name}-view-enter`);
        },
    },

    mounted() {
        this.ready = true;
        this.onEnter();
    }
});
