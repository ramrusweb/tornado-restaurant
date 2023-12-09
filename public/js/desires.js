function init() {
	// вычитываю файл goods.json
	$.post(
		"../../admin/core.php",
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
	var desires = {};
			// проверяю есть ли в localStorage запись desires
	if (localStorage.getItem('desires')) {
		// если есть - расшифровываю и записываю в переменную desires
		desires = JSON.parse(localStorage.getItem('desires'));
			for (var key in desires) {
		out +='<div class="cart">';
		out +=`<p class="name">${data[key].name}</p>`;
		out +=`<a href="#"><img src="${data[key].img}" alt=""></a>`;
		out +=`<div class="cost">${data[key].cost}</div>`;
		out +=`<a href="http://tornado/goods.php#${key}">Просмотреть</a>`;
		out +='</div>';
			}
			$('.goods-out').html(out);
	}
	else {
		$('.goods-out').html('Добавьте товар!');
	}
}

$(document).ready(function () {
	init();
});