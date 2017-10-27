<template>
<div style="padding:20px">
  <h3 class="widget-title">Распродажа</h3>
  <div class="price-line">
    <div class="product-image">
      <a href=""><img src="https://html5book.ru/wp-content/uploads/2017/03/sport1.jpeg"></a>
    </div>
    <div class="product-content">
      <div class="product-title"><a href="">Продукт 1</a></div>
      <div class="star-rating">&nbsp;</div>
      <div class="price-box"><span>₽ 2000</span></div>
    </div>
  </div>
  <div class="price-line">
    <div class="product-image">
      <a href=""><img src="https://html5book.ru/wp-content/uploads/2017/03/sport2.jpeg"></a>
    </div>
    <div class="product-content">
      <div class="product-title"><a href="">Продукт 2</a></div>
      <div class="star-rating">&nbsp;</div>
      <div class="price-box"><span>₽ 2500</span></div>
    </div>
  </div>
  <div class="price-line">
    <div class="product-image">
      <a href=""><img src="https://html5book.ru/wp-content/uploads/2017/03/sport3.jpeg"></a>
    </div>
    <div class="product-content">
      <div class="product-title"><a href="">Продукт 3</a></div>
      <div class="star-rating">&nbsp;</div>
      <div class="price-box"><span>₽ 2070</span></div>
    </div>
  </div>
</div>
</template>

<script>
  export default {
   
    }
 
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');
.col {
  width: 300px;
  background: white;
  padding: 20px;
  border: 1px solid #eeeeee;
  font-family: 'Open Sans', sans-serif;
}
.col * {margin: 0;}
.widget-title {
  margin: 0 0 20px;
  line-height: 1;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 15px;
  color: #242424;
  overflow: hidden;
}
.widget-title:after {
  content: "";
  position: relative;
  display: inline-block;
  width: 100%;
  vertical-align: middle;  
  right: -15px;
  margin-right: -100%;
  border-top: 2px solid #cca86d;   
}
.price-line {margin-bottom: 20px;}
.price-line:last-child {margin-bottom: 0;}
.price-line:after {
  content: "";
  display: table;
  clear: both;
}
.product-image {
  width: 80px;
  float: left;
}
.product-image a {
  display: block;
  outline: none;
}
.product-image img {
  display: block;
  width: 100%;
}
.product-content {
  float: left;
  margin-left: 20px;
}
.product-title {
  font-size: 18px;
  margin-bottom: 10px;
  line-height: 1;
}
.product-title a {
  text-decoration: none;
  color: #242424;
}
.price-box {
  color: #666;
  font-size: 18px;
  line-height: 1;
}
.star-rating {
  margin-bottom: 10px;
  font-size: 13px;
  position: relative;
  font-family: 'FontAwesome';
}
.star-rating:before {
  content: "\f005 \f005 \f005 \f005 \f005";
  position: absolute;
  top: 0;
  left: 0;
  color: #FF9919;
}

</style>