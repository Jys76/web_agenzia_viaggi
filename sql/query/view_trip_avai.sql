
SELECT t.name, ta.start_date, ta.end_date
FROM trip_avai ta
JOIN trip t ON t.id = ta.id_trip 