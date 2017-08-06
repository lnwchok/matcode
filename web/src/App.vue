

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
      <!-- <component :is="currentView"></component> -->
      <div :is="currentView">
        <!-- <select-box name="mainpart"></select-box>
        <select-box name="rating"></select-box> -->
      </div>
    </div>

  </section>

  <layout-footer></layout-footer>
</div>

</template>

<script>



export default {
  data() {
    return {
      currentView: 'layout-body',
    }
  },

}

</script>
