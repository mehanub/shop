<template>
  <div class="product-item">
    <div class="product-img">
      <a href="">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
      </a>
    </div>
    <div class="product-list">
      <h3>Маленькое черное платье</h3>
      <div class="stars"></div>
      <span class="price">₽ 1999</span>
      <div class="actions">
        <div class="add-to-cart">
          <a href="" class="cart-button">В корзину</a>
        </div>
        <div class="add-to-links">
          <a href="" class="wishlist"></a>
          <a href="" class="compare"></a>
        </div>
        </div>
      </div>
  </div>
</template>

<script>
  export default {
   
    }
 
</script>

<style type="text/css">
 * {box-sizing: border-box;}
.product-item {
  --width: 300px;
  margin: 0 auto;
  padding: 10px 10px 5px 10px;
  border: 1px solid #eee;
  background: white;
  font-family: "Open Sans";
  overflow: hidden;
  transition: .4s linear;
}
.product-img {transition: 1s ease-in-out;}
.product-img:hover {transform: scale(1.1);}
.product-img img {
  display: block;
  width: 100%;
  border: 1px solid rgba(128, 128, 128, 0.13);
}
.product-list {margin-top: 15px;}
.product-list h3 {
  font-weight: 700;
  color: #39404B;
  margin: 0;
  text-transform: uppercase;
  font-size: 14px;
  line-height: 2;
}
.price {
  color: #E34D38;
  display: block;
  margin-bottom: 12px;
}
.stars {
  height: 14px;
  line-height: 14px;
  margin: 7px 0;
}
.stars:before {
  content: "\f005\f005\f005\f005\f006";
  color: #EFB71C;
  font-size: 14px;
  font-family: FontAwesome;
}
.actions {
  border-top: 1px solid #eee;
  padding-top: 4px;
  font-size: 13px;
  height: 30px;
  line-height: 30px;
}
.actions:after {
  content: "";
  display: table;
  clear: both;
}
.add-to-cart, .add-to-links {float: left;}
.cart-button {
  text-decoration: none;
  color: #8C877C;
  padding-right: 20px;
  border-right: 1px solid #ddd;
  transition: .4s linear;
}
.cart-button:before {
  content: "\f07a";
  font-family: FontAwesome;
  margin-right: 10px;
}
.add-to-cart:hover .cart-button, .wishlist:hover, .compare:hover {color: #E34D38;}
.wishlist, .compare {
  color: #8C877C;
  padding-left: 20px;
  transition: .4s linear;
}
.wishlist:after, .compare:after {
  display: inline-block;
  font-family: FontAwesome;
  font-size: 13px;
}
.wishlist:after {content: "\f004";}
 .compare:after {content: "\f079";}
</style>