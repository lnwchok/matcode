<template>
  <div>
    <layout-head>{{ project.name }}</layout-head>
    <layout-body></layout-body>
    <layout-footer></layout-footer>
  </div>
</template>

<script>
import layout_head from './assets/components/layout-head.vue';
import layout_body from './assets/components/layout-body.vue';
import layout_footer from './assets/components/layout-footer.vue';

export default {
  name: 'app',
  components: {
    'layout-head': layout_head,
    'layout-body': layout_body,
    'layout-footer': layout_footer
  },
  data () {
    return {
      project: {
        name : 'CODING SYSTEM',
        description : 'Piping material coding system'
      }
    }
  }
}
</script>
