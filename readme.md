# Web Programming C Midterms

| **No** | **Name** | **NRP** | 
| ------------- | ------------- | --------- |
| 1 | James Rafferty Lee  | 05111940000055 | 
| 2 | Dicksen Alfersius Novian | 05111940000076 |
| 3 | Cliffton Delias Perangin Angin | 05111940000181 |


## Overview
In this web project we used the Laravel Framework to create a website that has CRUD ( Create, Read, Update, Delete) features alongside our own added functionalities. The Website is called StockTalk. It is an interactive, community based forum similar to Reddit and Quora. Here we can make accounts and post threads, we can also engage in other users’ threads by replying to their respective threads.

The website link is https://pweb-stocktalk.000webhostapp.com/ 
The Github repository link is https://github.com/DicksenAN/ETS-PWEB-C 

The details of our website’s database design, list of features, screenshots and brief webpage explanation are as written below.
## Database Design
Conceptual Data Model ( CDM )

![StockTalk_CDM](https://user-images.githubusercontent.com/65166398/139537935-6e3d2eae-9bfa-42b2-b008-644e72039a8e.jpg)


Physical Data Model ( PDM )

![StockTalk_PDM](https://user-images.githubusercontent.com/65166398/139538119-efc60934-beb1-4a4b-b33b-8abcb6d07f41.jpg)


## List of Features

These are the features of our website. The explanation of each feature is explained in the next sections.


* Login, logout and registration account (mandatory)
* Make threads
* Edit threads
* Delete threads
* Make reply
* Edit reply
* Delete reply
* Pagination of threads
* Edit profile
* Home page (can see your own threads and replies)
* Search Threads

## Implementation,  Screenshot & Webpage Explanation
Landing Page

This page is the first page that you see when visiting the website. From here, you can login or register to your account.

Login Page

This is the login page of the website. Here we can login to our account and if we don’t have an account, we can make one using the link in this page.

Register Page

This is the register page of the website. We can register / make a new account to join this website’s community

Make Threads

By clicking the “add question”, you can make and submit a new thread with question and question details.

Edit Threads

If you want to edit your threads, you can do so by clicking the “edit” button. Here you can fix mistakes, do clarifications, and generally make your thread better.

Delete Threads

You can delete your thread here by clicking the “Delete” button. Once you’ve deleted your thread, it will be gone.

Make Reply

 
 
If you have choose a thread available then you can make a reply for that thread. By clicking the answer button you can type your reply and then click the submit button to post it.

Edit Reply
            By clicking the green button you can edit your reply. After you click it you will be redirected to the page where you can edit your original reply. After you type your new or edited reply you can click the submit button to post it.
 
Delete reply

By clicking the red button you can delete your reply. After you clicked it your reply will be deleted and a pop up message will appear to tell you that your reply has been deleted 
successfully.

Pagination of Threads
In this website threads will be automatically paginated. After 6 threads you will have to go to the next page by clicking the button at the end of the page. In the next page there will be another threads available.
 
Edit Profile
At top right corner of the page you can find the edit profile button. You can edit your profile by clicking the edit profile button. After you click the edit profile button you will be redirected to the edit profile page then you can edit your profile and click the update button to update your profile information.
 
Home Page
In the homepage you can see all of the threads(question) and reply(answer) you have posted in this website.
 

Search threads
You can search for a specific thread by typing your question in the search section at the top of the page. After you type your question you can click the search button to search across the website a thread that answers your  question. After that you will be redirected to the page containing threads that answer your question.

## Analysis and Evaluation
From our assignment, we have analyzed the needs and business model of this website. We are modeling this website after similar community based forums like Quora and Reddit. We implemented this concept using laravel framework.
	We have CRUD features including but not limited to login, register, and edit accounts. We also made sure that threads and replies are customizable and deletable. This Laravel framework is an MVC based framework where Model / Database, View / UI, and Controller, are separated so we can focus on each module and code more expressively and elegantly.
	We have evaluated our website and found that although we have fulfilled the needs and business  requirements, we are aware that there are areas where we can improve on this website. We can improve on adding more features like sub-thread, newsletter, etc.

## Conclusion
From this assignment, we can conclude that CRUD and MVC go hand-to-hand in development, Laravel is a decent framework for MVC and php website application. And we have made this website well, with some improvements to be made.


## Contributions
During this assignment, we have worked in unity, with James’ Website as a working template to be deployed and improved. The details of our contributions are as follows :


* James Rafferty Lee  [40%]	: 
    * Website Template
    * Laravel files
    * Report
* Dicksen Alfersius Novian [ 30% ] :
    * Website deployment
    * CDM & PDM
    * Report
* Cliffton Delias Perangin Angin [30%] :
    * Website analysis
    * Report

