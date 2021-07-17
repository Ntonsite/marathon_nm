## About LOAN

It is a tool Designed to help small SME'S on providing status to customer regarding their application status. (Approval / Rejection)

### Scope
A tool has some random data of customers with whom have sent their application, then an officer can just login and update their application & sms is sent immediately to a customer in regards to his application.

#### Out of scope
*A tool did not cover EKYC for customer, rather use the available data sets to add sms notification service on top.*

## Deployment Steps

You can run on local machine having Apache, MYSQL, Composer installed.

Steps:
1. Git clone repository
2. cd > directory
3. Run composer install
4. Create .env file on root directory
5. copy .env.example contents to new file created .env
6. fill in Database credentials
7. Run php artisan migrate --seed
8. Run php artisan serve, it should run on localhost at port 8000
9. Visit a browser on localhost at that particular port
  i.e http://localhost:8000
10. With Provided credentials you can login and navigate to Manage Loans & Update

## Access
Login using the following Credentials:

*email: mwamlimantonsite@gmail.com*

*password: maths2020*

