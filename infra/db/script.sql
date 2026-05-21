CREATE DATABASE IF NOT EXISTS `sistema_simples`;

USE `sistema_simples`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin123'),
('user1', 'password1'),
('user2', 'password2');