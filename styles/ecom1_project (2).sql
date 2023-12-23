






--
--
--

INSERT INTO `address` (`id`, `street_name`, `street_nb`, `city`, `province`, `zip_code`, `country`) VALUES
( 'default', 1, 'default', 'default', '123456', 'default');




INSERT INTO `order_has_product` (`order_id`, `product_id`, `quantity`, `price`) VALUES
( 2, 6, 15.99),
( 5, 1, 13.50),
( 6, 2, 45.99);

INSERT INTO `product` (`id`, `name`, `quantity`, `price`, `img_url`, `description`) VALUES
('Love in Seasons', 40, 17.55, 'seasonalLove.jpg', 'Découvrez une histoire émouvante d\'une écrivaine passionnée  transporter dans son oeuvre .. '),
('Voleuse deVisage', 15, 15.99, 'voleusedevisage.jpg', 'Dans un monde régis par l\'apparence Ana fait la rencontre d\'une mystérieuse femme qui lui donne la capacité de voler les visages qui lui plaît mais à quelle prix...'),
('Enemies', 6, 23.00, 'toivsmoi.png', 'Laura femme fatale et spécialiste d\'arnaque en tout genre accompli le coup du siècle mais c\'est sans compter l\'intervention de Reggie. Une histoire comique de Jane Foster.'),
('Dracula', 32, 25.55, 'dracula.jpg', 'La glaçante histoire de Brahm Stocker Dracula Le conte buveur de sang.'),
('Snow Crush', 15, 13.50, 'coupdeFoudreaNoel.jpg', 'Emma retourne a SnowFlake City pour Noël et redécouvre la ville de son enfance et surtout Jake le maraicher qui ne l\'a pas oublier ...'),
('Savage Love Col.', 40, 45.99, 'amoursauvage.jpg', 'Retrouver toute l\'histoire de Valerius et Tabitha dans la collection Savage Love en exclusivité sur votre site préférer. Vivez un tourbillon de passion et d\'extase'),
('Les Ombres', 35, 39.99, 'lesombres.jpg', 'Dans une ville aux apparences silencieuses\r\ndes phénomène paranormaux se multiplient . Le professeur Weever trouvera t-il  la solution contre ce fléau?');


INSERT INTO `role` (`id`, `name`, `description`) VALUES
( 'superadmin', 'desc super\r\n     admin'),
( 'admin', 'desc admin'),
( 'client', 'desc client');



INSERT INTO `user` (`id`, `user_name`, `email`, `pwd`, `fname`, `lname`, `billing_address_id`, `shipping_address_id`, `token`, `role_id`) VALUES
( 'Blond34', 'blondine@jebouine.ca', '7c93c532b05cd9b348fcf8b1b887918366651204', 'Blondine', 'Keumani', 1, 1, '22a75ea10a8847aa629c36899f6a1def1edab51b1c39a92dc491a79a96e6bca8', 2),
( 'Sorelle1', 'sorelle@jebouquine.ca', '1ae29398dacf626a78ff862eed16406fbb8a4fc6', 'Sorelle', 'Tchokouani', 1, 1, '249e8ab8e623def12d5d1891bf61c1143786095cd3cda6692bc00b9961f11997', 1),
( 'John25', 'johnny@yahoo.ca', '71feacfe03aa6754bad02ba01c80da0f630be56b', 'Johnny', 'Harp', 0, 0, '83f2fbe0eea9a7e5ecfc066c54fffc1e38899ed5b1a9b4ca642190c374510ff0', 3),
( 'Julian', 'toto@toto.ca', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Julian', 'Julian', 1, 1, '', 1),
( 'superadmin', 'superadmin@admin.ca', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Super', 'Admin', 1, 1, '', 1),
( 'admin', 'admin@admin.ca', 'd385ec822b4389d1c660de9690d5a2de2b4cd718', 'Admin', 'Admin', 1, 1, '', 2),
( 'client', 'client@client.ca', 'b824b2fe11ed7a82bf76972826655894cd5dc722', 'Client', 'Client', 1, 1, '', 3),
( 'Brice2', 'brice@jebouquine.ca', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Brice', 'Andy', 1, 1, '800dce9698d5f63d67c30859fd86ff25f86b37147eed4266d26ac91a669425d5', 3);


INSERT INTO `user_order` (`id`, `ref`, `date`, `total`, `user_id`) VALUES
( 'Brice22023-12-239', '2023-12-23', 75.48, 9);
`

