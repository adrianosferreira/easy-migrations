<?php
/*
	@project: easy-migrations
	@autor: Adriano Ferreira
	@email: adrianokta@gmail.com
	@date: 20/04/2015
*/
	class Migration{
		public function run(){

			$output = '';
			$migrations = glob('migrations/*.{php}', GLOB_BRACE);

			foreach($migrations as $migration) {
				include_once($migration);
				$migration = str_replace("migrations/", "", $migration);
				$migration = str_replace(".php", "", $migration);
				$obj = new $migration();
				$output .= $obj->up();
			}

			return $output;
		}
	}
?>