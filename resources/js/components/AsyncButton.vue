<template>
  <button
    type="button"
    id="run-sql"
    class="btn btn-primary"
    @click="handleClick">
    <span v-if="processing">{{pendingText}}</span>
    <span v-else>{{defaultText}}</span>
  </button>
</template>

<script>
  export default {
    props: ['defaultText', 'pendingText', 'processing'],
    methods: {
      handleClick() {
        this.$emit('click');
      }
    }
  }
</script>
