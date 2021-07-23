<template>
  <div class="progress">
    <progressbar now="50" label type="primary" striped></progressbar>
  </div>
</template>

<script>
import { progressbar } from 'vue-strap'
export default {
  components: {
    progressbar
  },
  mounted() {
    console.log('Component')
  }
}

</script>