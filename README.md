#Easy Migrations

Essa classe foi criada para ser usada em um projeto meu, quando houve a necessidade de fazer um controle de versão do banco de dados. E uma forma de fazer um deployment das minhas alterações na base de dados teste para a base de dados em produção.

Frameworks possuem suas próprias rotinas para trabalhar com migrations, mas no meu caso apenas desenvolvi uma simples rotina que executa determinadas migrations e depois as salva em uma tabela específica.

A pasta migrations contêm apenas uma migration, que serve para criar a tabela resposável por armazenar as migrations da aplicação.
