var cart = {}; // корзина

function init() {
	// вычитываю файл goods.json
	// $.getJSON("goods.json", goodsOut);
	$.post(
		"../admin/core.php",
		{
			"action" : "loadGoods"
		},
		goodsOut
	);
}

function goodsOut(data) {
	// вывод на страницу
	data = JSON.parse(data);
	console.log(data);
	var out = '';
	for (var key in data) {
		// out +='<div class="cart">';
		// out +='<p class="name">'+data[key].name+'</p>';
		// out +='<img src="'+data[key].img+'" alt="">';
		// out +='<div class="cost">'+data[key].cost+'</div>';
		// out +='<button class="add-to-cart">Купить</button>';
		// out +='</div>';
		// ----------------
		out +='<div class="cart">';
		out +=`<a href="#"><img src="${data[key].img}" alt=""></a>`;
		out +=`<p class="name"><a href="http://tornado/goods.php#${key}">${data[key].name}</a></p>`;
		out +=`<div class="cost">${data[key].cost}</div>`;
		out +=`<button class="desires" data-id="${key}">&hearts;</button>`;
		out +=`<button class="add-to-cart" data-id="${key}"><i class="fas fa-shopping-cart"></i></button>`;
		out +='</div>';
	}
	$('.goods-out').html(out);
	$('.add-to-cart').on('click', addToCart);
	$('.desires').on('click', addToDesires);
}

function addToDesires() {
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