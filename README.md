# University-Admission-System'
USER MANUAL IIITA ADMISSION WEBSITE

How to install given project
1)Download the XAMPP control panel
2)Start session of Apache and MySQL 
3)Click on Admin button provided for MySQL
4)Import the databases Applicantinfo and iiita attached
5)now go inside htdocs folder in xampp
6)Create a new folder with name UAS
7)Copy all the files which is present in the project and paste inside UAS folder
8)Now go inside UAS folder and open command prompt and type ‘code .’ an press ENTER
9)The whole code can now be seen on visual studio
10)Go to browser and type ‘localhost/UAS/’ and press ENTER
11)The website will be opened and explore the website with the user manual

DIFFERENT COMPONENTS OF WEBSITE

*TOP SECTION
![image](https://user-images.githubusercontent.com/53832122/183245182-ed15aea5-2855-4dd3-b873-a9e6557d128f.png)
1)HOME 
This can be found on top right corner and it takes us to the current main page
2)APPLY 
This button is for applicants who wish to apply for a particular course of the university
Clicking on this button leads us to an application form where we have to fill the details in order to apply for a particular course
The fields of this application form are-
![image](https://user-images.githubusercontent.com/53832122/183245227-080c43a5-ed8e-4fad-aee7-f634146079ea.png)
AFTER FILLING THE FORM CORRECTLY CLICK ON PROCEED
RESPONSE BY WEBSITE – Your request is submitted and you will receive an email with the allotted Applicant id number.
ABOUT
This button takes you to the description of various spheres and aspects of the institute.
CONTACT
This button takes you to the contacts information of the institute

*LOGIN SECTION FOR VARIOUS APPLICANT , MAC, ADMIN

![image](https://user-images.githubusercontent.com/53832122/183245238-b0071a6c-3940-4cb5-8e63-778c48906089.png)

1)Applicant Login
Click on LOGIN button in this section . Enter the credentials like Applicant id which you received via email and the password you entered while filling the Application form and press sign in
If you entered correct credentials then you will be directed to to you respective Applicant dashboard 
else a window showing ‘invalid credentials ‘ statement will be shown
Applicant dashboard
DESCRIPTION-It shows the information with which university recognizes you and has 4 buttons

![image](https://user-images.githubusercontent.com/53832122/183245245-03e14fe5-3d01-48e1-90a0-806a4ac5fe56.png)

i)DOWNLOAD-Downloads your application form
ii)VIEW YOUR STATUS- Present on left side and clicking on it displays the Status of your application form by popping a new message dia;log box.

![image](https://user-images.githubusercontent.com/53832122/183245256-fb702516-90e4-48a4-982a-93205613f3eb.png)

iii)EMAILTHE REPORT-Mails the report to your email id
iv)SIGNOUT ACCOUNT- Present on left side and clicking on it will sign you out



2)Admin Login

![image](https://user-images.githubusercontent.com/53832122/183245271-ca891070-102e-4915-bc9d-3cedbb55e97b.png)

Click on LOGIN button in this section . Enter the credentials like Admin id and password and press Sign in
If you entered correct credentials then you will be directed to to you respective Admin dashboard 
else a window showing ‘invalid credentials ‘ statement will be shown
Admin dashboard
DESCRIPTION-It shows the information with which university recognizes you and has 4 buttons
i)VIEW THE PROFILE- Shows your profile
ii)VIEW APPLICANTS- Takes you to a new page ‘APPLICANTS’ in which you can see the list of candidates who are Accepted ,Rejected and confirmed by clicking on buttons ACCEPTED , REJECTED AND CONFIRM respectively.
Button VIEW ALL shows lists of all types of candidates who have been ACCEPTED, REJECTED,CONFIRM AND APPLIED  for admission.

![image](https://user-images.githubusercontent.com/53832122/183245283-cedead6f-b6c3-49c7-9c64-8287480ed8b0.png)

iii)SEE PROGRAMME – Takes you to a new page ‘COURSES OFFERED’  where you will see the list of courses offered by the college and their details . The buttons in this page are-

![image](https://user-images.githubusercontent.com/53832122/183245292-2fa6c90f-7eb8-4151-91af-c1121a01f3f4.png)

a)INSERT COURSE-It provides you the authority to add a new course to the website clicking on this button will open a form asking for details of the new course to be added. 
The fields of the form are-
FIELDS	        DATATYPE	        Eg
Course ID	      String	          IIITAWEST
Course Name	    String	          WESTERN SCIENCE
Course Credit	  Numeric	          4
Start Date	    Date(select)	    05/09/2021
Seats Allocated	Numeric	          40
Course Duration	Numeric 	        4
Degree Offered	String(select)	  B.Tech
		
		

After filling the form click on INSERT and new course will be added
b)DELETE COURSE-Provides you an option to remove a course and a window opens by click on this option. Enter the Course ID of the course whch you want to delete and click DELETE.
c)CHANGE SCHEDULE- Provides you an option to change a course schedule and a window opens by click on this option. Enter the Course ID of the course and the new date of schedule which you want to delete and click CHANGE SCHEDULE.
d)VIEW BY DATE – By clicking on it a new window opens , Enter the date and click on SORT BY DATE will show you the list of courses available on this date.
iv)VIEW SEAT MATRIX – Shows seat available for each course by directing to new page

![image](https://user-images.githubusercontent.com/53832122/183245369-55f704f9-e9a6-4a06-bf86-e33ecca2b08a.png)

v)SIGN OUT ACCOUNT -Signs you out 
3)MAC LOGIN
Click on LOGIN button in this section . Enter the credentials like MAC id and password and press Sign in
If you entered correct credentials then you will be directed to  your respective MAC dashboard 
else a window showing ‘invalid credentials‘ statement will be shown
It contains the following buttons-
a)VIEW THE PROFILE- Clicking this shows the details of MAC member

![image](https://user-images.githubusercontent.com/53832122/183245387-e9cfc2ab-138f-4eab-86b6-7626bea1beb5.png)

b)SEE PROGRAMME- Shows details of all programs available.
c)VIEW APPLICANTS-Shows a list of applicants and for each applicant we have buttons DETAILS, ACCEPT, REJECT, CONFIRM which shows details of the student,Accepts the student for interviewing with the Admin, Rejects the students for interview, Confirms a students respectively.

![image](https://user-images.githubusercontent.com/53832122/183245403-06a7d9be-9e5d-40d9-a44c-03a19415a9ba.png)

d)VIEW SEAT MATRIX – Shows seat available for each course by directing to new page
e)SIGN OUT ACCOUNT -Signs you out 


