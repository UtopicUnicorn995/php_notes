CREATE TABLE users(
	id INT(11) NOT NULL AUTO_INCREMENT,
    -- means have a different INT id for every users -> database will automatically add an id
    username VARCHAR(30) NOT NULL,
    passwords VARCHAR(30) NOT NULL,
    -- password is a reserved keyword
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    -- assigns the current time as the default value
    PRIMARY KEY(id)
    -- makes the id the primary key
    -- The last query does not need to have a comma 
);

CREATE TABLE comments(
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    create_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE NO ACTION
    -- Has a problem, gives an error when the user is deleted
        -- Comments of the deleted user will give an error because the user's id will be deleted and we have set it to NOT NULL
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE
    -- If the user is deleted, it's comment will also be deleted
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
    -- Whenever the user is deleted the comment will not be deleted but it's users_id will be set to null -> In this case it will give an error because the users_id cannot be null
);

INSERT INTO users(username, passwords, email) VALUES ('unicorn', 'password', 'unicorn@gmail.com');
    -- insert data into a certain table
    -- the order matter
    -- in the real world password should be hashed

INSERT INTO comments(username, comment_text, user_id) VALUES('unicorn', 'This is a comment to a website', 1)

SELECT comment_text FROM comments WHERE users_id = 1;

UPDATE users SET username = 'Zerphyr', passwords = "basta123" WHERE ID = 2;

DELETE FROM users WHERE ID = 2;

INNER JOIN, LEFT JOIN, etc.

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
    -- Combining data
    -- shows data that matches these 2 conditions from 2 tables

SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;
    -- Left join, focuses on the table at the left

INT - 4 bytes
BIGINT - 8 bytes 

INT === INT(11) -> means upto 11 numbers to be shown in the database
INT SIGNED -> allows us to store negative numbers
INT UNSIGNED -> default value

FLOAT -> has decimal points -> can store up to 4 bytes
DOUBLE 

VARCHAR(1) -> default -> can store up to 65k bytes -> usernme, password, etc
VARCHAR(255) -> can store up to 255 characters

TEXT -> If you want to store a lot of text -> comments, blog post or something

DATE -> defines the date but has a different format depending on needs
DATETIME -> defines the date and also the time

-- CHANGING AN ID IS A BIG NO NO