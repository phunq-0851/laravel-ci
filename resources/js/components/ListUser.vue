<template>
    <div class="list-user">
        <table class="tbl-list-user">
          <thead>
            <th>Name</th>
            <th>Location</th>
            <th>DOB</th>
          </thead>
          <tbody>
            <tr v-for="user in userData">
              <td><a @click="selectUser(user)">{{user.name.title}} - {{user.name.last}} {{user.name.first}}</a></td>
              <td>{{user.location.city}}</td>
              <td>{{user.dob}}</td>
            </tr>
          </tbody>
        </table>
    </div>
</template>

<script>
    import data from './data.json'
    export default {
      data() {
        return {
          userData: data,
          number: 1410,
          string: "Phu"
        }
      },
      methods: {
        selectUser(user) {
          this.$emit('userSelected', user, this.number, this.string)
        }
      }
    }
</script>

<style lang="scss" scoped>
  .tbl-list-user {
    width: 100%;
  }
</style>
