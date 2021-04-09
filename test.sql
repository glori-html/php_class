INSERT INTO
`address_book` (`sid`, `name`, `birthday`, `email`, `mobile`, `address`, `created_at`)
VALUES
(NULL, '葉小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', NOW()),
(NULL, '黃小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', NOW()),
(NULL, '顧小明', '1992-05-21', 'ming@gmail.com', '0922660678', '台北市', NOW())

SELECT p. *, c. `name` FROM `products` AS p JOIN `categories` AS c ON p.`category_sid` = c. `sid`
SELECT p. *, c. `name` cate_name FROM `products` p LEFT JOIN `categories` c ON p. `category_sid` = c.`sid`;
SELECT p. *, c. `name` cate_name FROM `categories` c LEFT OUTER JOIN `products` p ON p. `category_sid` = c.`sid`;

-- debug時使用
SELECT * FROM `products` LEFT JOIN `categories` ON `products`.`category_sid`=`categories`.`sid` WHERE `categories`.`sid` IS NULL

-- 在每一個分類中搜尋各別的商品數量
SELECT
p.`category_sid`,
COUNT(*) num,
c.name
FROM `products` p
JOIN `categories` c ON p.category_sid=c.sid
GROUP BY p.`category_sid`;