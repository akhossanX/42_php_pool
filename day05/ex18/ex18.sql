select name from distrib 
     where id_distrib between 62 and 69 or id_distrib in (42,71,88,89,90)
     or length(name) - length(REPLACE(name,'y','')) = 2 
     or length(name) - length(REPLACE(name,'Y','')) = 2 
     limit 2,5;
