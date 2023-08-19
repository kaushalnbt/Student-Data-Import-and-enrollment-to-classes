# Student Data Management API

Welcome to the Student Data Management API project. This API allows you to import student records, enroll students in different cohorts, and view student data. Here, we'll guide you through setting up and using this API.

## Table of Contents

- [Getting Started](#getting-started)
- [Importing Student Data](#importing-student-data)
- [Enrolling Students](#enrolling-students)
- [Viewing Student Data](#viewing-student-data)
- [Documentation](#documentation)

## Getting Started

To get started with this project, follow these steps:

1. **Clone the Repository**: Start by cloning this repository to your local machine.

   ```bash
   git clone <repository-url>
Install Dependencies: Navigate to the project directory and install the required dependencies using Composer.

bash
Copy code
composer install
Set Up Environment Variables: Create a .env file by copying the .env.example file and configuring it with your database and mail settings.

Generate Application Key: Generate the Laravel application key.

bash
Copy code
php artisan key:generate
Run Migrations: Set up the database tables by running the migrations.

bash
Copy code
php artisan migrate
Start the Development Server: You can use Laravel's built-in development server to run the API locally.

bash
Copy code
php artisan serve
The API will now be accessible at http://localhost:8000.

Importing Student Data
API Endpoint
URL: /import-students
Method: POST
Input: Excel file with student records (Columns: Name, Email, Phone)
Output: Success message and confirmation emails sent to students
To import student data, follow these steps:

Access the import students form by visiting http://localhost:8000/import-students.

Choose an Excel file containing student records and submit the form.

Upon successful import, a confirmation email will be sent to each student.

Enrolling Students
API Endpoint
URL: /enroll-students
Method: POST
Input: Student ID, Array of Cohort Names
Output: Success message and students enrolled in specified cohorts
To enroll students in cohorts, follow these steps:

Access the enroll students form by visiting http://localhost:8000/enroll-students.

Select a student from the dropdown list and specify the cohorts you want to enroll them in.

Submit the form, and the selected student will be enrolled in the chosen cohorts.

Viewing Student Data
API Endpoint
URL: /view-student-data
Method: GET
Output: Paginated list of students with their enrolled cohorts
To view student data, access the API endpoint:

http://localhost:8000/view-student-data
This endpoint will provide a paginated list of students along with the cohorts they are part of.

Documentation
For more details on API endpoints and usage, refer to the official documentation here.

Thank you for using the Student Data Management API. If you encounter any issues or have questions, please feel free to contact me. @kaushalnbt@gmail.com