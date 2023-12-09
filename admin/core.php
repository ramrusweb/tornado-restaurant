<?php
	$action = $_POST['action'];

	require 'app/include/function.php';

	switch ($action) {
		case 'init':
			init();
			break;
		case 'selectOneGoods':
			selectOneGoods();
			break;
		case 'updateGoods':
			updateGoods();
			break;
		case 'newGoods':
			newGoods();
			break;
		case 'loadGoods':
			loadGoods();
			break;
		case 'loadSingleGoods':
			loadSingleGoods();
			break;
	}