SELECT P.*, A.descripcion_actividad, AC.nombre_actor FROM paciente P JOIN actividad_preferida A ON P.id_paciente = A.id_paciente 
JOIN actor_favorito AC ON P.id_paciente = AC.id_paciente
WHERE P.id_paciente = 18;


SELECT P.*, A.descripcion_actividad, AC.nombre_actor 
FROM paciente P, actividad_preferida A, actor_favorito AC
WHERE (P.id_paciente = A.id_paciente AND P.id_paciente = AC.id_paciente) 
AND (P.id_paciente = 18);


SELECT * from paciente WHERE id_paciente = 18;
SELECT descripcion_actividad from actividad_preferida WHERE id_paciente = 18;