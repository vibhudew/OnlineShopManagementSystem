<h1 align="center"> Central Hardware Shop, Mihintale</h1>

## About the project
<p>We have chosen to create an online shopping management system for the ITP project. "Central Hardware Shop" which has located at Mihintale area in Anuradhapura has been chosen 
by us to do our project. The main reason for that is we have found a lot of manual paper –
based documentation issues with the shopping management in this hardware. The owner 
asked us to create an online shopping management system for his hardware shop.
Currently, they have fully manual system for manage their tasks. current technology to manage 
tasks comparing with Online Shopping System, the traditional commodity sales are based on 
physical stores, which requires a large amount of workforce and material resources, failing to 
achieve the desired expectations. 

But obviously, it is an excellent choice to develop an online shopping system to organize all aspects of commodity and generate considerable savings. In terms of operations, the system runs in Windows, using MySQL database, which has superior performance in operation and management. 

Regarding the functional requirements analysis, the design of the system is finished after a considerable number of research.We use PHP using Laravel framework to develop the back – end of our web application. We use HTML, JS/jQuery and Bootstrap to develop front – end. We use SQL for create the databases.

We focus on eight functions in the system according to the project guidelines. This is a Walk –
In – Customer based online system. Default Walk-In-Customer automatically added to the business. Customers has different options for payments. After purchasing an item automatically generates a bill from the system. All the details of the payments are stocked in the system for each customer. We can see the analyzed details of stock changes by the online system in hardware shop. All the staff details are managed and stored by online system. All purchases for the hardware shop are managed and stored by the online system. All the accounting details in hardware managed by the online system. These are the main functions that system is designed to do</p>

## Tools and Technologies used
- ## **Backend Framework** - Laravel Version 8 <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
- ## **Frontend Framework** - Bootstrap <p align="center"> <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank"><img src="https://i.stack.imgur.com/dMXbE.png" width="300"></a></p>
- ## **DBMS** - MySQL <p align="center"><a href="https://www.mysql.com/" target="_blank"><img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" width="200"></a></p>

- ## **Handling the administration of MySQL** - phpMyadmin <p align="center"><a href="https://www.phpmyadmin.net/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/PhpMyAdmin_logo.svg/800px-PhpMyAdmin_logo.svg.png" width="200"></a></p>


## To run the application

### Prerequisities

 ###### Following servers and packages should be installed prior to the the application installation

- xammp server with php version 8
- latest version of composer
- mySQL server

### Installation
  
######  Following commands can be followed to run the application successfully

1. Create a new folder, go inside the folder and open git bash from it
2. Clone the project
    ```
    git clone https://github.com/Shashika503/OnlineShopManagementSystem.git
    ```
3. Go inside the cloned project folder using CD command
4. Install composer packages
    ```
    composer install
    ```
5. Open the cloned project from VS code IDE
6. Change the database name in the .env.example with the relevant DB name and Rename the .env.example file as .env
7. Create a new Database inside MySQL DBMS with the DB name given in the .env file
8. Generate keys 
    ```
    php artisan key:generate
    ```
9. Do the table migrations 
    ```
    php artisan migrate
    ```
10. Run the server 
    ```
    php artisan serve
    ```
11. Run the application by using the suggested URL in a prefered web browser

## Contributing
* cmd to create a new feature branch in the repo                                   
        ``git checkout -b newFeatureBranchName``                            
        ``git push origin newFeatureBranchName`` (now check whether it's created in github)
* cmd to checkout to a branch which is already created                              
        ``git checkout featureBranchName``                              
        
    ###### When working in your branch,                                                                       
* if multiple files created, add them all at once:                                      
        ``git add . ``                                                  
        
    ###### After doing any modification to the code in your branch,                                                  
* commit it:                                        
        ``git commit -m "commitName"``                                  
* push it to the featureBranch in github                                        
        ``git push origin featureBranchName``                                   
        
    ###### When your featureBranch is ready to merged with the Master branch,                              
* pull the latest updates in github master to local master                              
        ``git checkout master``                                     
        ``git pull``                                                                                
* Now your featureBranch can be merged to local master                                                                                                                                     
        ``git merge featureBranchName``                                             
* If everything works(run) perfect, push the updates in local master to github master:                                      
        ``git push``                        
        
## Acknowledgment
<p align="center"> <a href="https://www.sliit.lk/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/en/a/a6/SLIIT_Logo_Crest.png" width="100"></a></p>
<p align="center"> This is a group project done for Information Technology Project module in second year, SLIIT by eight team members </p>
