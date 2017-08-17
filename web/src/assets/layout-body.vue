<template>
  <div>
    <!-- <p>Body Part :: {{ result.mainpart }}</p> -->
    <select-box :name="boxs[0]" @boxChanged="boxsEffect($event, boxs[0])"/>
    <select-box v-if="boxs.length > 1" :name="boxs[1]" @boxChanged="boxsEffect($event, boxs[0])"/>

  </div>
</template>

<script>
import select_box from './components/select-box.vue';
import appBrain from './bin/brain';

// let createbox = function(createElement, boxname) {
//   return createElement('select-box',{
//     props: { name : boxname },
//     on: { boxChanged : boxsEffect($event)}
//   });
// };

export default {
  components: {
    'select-box' : select_box
  },

  data() {
    return {
      boxs : ['mainpart','rating'],
      result : {},
      calcase : '',
    }
  },

  methods: {
    boxsEffect(value, name) {
      this.$set(this.result, name, value);
      appBrain.updateBoxs(value);
    }
  },
//   render: function(createElement) {
//     return createElement('div',[
//       createElement('p',"Body Part :: " + this.result),
//
//       [
//         createbox(createElement, this.boxs[0]),
//         createbox(createElement, this.boxs[1])
//       ]
//
//       // this.boxs.map(function(box){
//       //   return createbox(createElement,box)
//       // })
// ]
//     );
//   },
}
</script>
