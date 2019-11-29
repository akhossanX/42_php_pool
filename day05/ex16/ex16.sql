select count(*) as movies 
    from member_history 
    where (date between '2006-10-30' and '2007-07-27') or (month(date)=12 and day(date)=24);