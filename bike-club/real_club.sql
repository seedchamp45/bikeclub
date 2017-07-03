CREATE TABLE `real_club` (
  `id` int(11) NOT NULL,
  `image_name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;