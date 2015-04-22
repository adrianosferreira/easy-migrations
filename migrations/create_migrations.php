<?php
/*
	@project: easy-migrations
	@autor: Adriano Ferreira
	@email: adrianokta@gmail.com
	@date: 20/04/2015
*/
	class create_migrations{
		public function up(){

			$result = mysql_query("SHOW TABLES LIKE 'migrations'");
			$has_table = mysql_num_rows($result) > 0;

			if(!$has_table){
				$query = 'CREATE TABLE `migrations` (
						   `ID` int(11) NOT NULL,
						   `nome` varchar(100) NOT NULL,
						   `status` int(11) NOT NULL
						 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';			
				mysql_query($query);

				$query = 'ALTER TABLE `migrations` ADD PRIMARY KEY (`ID`);';
				mysql_query($query);

				$query = 'ALTER TABLE `migrations` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;';
				mysql_query($query);

				$query = 'INSERT INTO migrations (nome, status) VALUES ("create_migrations", "1")';
				mysql_query($query);

				return '<p>Criada tabela migrations.</p>';
			}
		}

		public function down(){
			return 'DROP TABLE `migrations`';
		}
	}
?>