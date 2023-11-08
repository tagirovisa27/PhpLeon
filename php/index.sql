mysql -u root
CREATE DATABASE book;
CREATE TABLE book (id int AUTO_INCREMENT, name varchar(100), author varchar(100), pages varchar(100), PRIMARY KEY (id));
INSERT INTO book (name, author, pages) VALUES ("Evgeny Onegin", "Pushkin", "224");
INSERT INTO book (name, author, pages) VALUES ("Hero of our time", "Lermontov", "152");
INSERT INTO book (name, author, pages) VALUES ("War and Peace", "Tolstoy", "1300");
SELECT * FROM book;

| id | name             | author    | pages |
+----+------------------+-------------------
|  1 | Evgeny Onegin    | Pushkin   | 224   |
|  2 | War and Peace    | Tolstoy   | 1300  | 
|  3 | Hero of our time | Lermontov | 152   

EXIT

mysql -u root
CREATE DATABASE poet;
CREATE TABLE users (id int AUTO_INCREMENT, name varchar(100), date varchar(100), PRIMARY KEY (id));
INSERT INTO users (name, date) VALUES ("Alexander Sergeevich Pushkin", "June 6, 1799 - February 10, 1837");
INSERT INTO users (name, date) VALUES ("Mikhail Yurjevich Lermontov", "October 15, 1814 - July 27, 1841");
INSERT INTO users (name, date) VALUES ("Lev Nikolaevich Tolstoy", "September 9, 1828 - November 20, 1910");
SELECT * FROM users;

| id | name                         | date                                  |
+----+------------------------------+---------------------------------------+
|  1 | Alexander Sergeevich Pushkin | June 6, 1799 - February 10, 1837      |
|  2 | Mikhail Yurjevich Lermontov  | October 15, 1814 - July 27, 1841      |
|  3 | Lev Nikolaevich Tolstoy      | September 9, 1828 - November 20, 1910

EXIT

mysql -u root
CREATE DATABASE genre;
CREATE TABLE user (id int AUTO_INCREMENT, genreses varchar(100), name varchar(100), PRIMARY KEY (id));
INSERT INTO user (genreses, name) VALUES ("Evgeny Onegin", "Novel");
INSERT INTO user (genreses, name) VALUES ("Hero of our time", "Novel");
INSERT INTO user (genreses, name) VALUES ("War and Peace", "Novel");
SELECT * FROM genre;

| id | genreses         | name  |
+----+------------------+-------+
|  1 | Evgeny Onegin    | Novel |
|  2 | Hero of our time | Novel |
|  3 | War and Peace    | Novel

EXIT
