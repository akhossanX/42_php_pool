select f.id_genre, g.name as name_genre, f.id_distrib, d.name as name_distrib , f.title as title_film 
    from film as f 
    left join genre as g on f.id_genre=g.id_genre 
    left join distrib as d on f.id_distrib = d.id_distrib 
    where f.id_genre between 4 and 8;