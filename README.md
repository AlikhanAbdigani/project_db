# project_dbSULEYMAN DEMIREL UNIVERSITY
ENGINEERING FACULTY





CSS 305 - Database Management Systems 2
Project documentation






Checked by: Assem Talasbek

Made by: Alikhan Abdigani
       Batyrbek Kaiypbai	       
	       Olzhas Myktybekov








Kaskelen, 2022


Structure:

Abstract
Introduction
Aim and objectives of research
Background Review 
Methods and Materials
Data and Results
Discussion
Conclusion
References			

Abstract
Our project is about helping students on their way to graduate from university. And the main purpose of our project is to give students statistics about certain courses and teachers so that they know which courses to enroll in advance. We will also add in some other useful functions.


Introduction
	Why do students drop out of university?
Before applying, an applicant should learn about the main reasons why students drop out of school and refuse a diploma of higher education. There are several such reasons, and each course has its own. The Ministry of Education is puzzling over why every fifth student leaves the walls of the university without a diploma. And the reasons lie on the surface.

Underachievement
In the first or second year, a student can simply be expelled from an educational institution for poor progress. The problem is that yesterday's schoolboy finds himself in an unusual environment where no one is running after him. As a result, he relaxes and becomes lagging behind. Young people who came to study from a small town to a metropolis are generally beginning to feel the taste of freedom.

Awareness
After the student has successfully completed the first two courses, he begins to realize that he is not doing what he would like to do. His choice of courses may have been wrong. Sometimes the choice is made not by the student himself, but by friends. In general, realizing that he is studying at the wrong faculty, a student can leave the university.

We know that at the beginning of the semester, our SDU students have problems choosing subjects and teachers. Most students do not know what subject they like.


Aim and objectives of research
Aim:  To develop a system that can help students at the stage of choosing subjects of bachelor's degree in Kazakhstan.
Objectives: 
     • Find the most popular teacher in the semester section (You must go through the semester and year number and subject code, and also display the teacher's practice and lecture). For example, teachers of lectures on programming technology: Instructor1, Instructor2. Practice Teachers: Teacher1, Teacher2, Teacher3.
• Calculate the student's GPA for the semester and total
• Teacher rating for the semester (list)
• Subject rankings per semester (list)
• Calculate the total number of retakes for all time and withdraw the profit.

Background review
Nowadays, every student asks the question: what courses to choose, what teacher to choose. But before that, there is a big question: in what direction of the speciality will he be able to work after successfully graduating from the university and graduating from the speciality. The real problem is that 60 percent of graduates do not work in the speciality in which they graduated. We are confident that this product will reduce the percentage to about 35 percent.

Methods and Materials
 We used pre-collected data from SDU website.We used information about specialities(Course codes), courses, teachers(teacher IDs) and students(student IDs) and etc.

PHP example code for connect to data
Data and Results
Table description.
Here are all the data that were included in the tables.
Table: Course_schedule
DERS_KOD – course code (code of subject)
YEAR – year when subject was conducted
TERM – 1 – Fall, 2-Spring
DERS_S_ID – 
SECTION – 
MIN(START_TIME) – time of subject on week by schedule

Table: Course_sections
DERS_SOBE_ID –
DERS_KOD – course code (code of subject)
YEAR – year when subject was conducted
TERM – 1 – Fall, 2-Spring
SECTION – 
TYPE – N,L – lection P- practice
EMP_ID – id teacher, instructor
MESSAGE – comment
WEEK_NUM – how many weeks 
HOUR_NUM – how many hours for semester
PACKET_DERS – skip
ATTEND_TYPE – skip
PAID_SECTION – skip
EMP_ID_ENT – id teacher, instructor who can inter marks
LAST_MODIFIED – last marks modified time
Credits – number of credits

Table: Course_selections
STUD_ID – id student
DERS_KOD – course code (code of subject)
YEAR – year
TERM - 1 – Fall, 2-Spring
SECTION – section
LAB_SOBE_ID - skip
QIYMET_YUZ – total mark of the course
QIYMET_HERF - total mark of the course
GRADING_TYPE – PNP –pass / no pass, N - standart
ATTENDED – skip
PRACTICE – practice teacher
REG_DATE – registration time

We did not get to use all the data, as most of them did not target our agenda.

Discussion
This study showed a large number of differences in occupations for each individual specialty. Within the framework of these data, we could look at the ratio of universities between specialties and professions. Such data is collected to analyze the experience of each institution.



Conclusion
In conclusion, it should be said that the project involves the emergence of problems with the choice of subjects, and we expect that our five kopecks can be used for practical purposes or in several directions. This will help build a forecasting system and build a flexible system for building a statistics system. In the process of writing this project, our attitude changed a lot after this study. We realized the impact of the choice of subjects and made a general overview of the university. For this task, to reproduce and the algorithm of the algorithm, which will be useful to mankind, really began to operate. In conclusion, we believe that our approach and application will be useful and favorable.

References 
Extracting information from the database to the site
Profile List – Suleyman Demirel University (sdu.edu.kz)

https://dknews.kz/ru/dk-life/161964-pochemu-kazahstancy-brosayut-uchebu-v-universitetah

