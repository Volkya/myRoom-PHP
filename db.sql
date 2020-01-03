-- table users

CREATE TABLE public.users (
                            id int NOT NULL,
                            username varchar(200) NOT NULL,
                            email varchar(200) NOT NULL,
                            "password" varchar(200) NOT NULL,
                            CONSTRAINT users_pk PRIMARY KEY (id)
);

-- table rooms
