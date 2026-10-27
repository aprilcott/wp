CREATE DATABASE IF NOT EXISTS skillSwap;
use skillSwap;

CREATE TABLE skills (
  skill_id int NOT NULL,
  user_id int NOT NULL,
  title varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  description text COLLATE utf8mb4_unicode_ci NOT NULL,
  category varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  image_path varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  rate_per_hr decimal(8,2) NOT NULL,
  level enum('Beginner','Intermediate','Expert') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Intermediate',
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO skills (skill_id, user_id, title, description, category, image_path, rate_per_hr, level, created_at) VALUES
(1, 1, 'Beginner Guitar Lessons', '  Guitar Description', 'Music', '1.png', '30.00', 'Beginner', '2025-09-20 15:06:14'),
(2, 1, 'Intermediate Finger Style', '   Guitar 2 Description', 'Music', '2.png', '45.00', 'Intermediate', '2025-09-20 15:06:14'),
(3, 2, 'Artisan Bread Bakking', 'Baking Description', 'Cooking', '3.png', '25.00', 'Beginner', '2025-09-20 15:06:14'),
(4, 2, 'French pastry Making', 'Baking 2 Description', 'Cooking', '4.png', '50.00', 'Expert', '2025-09-20 15:06:14'),
(5, 3, 'Watercolor Basics', 'Art  Description', 'Art', '5.png', '20.00', 'Beginner', '2025-09-20 15:06:14'),
(6, 3, 'Digital Illustration with Procreate', 'Art 2  Description', 'Art', '6.png', '35.00', 'Intermediate', '2025-09-20 15:06:14'),
(7, 4, 'Morning Vinyasa Flow', 'Welness Description', 'Wellness', '7.png', '35.00', 'Intermediate', '2025-09-20 15:06:14'),
(8, 4, 'Intro to PHP & MySQL', 'Programming Description', 'Programming', '8.png', '55.00', 'Expert', '2025-09-20 15:06:14');

CREATE TABLE users (
  user_id int NOT NULL,
  username varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  password char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  bio text COLLATE utf8mb4_unicode_ci,
  joined_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (user_id, username, email, password, bio, joined_at) VALUES
(1, 'alice', 'alice@gmail.com', '48a1474c1ee0ab563529a784b5fb0f6ac274ad95', 'alice bio', '2025-10-28 01:00:06'),
(2, 'bob', 'bob@gmail.com', '2c7c4b94475662c9b01b7a9252c7a6d9b315f198', 'bob bio', '2025-10-28 01:00:18'),
(3, 'carol', 'carol@gmail.com', 'cc2e77851e7a713383a82f9bfa1fd5739c653078', 'carol bio', '2025-10-28 01:02:31'),
(4, 'dave', 'dave@gmail.com', '7d0f4c1b0f9e7fe1f1049b37353645c10bbe9dc1', 'dave bio', '2025-10-28 01:02:44'),
(5, 'root', 'root@gmail.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'root user', '2025-10-28 01:02:54');

ALTER TABLE skills
  ADD PRIMARY KEY (skill_id),
  ADD KEY user_id (user_id);


ALTER TABLE users
  ADD PRIMARY KEY (user_id),
  ADD UNIQUE KEY username (username),
  ADD UNIQUE KEY email (email);

  ALTER TABLE skills
  MODIFY skill_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

  ALTER TABLE users
  MODIFY user_id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE skills
  ADD CONSTRAINT skills_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE;
COMMIT;
