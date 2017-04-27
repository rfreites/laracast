<template lang="html">
  <div class="list-group">
    <chat-message v-for="message in messages" v-bind:message="message" v-bind:user="user"></chat-message>
    <div class="list-group-item" v-show="messages.length === 0">
      Nothing here yet!
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    props: ['messages']
  }
</script>

<style media="screen" lang="css">

</style>
