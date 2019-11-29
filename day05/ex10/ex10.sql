SELECT f.title as Title, f.summary as Summary, f.prod_year 
    FROM film AS f
    INNER JOIN genre AS g ON f.id_genre = g.id_genre and g.name like "erotic" 
    ORDER BY f.prod_year desc;
