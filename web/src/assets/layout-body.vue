<template>
  <div>
    <p>Body Part</p>
    <!-- <slot /> -->
    <select-box :name="boxname" />
    <!-- <select-box name="rating" v-show="false" />
    <select-box name="material" /> -->
  </div>
</template>

<script>
import select_box from './components/selectbox.vue';
export default {
  components: {
    'select-box' : select_box
  },
  data() {
    return {
      boxname : 'mainpart',
    }
  },
}
</script>
