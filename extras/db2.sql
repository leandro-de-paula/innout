-- Active: 1679487283454@@127.0.0.1@3306@INNOUT
SELECT *
  FROM `INNOUT`.working_hours
 WHERE user_id = 1;

INSERT INTO `INNOUT`.working_hours (user_id,work_date,time1,time2,time3,time4,worked_time) 
    VALUES (1,'2023-04-03','08:00:00','12:00:00','13:00:00','17:00:00',28800);