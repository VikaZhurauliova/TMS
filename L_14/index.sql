SELECT s.id, c.title, c.start_date, c.end_date, s.name, s.phone, s.country  FROM courses as c
INNER JOIN students as s ON c.id = s.id;

SELECT l.id, c.title, l.title, l.description  FROM lessons as l
INNER JOIN courses as c ON l.id = c.id;