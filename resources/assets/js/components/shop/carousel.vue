<template>
<v-flex d-flex xs12 sm6 lg8>
  <v-card height=300 color="white">
    <v-carousel hide-controls>
      <v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
    </v-carousel>
   </v-card>
</v-flex>    
</template>


<script>
  export default {
    data () {
      return {
        items: [
          {
            src: '/img/slide_1.jpg'
          },
          {
            src: '/img/slide_2.jpg'
          },
          {
            src: '/img/slide_3.jpg'
          },
          {
            src: '/img/slide_4.jpg'
          }
        ]
      }
    }
  }
</script>