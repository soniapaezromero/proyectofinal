Aplicación Symfony par una tienda de artesanía Online para el un funcionamiento en tu equipo .

Requisitos previos:

    • Tener instalado php 8,2 o superior. Y librerías 8,2 cli, fm, xml y mysql.
    • Instalar composer para php. 
    • Instalar  Symfony para tu equipo.
    • Instalar node.js
		
  Una vez hecho esto hecho: esto borramos el cache de php :
	
     php bin/console cache:clear
		 
   He instalamos  y actualizamos librerías:
	 
    •  composer install
		
    •  composer rupdate
		
   Hecho esto  creamos la base de datos y actualizamos y cramos migraciones
	 
    •  Crear: .php bin/console doctrine:schema:create
		
    •  Actualizar :php bin/console doctrine:schema:update –force
		
    •  Crear migracion:php bin/console make:migration
		
    •  Actualizar migracion:php bin/console doctrine:migrations:migrate
		
   En el caso de servidor Apache remover la librería apache pack y volverla a instalar par que se adapte tu servidor
	 
    • composer remove symfony/apache-pack
		
    • composer update
		
    • composer require symfony/apache-pack

     Instalar Nodes.js en el proyecto para que ea adapte a tu configuración:
     
    •  npm install -g yarn
    
    •  yarn install
    
    •  yarn build
    
    •  yarn cache clean 
      
