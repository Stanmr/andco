<?php

class AzaleaEltdfLineaIcons implements iAzaleaEltdfIconCollection {

	public $icons;
	public $title;
	public $param;
	public $styleUrl;

	public function __construct($title = "", $param = "") {
		$this->icons = array();
		$this->title = $title;
		$this->param = $param;
		$this->setIconsArray();
		$this->styleUrl = ELATED_ASSETS_ROOT . "/css/linea-icons/style.css";
	}

	public function setIconsArray() {
		$this->icons = array(
			'icon-arrows-anticlockwise' => '\e000',
			'icon-arrows-anticlockwise-dashed' => '\e001',
			'icon-arrows-button-down' => '\e002',
			'icon-arrows-button-off' => '\e003',
			'icon-arrows-button-on' => '\e004',
			'icon-arrows-button-up' => '\e005',
			'icon-arrows-check' => '\e006',
			'icon-arrows-circle-check' => '\e007',
			'icon-arrows-circle-down' => '\e008',
			'icon-arrows-circle-downleft' => '\e009',
			'icon-arrows-circle-downright' => '\e00a',
			'icon-arrows-circle-left' => '\e00b',
			'icon-arrows-circle-minus' => '\e00c',
			'icon-arrows-circle-plus' => '\e00d',
			'icon-arrows-circle-remove' => '\e00e',
			'icon-arrows-circle-right' => '\e00f',
			'icon-arrows-circle-up' => '\e010',
			'icon-arrows-circle-upleft' => '\e011',
			'icon-arrows-circle-upright' => '\e012',
			'icon-arrows-clockwise' => '\e013',
			'icon-arrows-clockwise-dashed' => '\e014',
			'icon-arrows-compress' => '\e015',
			'icon-arrows-deny' => '\e016',
			'icon-arrows-diagonal' => '\e017',
			'icon-arrows-diagonal2' => '\e018',
			'icon-arrows-down' => '\e019',
			'icon-arrows-down-double' => '\e01a',
			'icon-arrows-downleft' => '\e01b',
			'icon-arrows-downright' => '\e01c',
			'icon-arrows-drag-down' => '\e01d',
			'icon-arrows-drag-down-dashed' => '\e01e',
			'icon-arrows-drag-horiz' => '\e01f',
			'icon-arrows-drag-left' => '\e020',
			'icon-arrows-drag-left-dashed' => '\e021',
			'icon-arrows-drag-right' => '\e022',
			'icon-arrows-drag-right-dashed' => '\e023',
			'icon-arrows-drag-up' => '\e024',
			'icon-arrows-drag-up-dashed' => '\e025',
			'icon-arrows-drag-vert' => '\e026',
			'icon-arrows-exclamation' => '\e027',
			'icon-arrows-expand' => '\e028',
			'icon-arrows-expand-diagonal1' => '\e029',
			'icon-arrows-expand-horizontal1' => '\e02a',
			'icon-arrows-expand-vertical1' => '\e02b',
			'icon-arrows-fit-horizontal' => '\e02c',
			'icon-arrows-fit-vertical' => '\e02d',
			'icon-arrows-glide' => '\e02e',
			'icon-arrows-glide-horizontal' => '\e02f',
			'icon-arrows-glide-vertical' => '\e030',
			'icon-arrows-hamburger-2' => '\e032',
			'icon-arrows-hamburger1' => '\e031',
			'icon-arrows-horizontal' => '\e033',
			'icon-arrows-info' => '\e034',
			'icon-arrows-keyboard-alt' => '\e035',
			'icon-arrows-keyboard-cmd' => '\e036',
			'icon-arrows-keyboard-delete' => '\e037',
			'icon-arrows-keyboard-down' => '\e038',
			'icon-arrows-keyboard-left' => '\e039',
			'icon-arrows-keyboard-return' => '\e03a',
			'icon-arrows-keyboard-right' => '\e03b',
			'icon-arrows-keyboard-shift' => '\e03c',
			'icon-arrows-keyboard-tab' => '\e03d',
			'icon-arrows-keyboard-up' => '\e03e',
			'icon-arrows-left' => '\e03f',
			'icon-arrows-left-double-32' => '\e040',
			'icon-arrows-minus' => '\e041',
			'icon-arrows-move' => '\e042',
			'icon-arrows-move-bottom' => '\e044',
			'icon-arrows-move-left' => '\e045',
			'icon-arrows-move-right' => '\e046',
			'icon-arrows-move-top' => '\e047',
			'icon-arrows-move2' => '\e043',
			'icon-arrows-plus' => '\e048',
			'icon-arrows-question' => '\e049',
			'icon-arrows-remove' => '\e04a',
			'icon-arrows-right' => '\e04b',
			'icon-arrows-right-double' => '\e04c',
			'icon-arrows-rotate' => '\e04d',
			'icon-arrows-rotate-anti' => '\e04e',
			'icon-arrows-rotate-anti-dashed' => '\e04f',
			'icon-arrows-rotate-dashed' => '\e050',
			'icon-arrows-shrink' => '\e051',
			'icon-arrows-shrink-diagonal1' => '\e052',
			'icon-arrows-shrink-diagonal2' => '\e053',
			'icon-arrows-shrink-horizonal2' => '\e054',
			'icon-arrows-shrink-horizontal1' => '\e055',
			'icon-arrows-shrink-vertical1' => '\e056',
			'icon-arrows-shrink-vertical2' => '\e057',
			'icon-arrows-sign-down' => '\e058',
			'icon-arrows-sign-left' => '\e059',
			'icon-arrows-sign-right' => '\e05a',
			'icon-arrows-sign-up' => '\e05b',
			'icon-arrows-slide-down1' => '\e05c',
			'icon-arrows-slide-down2' => '\e05d',
			'icon-arrows-slide-left1' => '\e05e',
			'icon-arrows-slide-left2' => '\e05f',
			'icon-arrows-slide-right1' => '\e060',
			'icon-arrows-slide-right2' => '\e061',
			'icon-arrows-slide-up1' => '\e062',
			'icon-arrows-slide-up2' => '\e063',
			'icon-arrows-slim-down' => '\e064',
			'icon-arrows-slim-down-dashed' => '\e065',
			'icon-arrows-slim-left' => '\e066',
			'icon-arrows-slim-left-dashed' => '\e067',
			'icon-arrows-slim-right' => '\e068',
			'icon-arrows-slim-right-dashed' => '\e069',
			'icon-arrows-slim-up' => '\e06a',
			'icon-arrows-slim-up-dashed' => '\e06b',
			'icon-arrows-square-check' => '\e06c',
			'icon-arrows-square-down' => '\e06d',
			'icon-arrows-square-downleft' => '\e06e',
			'icon-arrows-square-downright' => '\e06f',
			'icon-arrows-square-left' => '\e070',
			'icon-arrows-square-minus' => '\e071',
			'icon-arrows-square-plus' => '\e072',
			'icon-arrows-square-remove' => '\e073',
			'icon-arrows-square-right' => '\e074',
			'icon-arrows-square-up' => '\e075',
			'icon-arrows-square-upleft' => '\e076',
			'icon-arrows-square-upright' => '\e077',
			'icon-arrows-squares' => '\e078',
			'icon-arrows-stretch-diagonal1' => '\e079',
			'icon-arrows-stretch-diagonal2' => '\e07a',
			'icon-arrows-stretch-diagonal3' => '\e07b',
			'icon-arrows-stretch-diagonal4' => '\e07c',
			'icon-arrows-stretch-horizontal1' => '\e07d',
			'icon-arrows-stretch-horizontal2' => '\e07e',
			'icon-arrows-stretch-vertical1' => '\e07f',
			'icon-arrows-stretch-vertical2' => '\e080',
			'icon-arrows-switch-horizontal' => '\e081',
			'icon-arrows-switch-vertical' => '\e082',
			'icon-arrows-up' => '\e083',
			'icon-arrows-up-double-33' => '\e084',
			'icon-arrows-upleft' => '\e085',
			'icon-arrows-upright' => '\e086',
			'icon-arrows-vertical' => '\e087',
			'icon-basic-accelerator' => 'a',
			'icon-basic-alarm' => 'b',
			'icon-basic-anchor' => 'c',
			'icon-basic-anticlockwise' => 'd',
			'icon-basic-archive' => 'e',
			'icon-basic-archive-full' => 'f',
			'icon-basic-ban' => 'g',
			'icon-basic-battery-charge' => 'h',
			'icon-basic-battery-empty' => 'i',
			'icon-basic-battery-full' => 'j',
			'icon-basic-battery-half' => 'k',
			'icon-basic-bolt' => 'l',
			'icon-basic-book' => 'm',
			'icon-basic-book-pen' => 'n',
			'icon-basic-book-pencil' => 'o',
			'icon-basic-bookmark' => 'p',
			'icon-basic-calculator' => 'q',
			'icon-basic-calendar' => 'r',
			'icon-basic-cards-diamonds' => 's',
			'icon-basic-cards-hearts' => 't',
			'icon-basic-case' => 'u',
			'icon-basic-chronometer' => 'v',
			'icon-basic-clessidre' => 'w',
			'icon-basic-clock' => 'x',
			'icon-basic-clockwise' => 'y',
			'icon-basic-cloud' => 'z',
			'icon-basic-clubs' => 'A',
			'icon-basic-compass' => 'B',
			'icon-basic-cup' => 'C',
			'icon-basic-diamonds' => 'D',
			'icon-basic-display' => 'E',
			'icon-basic-download' => 'F',
			'icon-basic-elaboration-bookmark-checck' => 'a',
			'icon-basic-elaboration-bookmark-minus' => 'b',
			'icon-basic-elaboration-bookmark-plus' => 'c',
			'icon-basic-elaboration-bookmark-remove' => 'd',
			'icon-basic-elaboration-briefcase-check' => 'e',
			'icon-basic-elaboration-briefcase-download' => 'f',
			'icon-basic-elaboration-briefcase-flagged' => 'g',
			'icon-basic-elaboration-briefcase-minus' => 'h',
			'icon-basic-elaboration-briefcase-plus' => 'i',
			'icon-basic-elaboration-briefcase-refresh' => 'j',
			'icon-basic-elaboration-briefcase-remove' => 'k',
			'icon-basic-elaboration-briefcase-search' => 'l',
			'icon-basic-elaboration-briefcase-star' => 'm',
			'icon-basic-elaboration-briefcase-upload' => 'n',
			'icon-basic-elaboration-browser-check' => 'o',
			'icon-basic-elaboration-browser-download' => 'p',
			'icon-basic-elaboration-browser-minus' => 'q',
			'icon-basic-elaboration-browser-plus' => 'r',
			'icon-basic-elaboration-browser-refresh' => 's',
			'icon-basic-elaboration-browser-remove' => 't',
			'icon-basic-elaboration-browser-search' => 'u',
			'icon-basic-elaboration-browser-star' => 'v',
			'icon-basic-elaboration-browser-upload' => 'w',
			'icon-basic-elaboration-calendar-check' => 'x',
			'icon-basic-elaboration-calendar-cloud' => 'y',
			'icon-basic-elaboration-calendar-download' => 'z',
			'icon-basic-elaboration-calendar-empty' => 'A',
			'icon-basic-elaboration-calendar-flagged' => 'B',
			'icon-basic-elaboration-calendar-heart' => 'C',
			'icon-basic-elaboration-calendar-minus' => 'D',
			'icon-basic-elaboration-calendar-next' => 'E',
			'icon-basic-elaboration-calendar-noaccess' => 'F',
			'icon-basic-elaboration-calendar-pencil' => 'G',
			'icon-basic-elaboration-calendar-plus' => 'H',
			'icon-basic-elaboration-calendar-previous' => 'I',
			'icon-basic-elaboration-calendar-refresh' => 'J',
			'icon-basic-elaboration-calendar-remove' => 'K',
			'icon-basic-elaboration-calendar-search' => 'L',
			'icon-basic-elaboration-calendar-star' => 'M',
			'icon-basic-elaboration-calendar-upload' => 'N',
			'icon-basic-elaboration-cloud-check' => 'O',
			'icon-basic-elaboration-cloud-download' => 'P',
			'icon-basic-elaboration-cloud-minus' => 'Q',
			'icon-basic-elaboration-cloud-noaccess' => 'R',
			'icon-basic-elaboration-cloud-plus' => 'S',
			'icon-basic-elaboration-cloud-refresh' => 'T',
			'icon-basic-elaboration-cloud-remove' => 'U',
			'icon-basic-elaboration-cloud-search' => 'V',
			'icon-basic-elaboration-cloud-upload' => 'W',
			'icon-basic-elaboration-document-check' => 'X',
			'icon-basic-elaboration-document-cloud' => 'Y',
			'icon-basic-elaboration-document-download' => 'Z',
			'icon-basic-elaboration-document-flagged' => '0',
			'icon-basic-elaboration-document-graph' => '1',
			'icon-basic-elaboration-document-heart' => '2',
			'icon-basic-elaboration-document-minus' => '3',
			'icon-basic-elaboration-document-next' => '4',
			'icon-basic-elaboration-document-noaccess' => '5',
			'icon-basic-elaboration-document-note' => '6',
			'icon-basic-elaboration-document-pencil' => '7',
			'icon-basic-elaboration-document-picture' => '8',
			'icon-basic-elaboration-document-plus' => '9',
			'icon-basic-elaboration-document-previous' => '!',
			'icon-basic-elaboration-document-refresh' => '\"',
			'icon-basic-elaboration-document-remove' => '#',
			'icon-basic-elaboration-document-search' => '$',
			'icon-basic-elaboration-document-star' => '%',
			'icon-basic-elaboration-document-upload' => '&',
			'icon-basic-elaboration-folder-cloud' => '(',
			'icon-basic-elaboration-folder-document' => ')',
			'icon-basic-elaboration-folder-download' => '*',
			'icon-basic-elaboration-folder-flagged' => '+',
			'icon-basic-elaboration-folder-graph' => ',',
			'icon-basic-elaboration-folder-heart' => '-',
			'icon-basic-elaboration-folder-minus' => '.',
			'icon-basic-elaboration-folder-next' => '/',
			'icon-basic-elaboration-folder-noaccess' => ':',
			'icon-basic-elaboration-folder-note' => ';',
			'icon-basic-elaboration-folder-pencil' => '<',
			'icon-basic-elaboration-folder-picture' => '=',
			'icon-basic-elaboration-folder-plus' => '>',
			'icon-basic-elaboration-folder-previous' => '?',
			'icon-basic-elaboration-folder-refresh' => '@',
			'icon-basic-elaboration-folder-remove' => '[',
			'icon-basic-elaboration-folder-search' => ']',
			'icon-basic-elaboration-folder-star' => '^',
			'icon-basic-elaboration-folder-upload' => '_',
			'icon-basic-elaboration-mail-check' => '`',
			'icon-basic-elaboration-mail-cloud' => '{',
			'icon-basic-elaboration-mail-document' => '|',
			'icon-basic-elaboration-mail-download' => '}',
			'icon-basic-elaboration-mail-flagged' => '~',
			'icon-basic-elaboration-mail-heart' => '\\',
			'icon-basic-elaboration-mail-next' => '\e000',
			'icon-basic-elaboration-mail-noaccess' => '\e001',
			'icon-basic-elaboration-mail-note' => '\e002',
			'icon-basic-elaboration-mail-pencil' => '\e003',
			'icon-basic-elaboration-mail-picture' => '\e004',
			'icon-basic-elaboration-mail-previous' => '\e005',
			'icon-basic-elaboration-mail-refresh' => '\e006',
			'icon-basic-elaboration-mail-remove' => '\e007',
			'icon-basic-elaboration-mail-search' => '\e008',
			'icon-basic-elaboration-mail-star' => '\e009',
			'icon-basic-elaboration-mail-upload' => '\e00a',
			'icon-basic-elaboration-message-check' => '\e00b',
			'icon-basic-elaboration-message-dots' => '\e00c',
			'icon-basic-elaboration-message-happy' => '\e00d',
			'icon-basic-elaboration-message-heart' => '\e00e',
			'icon-basic-elaboration-message-minus' => '\e00f',
			'icon-basic-elaboration-message-note' => '\e010',
			'icon-basic-elaboration-message-plus' => '\e011',
			'icon-basic-elaboration-message-refresh' => '\e012',
			'icon-basic-elaboration-message-remove' => '\e013',
			'icon-basic-elaboration-message-sad' => '\e014',
			'icon-basic-elaboration-smartphone-cloud' => '\e015',
			'icon-basic-elaboration-smartphone-heart' => '\e016',
			'icon-basic-elaboration-smartphone-noaccess' => '\e017',
			'icon-basic-elaboration-smartphone-note' => '\e018',
			'icon-basic-elaboration-smartphone-pencil' => '\e019',
			'icon-basic-elaboration-smartphone-picture' => '\e01a',
			'icon-basic-elaboration-smartphone-refresh' => '\e01b',
			'icon-basic-elaboration-smartphone-search' => '\e01c',
			'icon-basic-elaboration-tablet-cloud' => '\e01d',
			'icon-basic-elaboration-tablet-heart' => '\e01e',
			'icon-basic-elaboration-tablet-noaccess' => '\e01f',
			'icon-basic-elaboration-tablet-note' => '\e020',
			'icon-basic-elaboration-tablet-pencil' => '\e021',
			'icon-basic-elaboration-tablet-picture' => '\e022',
			'icon-basic-elaboration-tablet-refresh' => '\e023',
			'icon-basic-elaboration-tablet-search' => '\e024',
			'icon-basic-elaboration-todolist-2' => '\e025',
			'icon-basic-elaboration-todolist-check' => '\e026',
			'icon-basic-elaboration-todolist-cloud' => '\e027',
			'icon-basic-elaboration-todolist-download' => '\e028',
			'icon-basic-elaboration-todolist-flagged' => '\e029',
			'icon-basic-elaboration-todolist-minus' => '\e02a',
			'icon-basic-elaboration-todolist-noaccess' => '\e02b',
			'icon-basic-elaboration-todolist-pencil' => '\e02c',
			'icon-basic-elaboration-todolist-plus' => '\e02d',
			'icon-basic-elaboration-todolist-refresh' => '\e02e',
			'icon-basic-elaboration-todolist-remove' => '\e02f',
			'icon-basic-elaboration-todolist-search' => '\e030',
			'icon-basic-elaboration-todolist-star' => '\e031',
			'icon-basic-elaboration-todolist-upload' => '\e032',
			'icon-basic-exclamation' => 'G',
			'icon-basic-eye' => 'H',
			'icon-basic-eye-closed' => 'I',
			'icon-basic-female' => 'J',
			'icon-basic-flag1' => 'K',
			'icon-basic-flag2' => 'L',
			'icon-basic-floppydisk' => 'M',
			'icon-basic-folder' => 'N',
			'icon-basic-folder-multiple' => 'O',
			'icon-basic-gear' => 'P',
			'icon-basic-geolocalize-01' => 'Q',
			'icon-basic-geolocalize-05' => 'R',
			'icon-basic-globe' => 'S',
			'icon-basic-gunsight' => 'T',
			'icon-basic-hammer' => 'U',
			'icon-basic-headset' => 'V',
			'icon-basic-heart' => 'W',
			'icon-basic-heart-broken' => 'X',
			'icon-basic-helm' => 'Y',
			'icon-basic-home' => 'Z',
			'icon-basic-info' => '0',
			'icon-basic-ipod' => '1',
			'icon-basic-joypad' => '2',
			'icon-basic-key' => '3',
			'icon-basic-keyboard' => '4',
			'icon-basic-laptop' => '5',
			'icon-basic-life-buoy' => '6',
			'icon-basic-lightbulb' => '7',
			'icon-basic-link' => '8',
			'icon-basic-lock' => '9',
			'icon-basic-lock-open' => '!',
			'icon-basic-magic-mouse' => '\"',
			'icon-basic-magnifier' => '#',
			'icon-basic-magnifier-minus' => '$',
			'icon-basic-magnifier-plus' => '%',
			'icon-basic-mail' => '&',
			'icon-basic-mail-open' => '(',
			'icon-basic-mail-open-text' => ')',
			'icon-basic-male' => '*',
			'icon-basic-map' => '+',
			'icon-basic-message' => ',',
			'icon-basic-message-multiple' => '-',
			'icon-basic-message-txt' => '.',
			'icon-basic-mixer2' => '/',
			'icon-basic-mouse' => ':',
			'icon-basic-notebook' => ';',
			'icon-basic-notebook-pen' => '<',
			'icon-basic-notebook-pencil' => '=',
			'icon-basic-paperplane' => '>',
			'icon-basic-pencil-ruler' => '?',
			'icon-basic-pencil-ruler-pen' => '@',
			'icon-basic-photo' => '[',
			'icon-basic-picture' => ']',
			'icon-basic-picture-multiple' => '^',
			'icon-basic-pin1' => '_',
			'icon-basic-pin2' => '`',
			'icon-basic-postcard' => '{',
			'icon-basic-postcard-multiple' => '|',
			'icon-basic-printer' => '}',
			'icon-basic-question' => '~',
			'icon-basic-rss' => '\\',
			'icon-basic-server' => '\e000',
			'icon-basic-server-cloud' => '\e002',
			'icon-basic-server-download' => '\e003',
			'icon-basic-server-upload' => '\e004',
			'icon-basic-server2' => '\e001',
			'icon-basic-settings' => '\e005',
			'icon-basic-share' => '\e006',
			'icon-basic-sheet' => '\e007',
			'icon-basic-sheet-multiple' => '\e008',
			'icon-basic-sheet-pen' => '\e009',
			'icon-basic-sheet-pencil' => '\e00a',
			'icon-basic-sheet-txt' => '\e00b',
			'icon-basic-signs' => '\e00c',
			'icon-basic-smartphone' => '\e00d',
			'icon-basic-spades' => '\e00e',
			'icon-basic-spread' => '\e00f',
			'icon-basic-spread-bookmark' => '\e010',
			'icon-basic-spread-text' => '\e011',
			'icon-basic-spread-text-bookmark' => '\e012',
			'icon-basic-star' => '\e013',
			'icon-basic-tablet' => '\e014',
			'icon-basic-target' => '\e015',
			'icon-basic-todo' => '\e016',
			'icon-basic-todo-pen' => '\e017',
			'icon-basic-todo-pencil' => '\e018',
			'icon-basic-todo-txt' => '\e019',
			'icon-basic-todolist-pen' => '\e01a',
			'icon-basic-todolist-pencil' => '\e01b',
			'icon-basic-trashcan' => '\e01c',
			'icon-basic-trashcan-full' => '\e01d',
			'icon-basic-trashcan-refresh' => '\e01e',
			'icon-basic-trashcan-remove' => '\e01f',
			'icon-basic-upload' => '\e020',
			'icon-basic-usb' => '\e021',
			'icon-basic-video' => '\e022',
			'icon-basic-watch' => '\e023',
			'icon-basic-webpage' => '\e024',
			'icon-basic-webpage-img-txt' => '\e025',
			'icon-basic-webpage-multiple' => '\e026',
			'icon-basic-webpage-txt' => '\e027',
			'icon-basic-world' => '\e028',
			'icon-ecommerce-bag' => 'a',
			'icon-ecommerce-bag-check' => 'b',
			'icon-ecommerce-bag-cloud' => 'c',
			'icon-ecommerce-bag-download' => 'd',
			'icon-ecommerce-bag-minus' => 'e',
			'icon-ecommerce-bag-plus' => 'f',
			'icon-ecommerce-bag-refresh' => 'g',
			'icon-ecommerce-bag-remove' => 'h',
			'icon-ecommerce-bag-search' => 'i',
			'icon-ecommerce-bag-upload' => 'j',
			'icon-ecommerce-banknote' => 'k',
			'icon-ecommerce-banknotes' => 'l',
			'icon-ecommerce-basket' => 'm',
			'icon-ecommerce-basket-check' => 'n',
			'icon-ecommerce-basket-cloud' => 'o',
			'icon-ecommerce-basket-download' => 'p',
			'icon-ecommerce-basket-minus' => 'q',
			'icon-ecommerce-basket-plus' => 'r',
			'icon-ecommerce-basket-refresh' => 's',
			'icon-ecommerce-basket-remove' => 't',
			'icon-ecommerce-basket-search' => 'u',
			'icon-ecommerce-basket-upload' => 'v',
			'icon-ecommerce-bath' => 'w',
			'icon-ecommerce-cart' => 'x',
			'icon-ecommerce-cart-check' => 'y',
			'icon-ecommerce-cart-cloud' => 'z',
			'icon-ecommerce-cart-content' => 'A',
			'icon-ecommerce-cart-download' => 'B',
			'icon-ecommerce-cart-minus' => 'C',
			'icon-ecommerce-cart-plus' => 'D',
			'icon-ecommerce-cart-refresh' => 'E',
			'icon-ecommerce-cart-remove' => 'F',
			'icon-ecommerce-cart-search' => 'G',
			'icon-ecommerce-cart-upload' => 'H',
			'icon-ecommerce-cent' => 'I',
			'icon-ecommerce-colon' => 'J',
			'icon-ecommerce-creditcard' => 'K',
			'icon-ecommerce-diamond' => 'L',
			'icon-ecommerce-dollar' => 'M',
			'icon-ecommerce-euro' => 'N',
			'icon-ecommerce-franc' => 'O',
			'icon-ecommerce-gift' => 'P',
			'icon-ecommerce-graph-decrease' => 'T',
			'icon-ecommerce-graph-increase' => 'U',
			'icon-ecommerce-graph1' => 'Q',
			'icon-ecommerce-graph2' => 'R',
			'icon-ecommerce-graph3' => 'S',
			'icon-ecommerce-guarani' => 'V',
			'icon-ecommerce-kips' => 'W',
			'icon-ecommerce-lira' => 'X',
			'icon-ecommerce-megaphone' => 'Y',
			'icon-ecommerce-money' => 'Z',
			'icon-ecommerce-naira' => '0',
			'icon-ecommerce-pesos' => '1',
			'icon-ecommerce-pound' => '2',
			'icon-ecommerce-receipt' => '3',
			'icon-ecommerce-receipt-bath' => '4',
			'icon-ecommerce-receipt-cent' => '5',
			'icon-ecommerce-receipt-dollar' => '6',
			'icon-ecommerce-receipt-euro' => '7',
			'icon-ecommerce-receipt-franc' => '8',
			'icon-ecommerce-receipt-guarani' => '9',
			'icon-ecommerce-receipt-kips' => '!',
			'icon-ecommerce-receipt-lira' => '\"',
			'icon-ecommerce-receipt-naira' => '#',
			'icon-ecommerce-receipt-pesos' => '$',
			'icon-ecommerce-receipt-pound' => '%',
			'icon-ecommerce-receipt-rublo' => '&',
			'icon-ecommerce-receipt-tugrik' => '(',
			'icon-ecommerce-receipt-won' => ')',
			'icon-ecommerce-receipt-yen' => '*',
			'icon-ecommerce-receipt-yen2' => '+',
			'icon-ecommerce-recept-colon' => ',',
			'icon-ecommerce-rublo' => '-',
			'icon-ecommerce-rupee' => '.',
			'icon-ecommerce-safe' => '/',
			'icon-ecommerce-sale' => ':',
			'icon-ecommerce-sales' => ';',
			'icon-ecommerce-ticket' => '<',
			'icon-ecommerce-tugriks' => '=',
			'icon-ecommerce-wallet' => '>',
			'icon-ecommerce-won' => '?',
			'icon-ecommerce-yen' => '@',
			'icon-ecommerce-yen2' => '[',
			'icon-music-beginning-button' => 'a',
			'icon-music-bell' => 'b',
			'icon-music-cd' => 'c',
			'icon-music-diapason' => 'd',
			'icon-music-eject-button' => 'e',
			'icon-music-end-button' => 'f',
			'con-music-fastforward-button' => 'g',
			'icon-music-headphones' => 'h',
			'icon-music-ipod' => 'i',
			'icon-music-loudspeaker' => 'j',
			'icon-music-microphone' => 'k',
			'icon-music-microphone-old' => 'l',
			'icon-music-mixer' => 'm',
			'icon-music-mute' => 'n',
			'icon-music-note-multiple' => 'o',
			'icon-music-note-single' => 'p',
			'icon-music-pause-button' => 'q',
			'icon-music-play-button' => 'r',
			'icon-music-playlist' => 's',
			'icon-music-radio-ghettoblaster' => 't',
			'icon-music-radio-portable' => 'u',
			'icon-music-record' => 'v',
			'icon-music-recordplayer' => 'w',
			'icon-music-repeat-button' => 'x',
			'icon-music-rewind-button' => 'y',
			'icon-music-shuffle-button' => 'z',
			'icon-music-stop-button' => 'A',
			'icon-music-tape' => 'B',
			'icon-music-volume-down' => 'C',
			'icon-music-volume-up' => 'D',
			'icon-software-add-vectorpoint' => 'a',
			'icon-software-box-oval' => 'b',
			'icon-software-box-polygon' => 'c',
			'icon-software-box-rectangle' => 'd',
			'icon-software-box-roundedrectangle' => 'e',
			'icon-software-character' => 'f',
			'icon-software-crop' => 'g',
			'icon-software-eyedropper' => 'h',
			'icon-software-font-allcaps' => 'i',
			'icon-software-font-baseline-shift' => 'j',
			'icon-software-font-horizontal-scale' => 'k',
			'icon-software-font-kerning' => 'l',
			'icon-software-font-leading' => 'm',
			'icon-software-font-size' => 'n',
			'icon-software-font-smallcapital' => 'o',
			'icon-software-font-smallcaps' => 'p',
			'icon-software-font-strikethrough' => 'q',
			'icon-software-font-tracking' => 'r',
			'icon-software-font-underline' => 's',
			'icon-software-font-vertical-scale' => 't',
			'icon-software-horizontal-align-center' => 'u',
			'icon-software-horizontal-align-left' => 'v',
			'icon-software-horizontal-align-right' => 'w',
			'icon-software-horizontal-distribute-center' => 'x',
			'icon-software-horizontal-distribute-left' => 'y',
			'icon-software-horizontal-distribute-right' => 'z',
			'icon-software-indent-firstline' => 'A',
			'icon-software-indent-left' => 'B',
			'icon-software-indent-right' => 'C',
			'icon-software-lasso' => 'D',
			'icon-software-layers1' => 'E',
			'icon-software-layers2' => 'F',
			'icon-software-layout' => 'G',
			'icon-software-layout-2columns' => 'H',
			'icon-software-layout-3columns' => 'I',
			'icon-software-layout-4boxes' => 'J',
			'icon-software-layout-4columns' => 'K',
			'icon-software-layout-4lines' => 'L',
			'icon-software-layout-8boxes' => 'M',
			'icon-software-layout-header' => 'N',
			'icon-software-layout-header-2columns' => 'O',
			'icon-software-layout-header-3columns' => 'P',
			'icon-software-layout-header-4boxes' => 'Q',
			'icon-software-layout-header-4columns' => 'R',
			'icon-software-layout-header-complex' => 'S',
			'icon-software-layout-header-complex2' => 'T',
			'icon-software-layout-header-complex3' => 'U',
			'icon-software-layout-header-complex4' => 'V',
			'icon-software-layout-header-sideleft' => 'W',
			'icon-software-layout-header-sideright' => 'X',
			'icon-software-layout-sidebar-left' => 'Y',
			'icon-software-layout-sidebar-right' => 'Z',
			'icon-software-magnete' => '0',
			'icon-software-pages' => '1',
			'icon-software-paintbrush' => '2',
			'icon-software-paintbucket' => '3',
			'icon-software-paintroller' => '4',
			'con-software-paragraph' => '5',
			'icon-software-paragraph-align-left' => '6',
			'icon-software-paragraph-align-right' => '7',
			'icon-software-paragraph-center' => '8',
			'icon-software-paragraph-justify-all' => '9',
			'icon-software-paragraph-justify-center' => '!',
			'icon-software-paragraph-justify-left' => '\"',
			'icon-software-paragraph-justify-right' => '#',
			'icon-software-paragraph-space-after' => '$',
			'icon-software-paragraph-space-before' => '%',
			'icon-software-pathfinder-exclude' => '&',
			'icon-software-pathfinder-subtract' => '(',
			'icon-software-pathfinder-unite' => ')',
			'icon-software-pen' => '*',
			'icon-software-pen-add' => '+',
			'icon-software-pen-remove' => ',',
			'icon-software-pencil' => '-',
			'icon-software-polygonallasso' => '.',
			'icon-software-reflect-horizontal' => '/',
			'icon-software-reflect-vertical' => ':',
			'icon-software-remove-vectorpoint' => ';',
			'icon-software-scale-expand' => '<',
			'icon-software-scale-reduce' => '=',
			'icon-software-selection-oval' => '>',
			'icon-software-selection-polygon' => '?',
			'icon-software-selection-rectangle' => '@',
			'icon-software-selection-roundedrectangle' => '[',
			'icon-software-shape-oval' => ']',
			'icon-software-shape-polygon' => '^',
			'icon-software-shape-rectangle' => '_',
			'icon-software-shape-roundedrectangle' => '`',
			'icon-software-slice' => '{',
			'icon-software-transform-bezier' => '|',
			'icon-software-vector-box' => '}',
			'icon-software-vector-composite' => '~',
			'icon-software-vector-line' => '\\',
			'icon-software-vertical-align-bottom' => '\e000',
			'icon-software-vertical-align-center' => '\e001',
			'icon-software-vertical-align-top' => '\e002',
			'icon-software-vertical-distribute-bottom' => '\e003',
			'icon-software-vertical-distribute-center' => '\e004',
			'icon-software-vertical-distribute-top' => '\e005',
			'icon-weather-aquarius' => '\e000',
			'icon-weather-aries' => '\e001',
			'icon-weather-cancer' => '\e002',
			'icon-weather-capricorn' => '\e003',
			'icon-weather-cloud' => '\e004',
			'icon-weather-cloud-drop' => '\e005',
			'icon-weather-cloud-lightning' => '\e006',
			'icon-weather-cloud-snowflake' => '\e007',
			'icon-weather-downpour-fullmoon' => '\e008',
			'icon-weather-downpour-halfmoon' => '\e009',
			'icon-weather-downpour-sun' => '\e00a',
			'icon-weather-drop' => '\e00b',
			'icon-weather-first-quarter' => '\e00c',
			'icon-weather-fog' => '\e00d',
			'icon-weather-fog-fullmoon' => '\e00e',
			'icon-weather-fog-halfmoon' => '\e00f',
			'icon-weather-fog-sun' => '\e010',
			'icon-weather-fullmoon' => '\e011',
			'icon-weather-gemini' => '\e012',
			'icon-weather-hail' => '\e013',
			'icon-weather-hail-fullmoon' => '\e014',
			'icon-weather-hail-halfmoon' => '\e015',
			'icon-weather-hail-sun' => '\e016',
			'icon-weather-last-quarter' => '\e017',
			'icon-weather-leo' => '\e018',
			'icon-weather-libra' => '\e019',
			'icon-weather-lightning' => '\e01a',
			'icon-weather-mistyrain' => '\e01b',
			'icon-weather-mistyrain-fullmoon' => '\e01c',
			'icon-weather-mistyrain-halfmoon' => '\e01d',
			'icon-weather-mistyrain-sun' => '\e01e',
			'icon-weather-moon' => '\e01f',
			'icon-weather-moondown-full' => '\e020',
			'icon-weather-moondown-half' => '\e021',
			'icon-weather-moonset-full' => '\e022',
			'icon-weather-moonset-half' => '\e023',
			'icon-weather-move2' => '\e024',
			'icon-weather-newmoon' => '\e025',
			'icon-weather-pisces' => '\e026',
			'icon-weather-rain' => '\e027',
			'icon-weather-rain-fullmoon' => '\e028',
			'icon-weather-rain-halfmoon' => '\e029',
			'icon-weather-rain-sun' => '\e02a',
			'icon-weather-sagittarius' => '\e02b',
			'icon-weather-scorpio' => '\e02c',
			'icon-weather-snow' => '\e02d',
			'icon-weather-snow-fullmoon' => '\e02e',
			'icon-weather-snow-halfmoon' => '\e02f',
			'icon-weather-snow-sun' => '\e030',
			'icon-weather-snowflake' => '\e031',
			'icon-weather-star' => '\e032',
			'icon-weather-storm-11' => '\e033',
			'icon-weather-storm-32' => '\e034',
			'icon-weather-storm-fullmoon' => '\e035',
			'con-weather-storm-halfmoon' => '\e036',
			'icon-weather-storm-sun' => '\e037',
			'icon-weather-sun' => '\e038',
			'icon-weather-sundown' => '\e039',
			'icon-weather-sunset' => '\e03a',
			'icon-weather-taurus' => '\e03b',
			'icon-weather-tempest' => '\e03c',
			'icon-weather-tempest-fullmoon' => '\e03d',
			'con-weather-tempest-halfmoon' => '\e03e',
			'icon-weather-tempest-sun' => '\e03f',
			'icon-weather-variable-fullmoon' => '\e040',
			'icon-weather-variable-halfmoon' => '\e041',
			'icon-weather-variable-sun' => '\e042',
			'icon-weather-virgo' => '\e043',
			'icon-weather-waning-cresent' => '\e044',
			'icon-weather-waning-gibbous' => '\e045',
			'icon-weather-waxing-cresent' => '\e046',
			'icon-weather-waxing-gibbous' => '\e047',
			'icon-weather-wind' => '\e048',
			'icon-weather-wind-e' => '\e049',
			'icon-weather-wind-fullmoon' => '\e04a',
			'icon-weather-wind-halfmoon' => '\e04b',
			'icon-weather-wind-n' => '\e04c',
			'icon-weather-wind-ne' => '\e04d',
			'icon-weather-wind-nw' => '\e04e',
			'icon-weather-wind-s' => '\e04f',
			'icon-weather-wind-se' => '\e050',
			'icon-weather-wind-sun' => '\e051',
			'icon-weather-wind-sw' => '\e052',
			'icon-weather-wind-w' => '\e053',
			'icon-weather-windgust' => '\e054'
		);

		$icons = array();
		$icons[""] = "";
		foreach ($this->icons as $key => $value) {
			$icons[$key] = $key;
		}

		$this->icons = $icons;
	}

