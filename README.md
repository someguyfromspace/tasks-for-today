# Tasks for Today Management System

A CodeIgniter 4 web app for tracking daily tasks.
Built for IT0049 (Web System Technologies) - Technical Summative Assessment 1.

**Live Demo:** http://jiangonzales.free.nf
**Developer:** Jian Robert A. Gonzales - Section TB31

## Features
- `/` Welcome page: shows only today's tasks
- `/tasks` Task List: shows every task, ordered by date
- `/profile` Profile: shows the demo user's information
- `/about` About: identifies the developer

## Requirements
- PHP 8.1 or higher (with the intl and mbstring extensions enabled)
- MySQL / MariaDB
- Composer

## Setup Instructions
1. Clone the repository:
```
   git clone https://github.com/someguyfromspace/tasks-for-today.git
   cd tasks-for-today
```
2. Install dependencies:
```
   composer install
```
3. Copy the file `env` to `.env`, then set these values:
```
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   database.default.hostname = 127.0.0.1
   database.default.database = tasks_db
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
```
   (Change the port if your MySQL uses a different one.)
4. Create an empty database named `tasks_db`.
5. Run the migrations to create the tables:
```
   php spark migrate
```
6. Seed the sample data:
```
   php spark db:seed TaskSeeder
   php spark db:seed UserSeeder
```
   Alternatively, import `database/tasks_db.sql` using phpMyAdmin.
7. Start the app:
```
   php spark serve
```
   Then open http://localhost:8080

## Database
- `tasks`: id, title, status, task_date, created_at (8 sample records across 3 dates, including today)
- `users`: id, username, full_name, email, created_at (1 demo record)

## Project Structure
- `app/Controllers` - Home, Tasks, Profile, About
- `app/Models` - TaskModel, UserModel
- `app/Views` - layout, welcome, tasks, profile, about
- `app/Database/Migrations` - table schemas
- `app/Database/Seeds` - sample data
- `database/tasks_db.sql` - database export
