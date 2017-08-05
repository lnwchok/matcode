<template>
  <div>
    <p>Body Part</p>

    <div>
      <select v-model="selected">
        <option v-for="part in parts" v-bind:value="part.code">
            {{ part.description }}
        </option>

      </select>
      <span>Selected: {{ selected }}</span>
    </div>
  </div>
</template>

<script>

import axios from 'axios'

export default {

  data() {
    return {
      selected: '',
      parts : [],
      errors : [],
    }
  },

    // Fetches posts when the component is created.
    created() {
      // axios.defaults.withCredentials = true;
      axios.get('http://matcode:8000/api/v1/mainpart')
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

<style>

</style>