	public function getIconsArray() {
		return $this->icons;
	}

	public function render($icon, $params = array()) {
		$html = '';
		extract($params);
		$iconAttributesString = '';
		$iconClass = '';
		if (isset($icon_attributes) && count($icon_attributes)) {
			foreach ($icon_attributes as $icon_attr_name => $icon_attr_val) {
				if ($icon_attr_name === 'class') {
					$iconClass = $icon_attr_val;
					unset($icon_attributes[$icon_attr_name]);
				} else {
					$iconAttributesString .= $icon_attr_name . '="' . $icon_attr_val . '" ';
				}
			}
		}

		if (isset($before_icon) && $before_icon !== '') {
			$beforeIconAttrString = '';
			if (isset($before_icon_attributes) && count($before_icon_attributes)) {
				foreach ($before_icon_attributes as $before_icon_attr_name => $before_icon_attr_val) {
					$beforeIconAttrString .= $before_icon_attr_name . '="' . $before_icon_attr_val . '" ';
				}
			}

			$html .= '<' . $before_icon . ' ' . $beforeIconAttrString . '>';
		}

		$html .= '<i class="eltdf-icon-linea-icon ' . $icon . ' ' . $iconClass . '" ' . $iconAttributesString . '></i>';

		if (isset($before_icon) && $before_icon !== '') {
			$html .= '</' . $before_icon . '>';
		}

		return $html;
	}

    public function getSearchIcon() {
        return $this->render('icon-basic-magnifier');
    }

	public function getBackToTopIcon() {

		return $this->render('icon-arrows-up');
	}

    /**
     * Checks if icon collection has social icons
     * @return mixed
     */
    public function hasSocialIcons() {
        return false;
    }


}