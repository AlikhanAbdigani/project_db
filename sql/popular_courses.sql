set serveroutput on;
CREATE OR REPLACE PROCEDURE popular_courses
    (p_semester course_selections.term%TYPE, p_year course_selections.year%TYPE) IS
    CURSOR cur_pop_cours IS
        SELECT DERS_KOD, TO_NUMBER(MAX (TO_DATE(reg_date))- MIN (TO_DATE(reg_date))) / COUNT (DERS_KOD) AS dif
            FROM course_selections
            WHERE term = p_semester AND year = p_year
            GROUP BY (DERS_KOD)
            ORDER BY dif;

    CURSOR cur_cours_teachers (p_ders_kod course_selections.ders_kod%TYPE) IS
        SELECT DISTINCT practice FROM course_selections WHERE ders_kod = p_ders_kod AND term = p_semester AND year = p_year;
BEGIN
    FOR v_pop_cours_record IN cur_pop_cours
    LOOP
        EXIT WHEN cur_pop_cours%ROWCOUNT > 5;
        DBMS_OUTPUT.PUT_LINE('Ders kod: '||v_pop_cours_record.DERS_KOD);
        
        
        FOR v_cours_teachers_record IN cur_cours_teachers (v_pop_cours_record.DERS_KOD)
        LOOP
            DBMS_OUTPUT.PUT_LINE('Teachers: '||v_cours_teachers_record.practice);
        END LOOP;
    END LOOP;
END;

/
BEGIN
  popular_courses(1, 2016);
END;
/

