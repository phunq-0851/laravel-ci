<template>
    <div class="user-detail">
        <div class="user-detail-container" v-if="Object.keys(userDetailInfo).length !== 0">
          <div class="user-name">
            Name: {{userDetailInfo.name.last}}
          </div>
          <div class="user-email">
            Email: {{userDetailInfo.email}}
          </div>
        </div>
    </div>
</template>

<script>
    export default {
      props: {
        userDetailInfo: {
          type: Object
        }
      }
    }
</script>

<style lang="scss" scoped>
</style>
