<?php



	class HomeController
	{
		
		//Просмотр всех статей на Главной + пагинация
		public function actionHome()
		{
			
			// Вывод всех статей на главной
			//$home = array();
			//$home = home::getHome();
						
			// Общее количетсво статей
			//$total = home::getHomeall();
			
			// Создаем объект Pagination - постраничная навигация
			//$pagination = new Pagination($total, $page, Home::SHOW_BY_DEFAULT, 'page-');
						
			require_once(ROOT . '/views/home/index.php');
			
			return true;
		}
		

	}
	

?>