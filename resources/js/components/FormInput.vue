<template>
    <div class="event-handling">
        <div @click="alertHello">
            <button @click.stop="alertWelcome">CLick</button>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            alertHello() {
                alert('Hello')
            },
            alertWelcome() {
                alert('Welcome')
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>
