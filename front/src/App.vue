<template>
  <div id="app">
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <router-view/>

  </div>
</template>

<script>




export default {
  data() {
    return {};
  },
  methods: {

  },
  mounted() {
    let api = gapi.auth2.init()
    // console.log()
    //  var auth2 = gapi.signIn.go();
     console.log(auth2);

  }
};
</script>


<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
body {
  margin: 0;
  padding: 0;
}
</style>
