<template lang="html">
  <div class="list-group-item">
    <p>{{ message.message }}</p>
    <small>{{ message.user.name }} said.</small>
  </div>
</template>

<script type="text/javascript">
  export default {
    props: ['message']
  }
</script>

<style lang="css">
  small{
    font-style: italic;
  }
</style>
