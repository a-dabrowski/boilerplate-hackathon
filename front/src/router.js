import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";
import Login from "./views/Login.vue";
import Scanner from "./views/Scanner.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/scanner",
      name: "scanner",
      component: Scanner
    },
    {
      path: "/login",
      name: "login",
      component: Login
    }
  ]
});
