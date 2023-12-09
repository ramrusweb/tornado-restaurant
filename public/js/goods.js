var cart = {}; // корзина

function init() {
	// вычитываю файл goods.json
	// $.getJSON("goods.json", goodsOut);
	var hash = window.location.hash.substring(1);
	console.log(hash);
	$.post(
		"../../admin/core.php",
		{
			"action" : "loadSingleGoods",
			"id" : hash
		},
		goodsOut
	);
}

function goodsOut(data) {
	// вывод на страницу
	if (data !=0) {
		data = JSON.parse(data);
		console.log(data);
		var out = '';
			out +='<div class="cart">';
			out +=`<button class="desires" data-id="${data.id}">&hearts;</button>`;
			out +=`<p class="name">${data.name}</p>`;
			out +=`<img src="${data.img}" alt="">`;
			out +=`<div class="cost">${data.cost}</div>`;
			out +=`<button class="add-to-cart" data-id="${data.id}"><i class="fas fa-shopping-cart"></i></button>`;
			out +='</div>';
		$('.goods-out').html(out);
		$('.add-to-cart').on('click', addToCart);
		$('.desires').on('click', addToDesires);
	}
	else {
		$('.goods-out').html('Такого товара не существует!');
	}
}

function addToLater() {
	// добавляю товар в "Желания"
	var desires = {};
		// проверяю есть ли в localStorage запись desires
	if (localStorage.getItem('desires')) {
		// если есть - расшифровываю и записываю в переменную cart
		desires = JSON.parse(localStorage.getItem('desires'));
	}
	alert('Добавлено в "Желания"');
	var id = $(this).attr('data-id');
	desires[id] = 1;
	// сохраняю корзину в localStorage
	localStorage.setItem('desires', JSON.stringify(desires)); // корзину в строку
}

function addToCart() {
	// добавляю товар в корзину
var id = $(this).attr('data-id');
// console.log(id);
if (cart[id] == undefined) {
	cart[id] = 1; // если в корзине нет товара - делаю равным 1
}
else {
	cart[id]++; // если такой товар есть - увеличиваю на единицу
}
	showMiniCart();
	saveCart();
}

function saveCart() {
	// сохраняю корзину в localStorage
	localStorage.setItem('cart', JSON.stringify(cart)); // корзину в строку
}

function showMiniCart() {
	// показываю мини корзину
	var out = '';
	for (var key in cart) {
		out += key +' & '+cart[key]+'<br>';
	}
	$('.mini-cart').html(out);
}

function loadCart() {
	// проверяю есть ли в localStorage запись cart
	if (localStorage.getItem('cart')) {
		// если есть - расшифровываю и записываю в переменную cart
		cart = JSON.parse(localStorage.getItem('cart'));
		showMiniCart();
	}
}

$(document).ready(function () {
	init();
	loadCart();
});