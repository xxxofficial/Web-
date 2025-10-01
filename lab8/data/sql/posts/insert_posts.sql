INSERT INTO users (username, email, password) VALUES 
('ivan', 'ivan@example.com', '$2y$10$hashedpassword1'), 
('ekaterina', 'ekaterina@example.com', '$2y$10$hashedpassword2'), 
('alexey', 'alexey@example.com', '$2y$10$hashedpassword3'), 
('maria', 'maria@example.com', '$2y$10$hashedpassword4');

INSERT INTO posts (title, content, user_id) VALUES
('Советы по программированию', 'Как пить пиво и писать код одновременно', 1),
('Кулинарные хитрости', 'Лучшие закуски к пиву на все случаи жизни', 2), 
('Автомобильные приключения', 'Как ездить на пивовозе и не попадаться ГАИ', 3), 
('Учебные достижения', 'Как сдать мясо Баеву и остаться в живых', 4);