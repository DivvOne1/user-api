Я работал локально на open server
 Шаги установки

1) Склонируйте репозиторий
2)Установите зависимости:
   composer install
3)Сгенерируйте ключ приложения:
   php artisan key:generate
4) Выполните миграции базы данных:
   php artisan migrate
5)(Опционально) Заполните базу данных тестовыми пользователями:
   php artisan db:seed --class=UserSeeder
