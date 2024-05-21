Create database Vendas;
Use vendas; 

CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR(50),
    quantidade INT,
    preco_unitario DECIMAL(10, 2)
);
INSERT INTO vendas (produto, quantidade, preco_unitario) VALUES
('Produto A', 10, 15.50),
('Produto B', 5, 20.00),
('Produto C', 7, 8.75),
('Produto A', 3, 15.50),
('Produto B', 10, 20.00),
('Produto C', 1, 8.75),
('Produto A', 6, 15.50);
SELECT 
    produto,
    AVG(quantidade) AS media_quantidade,
    SUM(quantidade) AS total_quantidade,
    MAX(quantidade) AS max_quantidade,
    MIN(quantidade) AS min_quantidade
FROM vendas
GROUP BY produto;