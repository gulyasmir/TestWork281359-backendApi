Это задание - реализация API для справочника.

Получение данных о пользователях 
GET  http://directory.gulyasmir.ru/public/api/client

Получение данных о определенном пользователе (например с id=2)
GET  http://directory.gulyasmir.ru/public/api/client/2

Для внесения новых пользователей, редактирования и удаления существующих необходима авторизация.

Запрос для авторизации:
POST  http://directory.gulyasmir.ru/public/api/login

Query Params {
   email: ...,
   login: ...
}


Удаление пользователя:
DELETE  http://directory.gulyasmir.ru/public/api/client/2


Изменение данных о пользователе:
PUT  http://directory.gulyasmir.ru/public/api/client/2

Query Params {
   fio: ...,
   email: ...,
   password: ...
}
