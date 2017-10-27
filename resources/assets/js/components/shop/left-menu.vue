<template>
<div class="widget">
  <div>
  <h2 class="menu-title mb-0">Категории</h2>
  </div>
  <ul class="menu-list">
    <li><div><a @click="open" href="#">Дизайн</a></div>
      <ul class="child-list">
        <li><div><a href="">Нет</a></div></li>
      </ul>
    </li>
    <li><a href="">Фотошоп</a></li>
    <li><a href="">Типографика</a></li>
    <li><a href="">Музыка</a></li>
    <li><a href="">Видео</a></li>
  </ul>
</div>
</template>

<script>
  export default {
   data () {
      return {
        show: false,
      }
    },
    methods:{
      open: function(e){
        console.log($(e.target).parent().parent().find("ul").addClass("-active"));

      }
    }
    }
 
</script>

<style>
* {box-sizing: border-box; margin: 0;}
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
  content: "+";
  text-decoration: inherit;
  margin-right: 14px;
}

.menu-list a:after {
  content: "\f0d7";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  text-decoration: inherit;
  float:right;
  margin-right: 10px;

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

.child-list {
  padding: 0;
  list-style: none;
  padding-left: 35px;
  display: none;
  transition: .3s linear;
}
.child-list .-active{
 display: block;
}
.child-list a:after{
  content: none;
}
.child-list a:before{
  content: none;
}
</style>