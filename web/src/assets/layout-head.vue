<template>

  <section class="hero is-primary">
    <!-- <div class="hero-header">
      <header class="nav">
        <div class="container">
          <div class="nav-right nav-menu">
            <slot name="nav-menu"></slot>
          </div>
        </div>
      </header>
    </div> -->

    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          {{ title }}
        </h1>
        <h3 class="subtitle">
          {{ subtitle }}
        </h3>
      </div>
    </div>

    <div class="hero-footer">
    </div>
  </section>
</template>

<script>
// import 'nav-menu' from './assets/components/layout-head-menu.vue';
export default {
  props : {
    title : {required : true},
    subtitle : {required : true}
  },
  // mounted() {
  //   'nav-menu',
  // }

  // data() {
  //   return {'nav-menu' : [] }
  // }

}
</script>

<style>
</style>
