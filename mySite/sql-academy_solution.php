
1.	Вывести имена всех людей, которые есть в базе данных авиакомпаний
SELECT (name) FROM Passenger
2.	Вывести названия всеx авиакомпаний
SELECT (name) FROM Company
3.	Вывести все рейсы, совершенные из Москвы
SELECT * FROM Trip WHERE town_from = 'Moscow'
4.	Вывести имена людей, которые заканчиваются на "man"
SELECT name FROM Passenger WHERE name LIKE '%man'
5.	Вывести количество рейсов, совершенных на TU-134
SELECT COUNT(*) as count FROM Trip WHERE plane = 'TU-134'
6.	Какие компании совершали перелеты на Boeing
SELECT DISTINCT c.name FROM Trip as t JOIN Company as c ON t.company = c.id WHERE t.plane = 'Boeing'
7.	Вывести все названия самолётов, на которых можно улететь в Москву (Moscow)
SELECT DISTINCT plane FROM Trip WHERE town_to = 'Moscow'
8.	В какие города можно улететь из Парижа (Paris) и сколько времени это займёт?
  SELECT town_to, TIMEDIFF(time_in, time_out) as flight_time FROM Trip WHERE town_from = 'Paris'
9.	Какие компании организуют перелеты с Владивостока (Vladivostok)?
  SELECT c.name FROM Trip t JOIN Company c ON t.company = c.id WHERE t.town_from  = 'Vladivostok'
10.	Вывести вылеты, совершенные с 10 ч. по 14 ч. 1 января 1900 г.
SELECT * FROM Trip WHERE time_out BETWEEN '1900-01-01 10:00:00' AND '1900-01-01 14:00:00' (тут нужно правильно написать формат даты и времени)
