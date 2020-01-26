
// подложка под всплывающее окно
var overlay	= document.querySelector('.overlay'),
// коллекция всех элементов на странице, которые могут открывать всплывающие окна
// их отличительной особенность является наличие атрибута '[data-modal]'
mOpen	= document.querySelectorAll('[data-modal]'),
// коллекция всех элементов на странице, которые могут закрывать всплывающие окна
// их отличительной особенность является наличие атрибута '[data-close]'
mClose	= document.querySelectorAll('[data-close]'),
// флаг всплывающего окна: false - окно закрыто, true - открыто
mStatus	= false;

// если нет элементов управления всплывающими окнами, прекращаем работу скрипта
if (mOpen.length == 0) return;

[].forEach.call(mOpen, function(el) {
	// вешаем обработчик события на каждый элемент коллекции
	el.addEventListener('click', function(e) {
		// получаем значение атрибута ['data-modal'], которое
		// является id всплывающего окна
		var modalId	= el.getAttribute('data-modal'),
			// используя id, получаем объект всплывающего окна,
			// которое мы собираемся открыть
			modal	= document.getElementById(modalId);

		// вызываем функцию открытия всплывающего окна, аргументом
		// является объект всплывающего окна
		modalShow(modal);
	});
});
