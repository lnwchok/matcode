import Vue from 'vue'
import App from './App.vue'
import layout_head from './assets/components/layout-head.vue'
import layout_body from './assets/components/layout-body.vue'
import layout_footer from './assets/components/layout-footer.vue'
import about from './assets/components/about.vue'
// import select_box from './assets/components/selectbox.vue'

Vue.component('layout-head',layout_head);
Vue.component('layout-body',layout_body);
Vue.component('layout-footer',layout_footer);
Vue.component('about',about);


new Vue({
  el: '#app',
  render: h => h(App)
})
