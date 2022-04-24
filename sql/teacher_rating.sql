CREATE OR REPLACE PROCEDURE rating_teacher
    (p_semester course_selections.term%TYPE, p_year course_selections.year%TYPE) IS
    CURSOR cur_rating_teacher IS
        SELECT practice ,AVG(qiymet_yuz) AS rating FROM course_selections
        WHERE year = p_year AND term = p_semester 
        GROUP BY practice 
        ORDER BY rating DESC;
BEGIN
    FOR v_rating_teacher_record IN cur_rating_teacher
    LOOP
        EXIT WHEN cur_rating_teacher%ROWCOUNT > 5;
        DBMS_OUTPUT.PUT_LINE('Teacher: '||v_rating_teacher_record.practice);
        DBMS_OUTPUT.PUT_LINE('Rating: '||v_rating_teacher_record.rating);
    END LOOP;
END;

/
BEGIN
  rating_teacher(1, 2018);
END;
/