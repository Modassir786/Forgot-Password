CREATE TABLE `sent_otp`(
    `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email` varchar(100) NOT NULL,
    `vs_code` varchar(100) NOT NULL
)
