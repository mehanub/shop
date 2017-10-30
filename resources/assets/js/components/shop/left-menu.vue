<template>
<div class="widget">
  <div>
    <h2 class="menu-title mb-0">Категории</h2>
  </div>
  <ul v-if="menu.length>0" class="menu-list">
    <li :key="index" v-for="(i, index) in menu" :class="[i.child? i.active? 'list-open' : 'list-close':'']">
      <a href="#" @click="toogleClass(index)" >{{i.name}}</a>
      <transition name="fade">
        <ul v-show="i.active" class="child-list">
          <li v-for="c in i.child"><div><a href="#">{{c.name}}</a></div></li>
        </ul>
      </transition>
    </li>
  </ul>
</div>
</template>

<script>
  export default {
   data () {
      return {
        show: true,
        menu:[
          {id:1, name:'Дизайн', 
            child:[
              {id:6, name:'Куртки'},
              {id:7, name: 'Обувь'},
              {id:8, name:'Кофты'},
              {id:9, name: 'Носки'},
              {id:10, name:'Футболки'},
              {id:11, name: 'Свитера'},
              
              ]
          },
          {id:2, name:'Фотошоп'},
          {id:3, name: 'Типографика'},
          {id:4, name: 'Мущыка',child:[
              {id:6, name:'Куртки'},
              {id:7, name: 'Обувь'},
              {id:8, name:'Кофты'},
              {id:9, name: 'Носки'}]},
          {id:5, name: 'Видео'}
        ]
      }
    },
    methods:{
      toogleClass: function(index){
        if( this.menu[index].active){
          this.$set(this.menu[index], 'active',false);
        }
        else{
          this.$set(this.menu[index], 'active',true);
        }
      }
    }
    }
 
</script>

<style>
 
.widget {
  background: white;
  font-family: 'Roboto', sans-serif;
}
.menu-title {
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #222;
  font-size: 15px;
  padding: 10px 30px 10px;
  border-bottom: 1px solid rgba(222, 222, 222, 0.42);
}
 
.menu-title:after {
  content: "";
  position: relative;
  display: inline-block;
  width: 70px;
  vertical-align: middle;  
  right: -15px;
  margin-right: -100%;
  border-top: 2px solid #cca86d;   
}

.menu-list {
  padding: 0;
  list-style: none;
}
.menu-list a:before {
  content: "";
  position: relative;
  vertical-align: middle; 
  display: inline-block;
  width: 10px;
  left: -10px;
  border-top: 2px solid #cca86d; 
  margin-left: 10px;
}

.menu-list a {
  text-decoration: none;
  outline: none;
  display: block;
  padding: 6px 15px 6px; 
  letter-spacing: 1px;
  font-weight: 300;
  color: #444;
  transition: .3s linear;
  border-bottom: 1px solid rgba(222, 222, 222, 0.42);
}
.menu-list a:hover {color: #b99d61;}


.list-open a:after {
  content: "\f0d8";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  text-decoration: inherit;
  float:right;
  margin-right: 10px;

}

.list-close a:after {
  content: "\f0d7";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  text-decoration: inherit;
  float:right;
  margin-right: 10px;
}



.child-list {
   overflow:hidden;
  padding: 0;
  list-style: none;
  padding: 0px 0px 0px;
}

.child-list a{
 padding: 4px 45px 4px; 
 font-size: 13px;
 background: rgb(245, 248, 250)
}
.child-list a:after{
  content: none;
}
.child-list a:before{
  content: none;
}

.fade-enter-active, .fade-leave-active {
  transition: all 0.3s;
}
.fade-enter, .fade-leave-to /* .list-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateY(-20%);
}
</style>