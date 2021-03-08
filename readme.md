Pеализация Laravel API для справочника. 



Получение данных о пользователях 
GET  https://directory.gulyasmir.ru/public/api/client



Получение данных о определенном пользователе (например с id=2)
GET  https://directory.gulyasmir.ru/public/api/client/2



Для внесения новых пользователей, редактирования и удаления существующих необходима авторизация.

Запрос для авторизации:
POST  https://directory.gulyasmir.ru/public/api/login

Query Params {
   email: ...,
   login: ...
}



Удаление пользователя:
DELETE  https://directory.gulyasmir.ru/public/api/client/2



Изменение данных о пользователе:
PUT  https://directory.gulyasmir.ru/public/api/client/2

Query Params {
   fio: ...,
   email: ...,
   password: ...
}
