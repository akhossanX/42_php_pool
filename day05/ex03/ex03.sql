insert into ft_table (`login`, `group`, `creation_date`) 
    SELECT last_name, 'other', birthdate FROM user_card 
        WHERE last_name like "%a%" and length(last_name) < 9 
        ORDER by last_name LIMIT 10;