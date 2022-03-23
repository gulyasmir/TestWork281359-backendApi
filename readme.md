Laravel Api.

Pеализация Laravel API для справочника. 


Get users data
Получение данных о пользователях 
GET  https://directory.gulyasmir.site/api/client


Get one user data
Получение данных о определенном пользователе (например с id=2)
GET  https://directory.gulyasmir.site/api/client/2



Для внесения новых пользователей, редактирования и удаления существующих необходима авторизация.

Autorization
Запрос для авторизации:
POST  https://directory.gulyasmir.site/api/login

Query Params {

   email: ..., // gulyasmir@yandex.ru
   
   login: ...  // z4Q-EHN-8Yj-GEi
   
}


Remove user
Удаление пользователя:
DELETE  https://directory.gulyasmir.site/api/client/2


Change user's data
Изменение данных о пользователе:
PUT  https://directory.gulyasmir.site/api/client/2

Query Params {
   fio: ...,
   email: ...,
   password: ...
}
