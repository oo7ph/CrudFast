DROP TABLE IF EXISTS posts;# MySQL returned an empty result set (i.e. zero rows).


CREATE TABLE posts
(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255),
    post_text BLOB,
    PRIMARY KEY (id)
);# MySQL returned an empty result set (i.e. zero rows).
