
Normalization exercise... Some of the tables don't have enough data to be able to determine the primary key or to determine what data depends on what! 


Employees / jobs / states table

| employeeID | name  | home state    |
| ---------- | ----- | ------------- |
| ---------- | ----- | ------------- |

| employeeID |  job code      |
| ---------- |  ------------- |
| ---------- |  ------------- |

| job code | job   |
| -------- | ----- |
| -------- | ----- |

| state code | state   |
| -------- | ----- |
| -------- | ----- |
-------------
Patient dental appointments 

| staffNo    | patientNo  | Appointment| surgery|
| ---------- | ----- | ------------- | ----- |
| ---------- | ----- | ------------- | ----- |


| staffNo    | Dentist Name  | 
| ---------- | ----- | 
| ---------- | ----- | 

| patientNo    | Patient Name  | 
| ---------- | ----- | 
| ---------- | ----- | 

-----------
Books / genre / author table

| Book  | Genre  | Author |
| ----- | ----- | --- |
| ----- | ----- | --- |

| Author | Author Nationality | 
| ---------- | ----- | 
| ---------- | ----- | 

--------
Employees of instantcover and hotels

| NIN   | ContractNo | hoursPerWeek | HotelNo |
| ----- | ---------  | --------     | ------- |
| ----- | ---------  | --------     | ------- |

| NIN  | eName | 
| ---- | ----- | 
| ---- | ----- | 

| hotelNo  | hotelLocation | 
| ---- | ----- | 
| ---- | ----- |

---------
students / tutors / grades 
| UnitID | StudentID | Date | TutorID | Topic | Room | Grade | 
| -----  | --------- | ---- | ------- | ----- | ---- | ----- |  
| -----  | --------- | ---- | ------- | ----- | ---- | ----- |

| TutorID  | TutEmail | 
| ---- | ----- | 
| ---- | ----- | 

| Topic | Book | 
| ----  | ---- | 
| ----  | ---- | 

