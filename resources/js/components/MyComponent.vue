<template>
    <div class="my-component">
      <div>Message text: {{ message.text }}</div>
      <div>Message type: {{ message.type }}</div>
      <div><button @click="changeText">Click me</button></div>
      <div><button @click="changeType">Click me</button></div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          message: {
            text: 'How are you',
            type: 'Greeting'
          }
        }
      },
      methods: {
        changeText() {
          this.message.text = "This is new text"
        },
        changeType() {
          this.message.type = "This is new type"
        }
      },
      computed: {
        reverseMessage() {
          return this.message.split('').reverse().join('')
        },
        getType() {
          return this.message.type
        },
        getText() {
          return this.message.text
        }
      },
      watch: {
        // message: {
        //   handler: function() {
        //     console.log('something change');
        //   },
        //   deep: true
        // }
        getType() {
          console.log('type chaged')
        },
        getText() {
          console.log('text changed')
        }
      }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
</style>
