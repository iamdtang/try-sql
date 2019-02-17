<template>
  <button
    type="button"
    id="run-sql"
    class="btn btn-primary"
    @click="handleClick">
    <slot v-if="idle"></slot>
    <span v-if="!idle">Processing...</span>
  </button>
</template>

<script>
  export default {
    data() {
      return {
        idle: true
      };
    },
    methods: {
      handleClick() {
        // this.idle = false;
        this.$emit('click');
      }
    }
  }
</script>
