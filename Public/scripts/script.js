// JavaScript Document
var ms = document.getElementById("my_shopping");
var msl = document.getElementById("my_shopping_list");
ms.onmouseover = function(){
		msl.style.display = "block";
	}
ms.onmouseout = function(){
		msl.style.display = "none";
	}

var ap = document.getElementById("all_product");
var pb = document.getElementById("product_box");
ap.onmouseover = function(){
		pb.style.display = "block";
	}
ap.onmouseout  = function(){
		pb.style.display = "none";
	}
pb.onmouseout  = function(){
		pb.style.display = "none";
	}

var sc = document.getElementById("shopping_car");
var mp = document.getElementById("my_shop");
sc.onmouseover = function(){
		mp.style.display = "block";
	}
sc.onmouseout  = function(){
		mp.style.display = "none";
	}
mp.onmouseout  = function(){
		mp.style.display = "none";
	}