INSERT INTO SERVICEIT.USER (USERNAME, PASSWORD) VALUES
('Naufal', 'naufalarsa'),
('Ryan', 'ryan123'),
('Ryan', 'ryan123'),
('Hal', 'hal123'),
('Arvin', 'arvin123'),
('Alam', 'alam123');

INSERT INTO SERVICEIT.SUPPLY (NAMA_SUPPLY, STOK_SUPPLY, HARGA_SUPPLY) VALUES
('Keyboard', 50, 250000),
('Mouse', 75, 150000),
('Monitor', 20, 1500000),
('Printer', 30, 800000),
('Headset', 40, 30000);

INSERT INTO SERVICEIT.MECHANIC (NAMA_MECHANIC, KONTAK_MECHANIC) VALUES
('John Doe', '+62 812-3456-7890'),
('Jane Smith', '+62 878-6543-2109'),
('Bob Johnson', '+62 813-1234-5678'),
('Alice Williams', '+62 899-8887-7776'),
('Charlie Brown', '+62 811-2223-3344');

INSERT INTO SERVICEIT.SERVICE (NAMA_PELANGGAN, KONTAK_PELANGGAN, MERK_DEVICE, STATUS_SERVICE, DESKRIPSI, ID_MECHANIC) VALUES
('Eva Rodriguez', '+62 822-5555-6666', 'Laptop ASUS ROG', 'Selesai', 'Charging problem', 1),
('Ahmad Malik', '+62 877-9876-5432', 'Printer EPSON', 'Selesai', 'Focus calibration', 2),
('Sophie Chen', '+62 888-1111-2222', 'Laptop HP', 'On Progress', 'No sound issue', 3),
('Muhammad Ali', '+62 899-3333-4444', 'Laptop Acer', 'Selesai', 'Display glitch', 1),
('Aisha Gupta', '+62 811-7777-8888', 'Macbook Air M1', 'On Progress', 'Connection stability', 4);

INSERT INTO SERVICEIT.TRANSAKSI (TOTAL_HARGA, ID_SERVICE) VALUES
(150000, 1),
(50000, 2),
(100000, 3),
(75000, 4),
(200000, 5);