CREATE DATABASE rental;

USE rental;
CREATE TABLE dvd(dvd_id INT(11) UNSIGNED auto_increment, title VARCHAR(255), production_year INT(4), PRIMARY KEY (dvd_id));
CREATE TABLE customer(customer_id INT(11) UNSIGNED auto_increment, first_name VARCHAR(255), last_name VARCHAR(255), passport_code VARCHAR(15), registration_date  DATE, PRIMARY KEY (customer_id));
CREATE TABLE offer(offer_id INT(11) UNSIGNED auto_increment, dvd_id INT(11), customer_id INT(11), offer_date DATE, return_date DATE, PRIMARY KEY (offer_id));

INSERT INTO dvd(title, production_year)
VALUES
('IT', 2000),
('1400', 2003),
('American Ninja', 2007),
('Night in Museum', 2003),
('Ghost Busters', 2011);

INSERT INTO customer(first_name, last_name, passport_code, registration_date)
VALUES
('Chuck', 'Norris', '00 00 000 001', '2000-01-01'),
('Bruce', 'Lee', '13 13 131 313', '2003-01-13'),
('Mike', 'Tyson', '66 66 666 666', '2001-11-13');

INSERT INTO offer(dvd_id, customer_id, offer_date, return_date)
VALUES
(1, 1, '2001-01-01', '2001-01-02'),
(2, 1, '2001-01-03', '2001-01-21'),
(4, 2, '2003-01-13', NULL),
(5, 2, '2003-01-13', NULL),
(2, 3, '2014-11-13', '2014-11-14');

SELECT *
FROM dvd
WHERE dvd.production_year>2010
ORDER BY title;

SELECT dvd.*
FROM dvd, offer
WHERE dvd.dvd_id=offer.dvd_id AND offer.return_date is NULL;

SELECT customer.first_name, customer.last_name, dvd.title
FROM dvd, offer, customer
WHERE dvd.dvd_id=offer.dvd_id AND offer.customer_id=customer.customer_id AND offer.offer_date>'2014-01-01';
