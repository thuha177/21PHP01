/*Bài tập:
Lấy database ở trên github
https://github.com/appleluong1905/21php01/tree/main/buoi4/learn_mysql
Tạo database tên db_example và import db_example.sql vào*/


/*Viết các câu lệnh sau
Lấy ra danh sách sản phẩm và sắp xếp theo tên tăng dần*/

SELECT productID, productName, listPrice
FROM products
ORDER BY productName;

/*Lấy ra danh sách sản phẩm có giá nhỏ hơn $500*/

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 500;

/*Lấy ra danh sách đơn hàng (bảng order) được mua vào tháng 5 năm 2014*/

SELECT orderID, orderDate, shipDate
FROM orders
WHERE orderDate BETWEEN '2014-05-01 00:00:00' AND '2014-05-30 23:59:59';

/*Sửa tên sản phẩm có chữ chữ “Fe” thành chữ “Good product”*/

UPDATE products
SET productName = 'Good product'
WHERE productName LIKE '%Fe%';

/*Xóa sản phẩm có giá lớn hơn $800*/

DELETE FROM products
WHERE listPrice > 800;

Dựa vào database myschool đã tạo hôm trước
Kết nối PHP và MySQL
Thêm mới sinh viên vào database bằng form PHP như bài mẫu thêm mới class



