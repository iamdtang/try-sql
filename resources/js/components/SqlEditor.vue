<template>
  <div ref="editor" class="editor"></div>
</template>

<style scoped>
  .editor {
    width: 100%;
    height: 300px;
  }
</style>

<script>
  export default {
    props: ['placeholder'],
    mounted() {
      let editor = window.ace.edit(this.$refs.editor);
      editor.setValue(this.placeholder);
      editor.setShowPrintMargin(false);
      editor.setTheme('ace/theme/monokai');
      editor.session.setMode('ace/mode/sql');
      editor.on('change', () => {
        this.$emit('change', editor.getValue());
      });
    }
  }
</script>
