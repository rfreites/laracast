<template lang="html">
  <div class="input-group">
    <input class="form-control" type="text" placehoder="Start typing your message..." v-model="messageText" v-on:keydown.enter="sendMessage">
    <span class="input-group-btn">
      <button class="btn btn-primary" @click="sendMessage">Send</button>
    </span>
  </div>
</template>

<script type="text/javascript">
  export default {
    data() {
      return {
        messageText: null
      }
    },
    methods: {
      sendMessage() {
        console.log(this.messageText);
        this.$emit('messagesent', {
          message: this.messageText,
          user: {
            name: $('.navbar-right .dropdown-toggle').text()
          }
        });
        this.messageText = null;
      }
    }
  }
</script>

<style media="screen" lang="css">

</style>
