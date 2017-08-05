

<template>

<div>
  <layout-head title="KO-DI" subtitle="Piping material coding system">
    <!-- <nav-menu name="Home" @click="currentView='layout-body'"></nav-menu>
    <nav-menu name="Documentation"</nav-menu>
    <nav-menu name="About Us" @click="currentView='about'"></nav-menu> -->
    <!-- <a slot="nav-menu" class="nav-item" @click="currentView='layout-body'">Home</a>
    <a slot="nav-menu" class="nav-item" >Documentation</a>
    <a slot="nav-menu" class="nav-item" @click="currentView='about'">About Us</a> -->
  </layout-head>

  <section class="section">
    <div class="container">
      <component :is="currentView"></component>
    </div>
  </section>

  <layout-footer></layout-footer>
</div>

</template>

<script>

import layout_head from './assets/components/layout-head.vue';
import layout_body from './assets/components/layout-body.vue';
import layout_footer from './assets/components/layout-footer.vue';
import about from './assets/components/about.vue';

export default {
  name: 'app',
  components: {
    'layout-head': layout_head,
    'layout-body': layout_body,
    'layout-footer': layout_footer,
    about,
  },
  data() {
    return {
      currentView: 'layout-body',
    }
  },
  methods : {


  }

}

</script>
