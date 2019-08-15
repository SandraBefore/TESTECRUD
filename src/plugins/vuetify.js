import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
require('./bootstrap')

Vue.use(Vuetify)

export default new Vuetify({
  icons: {
    iconfont: 'mdi'
  }
})
