<?php
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