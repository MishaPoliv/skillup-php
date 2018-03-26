<?php

//Есть 2 таблицы:
//- users - пользователи (id, name) (id, n)
//- orders - заказы (id, user_id, status) (id, o_id, s)

//1) Выбрать Id заказа и соответствующих пользователей из таблицы users,
// у которых записи в таблице orders имеют status = 0;

//SELECT u.id, u.name, o.name AS o_name
//FROM users u
//INNER JOIN orders o ON u.s = 0


//2) Выбрать пользователей у которых есть невыполненные заказы, status = 0;
//SELECT u.id, u.name, o.name AS o_name
//FROM users u
//INNER JOIN orders o ON u.s = 0


//3) Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы users,
// у которых 3 и больше записей поля 'status' = '1' в таблице orders


//INNER JOIN (
//        SELECT u.id u.name, o.name AS o_name
//        FROM status
//        GROUP BY status
//        HAVING COUNT(*) > 3
//        )