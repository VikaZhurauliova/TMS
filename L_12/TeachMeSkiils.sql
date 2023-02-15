-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 15 2023 г., 22:22
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TeachMeSkiils`
--

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`date_publication`, `title`, `image`, `description`, `sub_title`, `video`, `link`) VALUES
('2022-12-27', 'Итоги новогоднего конкурса в TeachMeSkills (2022)', 'Здесь картинка!', 'Как вы знаете, в преддверии самого доброго и волшебного праздника — Нового года — IT-школа TeachMeSkills традиционно запускает специальный проект «Письмо ДедушкеTMS». ', 'Смотри видео с результатами конкурса на нашем Youtube канале', 'Здесь видео!', 'Подробнее о механике проведения конкурса');

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`title`, `image`, `description`, `article`) VALUES
('Блог', 'Здесь картинка.', 'Здесь мы публикуем годный контент, а именно важные новости, крутые лайфхаки, подробные разборы и практический опыт авторов-экспертов.', 'Полезный контент');

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`title`, `description`, `is_online`, `image`) VALUES
('Каталог курсов', 'За 6 лет мы выпустили более 8000 айтишников, которые успешно начали свой путь в международных IT компаниях.', 1, 'Тут картинка онлайн курсов.');

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`logo_image`) VALUES
('Тут ссылка на картинку.');

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `birthday`, `phone`, `email`, `full_payment`, `course_name`, `has_experiense`, `is_online`) VALUES
(1, 'Вика', 'Журавлёва', '1999-10-27', '+375336828654', 'vika.zhuravleva.19@gmail.com', 'full', 'WEB-developer', 0, 1),
(2, '', '', NULL, NULL, '', NULL, '', NULL, NULL);

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `surname`, `birthday`, `phone`, `description`, `image`, `years_of_experiense`, `job_title`, `email`, `is_online`) VALUES
(1, 'Иван', ' Иванов', '1999-12-23', '+375336812689', 'Иван, 2 года опыта коммерческой разработки.', NULL, 2, 'Разработчик', 'ivan_ivanov@gmail.com', 'По желанию.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
