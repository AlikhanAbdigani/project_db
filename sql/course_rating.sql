CREATE OR REPLACE PROCEDURE rating_courses
    (p_semester course_selections.term%TYPE, p_year course_selections.year%TYPE) IS
    CURSOR cur_rating_cours IS
        SELECT DERS_KOD ,AVG(qiymet_yuz) AS rating FROM course_selections
        WHERE year = p_year AND term = p_semester 
        GROUP BY ders_kod 
        ORDER BY rating DESC;
BEGIN
    FOR v_rating_cours_record IN cur_rating_cours
    LOOP
        EXIT WHEN cur_rating_cours%ROWCOUNT > 5;
        DBMS_OUTPUT.PUT_LINE('Ders kod: '||v_rating_cours_record.DERS_KOD);
        DBMS_OUTPUT.PUT_LINE('Rating: '||v_rating_cours_record.rating);
    END LOOP;
END;
/
BEGIN
  rating_courses(1, 2018);
END;
/