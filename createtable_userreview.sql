CREATE TABLE user_review(
    id int NOT NULL AUTO_INCREMENT,
    order_id varchar(255) NOT NULL,
    product_id varchar(255) NOT NULL,
    user_id varchar(255) NOT NULL,
    rating float,
    review varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id)
)