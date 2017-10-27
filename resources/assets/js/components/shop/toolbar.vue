<template>
  <div class="toolbanges" >
  <a href="">
    <v-badge >
      <span slot="badge">6</span>
      <v-icon color="grey lighten-1">shopping_cart</v-icon>
      Card
    </v-badge>
    </a>
    <a href="">
    <v-badge  color="red">
      <span slot="badge">2</span>
      <v-icon  color="grey">mail</v-icon>
    </v-badge>
   </a>
    
     <li style="float:left" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
           <i class="fa fa-user" aria-hidden="true"></i><span> User</span> <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="">Logout </a>
            </li>
        </ul>
    </li>
  
  </div>
</template>

<script>
  export default {
    data () {
      return {
        show: true,
        badgeData: { value: '!' }
      }
    },
    computed: {
      badge () {
        return this.show ? this.badgeData : null
      }
    }
  }
</script>
<style type="text/css">


.toolbanges{
	float: left
}
</style>