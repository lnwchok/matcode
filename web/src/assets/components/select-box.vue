<template>
  <div>
    <select @change="selectOption">
      <option disabled value="" selected>Please select</option>
      <option v-for="part in parts" :value="part.code">
          {{ part.description }}
      </option>
    </select>
    <span>Selected: {{ selected }}</span>
  </div>
</template>

<script>

import axios from 'axios';
export default {
  props: {
    name : {required : true},
  },

  methods: {
    selectOption(event) {
      this.selected = event.target.value;
      this.$emit('boxChanged', this.selected);
    }
  },

  data() {
    return {
      selected: '',
      url : 'http://matcode:8000/api/v1/',
      parts : [],
      errors : [],
    }
  },

  // Fetches posts when the component is created.
  created() {
    // axios.defaults.withCredentials = true;
    axios.get(this.url + this.name)
    .then(response => {
      // JSON responses are automatically parsed.
      this.parts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
}
</script>
