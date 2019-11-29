select md5(concat(replace(phone_number, '7', '9'), '42')) as ft5 
    from distrib 
    where id_distrib=84;