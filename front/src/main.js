import Vue from 'vue'
import firebase from 'firebase'
import { Icon } from 'leaflet'
import VueSocialauth from 'vue-social-auth'
import VueAxios from 'vue-axios'

import axios from 'axios'
import store from './store'
import router from './router'
import App from './App.vue'

Vue.use(VueAxios, axios)
// import 'leaflet/dist/leaflet.css'

Vue.use(VueSocialauth, {
  providers: {
    google: {
      clientId: '324788647488-tcadv6ov0o139k3d8pm3enmj950d45k4.apps.googleusercontent.com',
      redirectUri: 'http://boilerplate-hackathon.damianjamka.com/api/social/google/callback',
    },
  },
})

window.onSignIn = function (googleUser) {
  const profile = googleUser.getBasicProfile()
  const authObject = googleUser.getAuthResponse()
  console.log(authObject)

  fetch('http://boilerplate-hackathon.damianjamka.com/api/social/google/callback', {
    method: 'POST',
    mode: 'cors',
    headers: {
      Accept: 'application/json',
      Authorization: `Bearer ${authObject.id_token}`,
    },
  }).then((res) => {
    console.log(res.json())
  })
}

delete Icon.Default.prototype._getIconUrl

Icon.Default.mergeOptions({
  iconRetinaUrl: require('@/assets/leaflet/marker-icon-2x.png'),
  iconUrl: require('@/assets/leaflet/marker-icon.png'),
  shadowUrl: require('@/assets/leaflet/marker-shadow.png'),
})

Vue.config.productionTip = false

const firebaseConfig = {
  apiKey: 'YOUR_API_KEY',
  authDomain: 'YOUR_PROJECT_ID.firebaseapp.com',
  databaseURL: 'https://YOUR_PROJECT_ID.firebaseio.com',
  projectId: 'YOUR_PROJECT_ID',
  storageBucket: 'YOUR_PROJECT_ID.appspot.com',
  messagingSenderId: 'YOUR_MESSAGING_SEND_ID',
}

firebase.initializeApp(firebaseConfig)

new Vue({
  store,
  router,
  render: (h) => h(App),
}).$mount('#app')


