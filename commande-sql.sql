// permet d'extraire les post_title du cours avant la forme
// 582-1w1 Mise en page web
SELECT `post_title` FROM `wp_posts` WHERE `post_title` LIKE "___-___ %";
SELECT SUBSTR(`post_title`, 5) from `wp_posts` where `post_title` LIKE "___-___%"

UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;

582-1W1 Mise en page web
UPDATE `wp_posts` 
SET `post_title` = SUBSTR(`post_title`, 5) 
WHERE `post_title` LIKE "___-___%"