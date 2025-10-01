-- Create the database
CREATE DATABASE blog_site;

-- Switch to the new database
USE blog_site;

-- Create the users table
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

-- Create the posts table
CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    content TEXT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Insert sample data into users
INSERT INTO users (username, email, is_active) 
VALUES 
('alex', 'alex@email.com', TRUE),
('mia', 'mia@email.com', FALSE);

-- Insert sample data into posts
INSERT INTO posts (user_id, title, content) 
VALUES 
(1, 'First Post', 'This is my first blog post.'),
(2, 'Hello World', 'Mia is testing her first post.');
