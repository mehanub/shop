   <template>
      <div class="text-xs-right">
      <v-pagination :length="6" v-model="page" total-visible=6></v-pagination>
      </div>
    </template>

   <script>
  export default {
    data () {
      return {
        page: 1
      }
    }
  }
</script>