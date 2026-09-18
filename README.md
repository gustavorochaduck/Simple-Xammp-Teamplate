Xampp Web Application Setup with Docker Compose

This is a guide to setting up a local web development environment using Docker and Docker Compose for easy deployment and management of your PHP applications.

Table of Contents:

1. Prerequisites
2. Configuration Breakdown
3. Setting Up the Environment
4. Accessing the Application
5. Understanding the Services
6. Starting, Stopping, & Managing Docker
7. Further Exploration
8. Credentials

⸻

1. Prerequisites

* Docker: Ensure you have Docker installed on your system. You can download it from https://docs.docker.com/install/
* Linux Terminal (Bash): You’ll use the command line to interact with Docker and manage containers.

⸻

2. Configuration Breakdown

* dockerfile: This file defines the base image and extensions for your web server, ensuring compatibility and security of the XAMPP server environment.
* docker-compose.yaml: This file orchestrates the services (web, db, phpMyAdmin) and their dependencies to create a self-contained system that runs on Docker containers.
* config.yaml: Defines a basic model with an auto detection feature, demonstrating how your application data can be defined in YAML format for use within this setup.

⸻

3. Setting Up the Environment

1. Create Project Directory: Create a new folder to store your project’s files and code (e.g., myproject).
2. Navigate to the Project Directory:

cd myproject

3. Start the Docker Services:
```bash
docker compose up -d
```
⸻

4. Accessing the Application

After starting the Docker containers, you can access the services through your web browser:

* Web Application:
    http://localhost:8080
    This opens the index.php file of the web application.
* phpMyAdmin:
    http://localhost:8081
    This opens the phpMyAdmin interface, which can be used to manage the MySQL database.

Make sure that all Docker services are running before accessing these addresses.

⸻

5. Understanding the Services

* web service: A basic web server using XAMPP to host your application’s files, such as PHP, HTML, CSS, and JavaScript. It is accessible through port 8080.
* db service: A MySQL database service running on port 3306. It provides a storage solution for your application data and can be managed through phpMyAdmin.
* phpmyadmin service: A web-based interface for managing the MySQL database. It is accessible through port 8081 and allows you to create, modify, delete, and inspect database data.

⸻

6. Starting, Stopping, & Managing Docker

Stop Services:
```bash
docker compose stop
```
Start Services:
```bash
docker compose up -d
```
Stop and Remove Containers:
```bash
docker compose down -d
```
⸻

7. Further Exploration

* Customizations: You can adjust the configuration files dockerfile, config.yaml, and docker-compose.yaml to modify how your application behaves, for example, adding new PHP modules or configuring environment variables.

⸻

8. Credentials
```yaml
MYSQL_ROOT_PASSWORD: 123456789
MYSQL_DATABASE: my_database
MYSQL_USER: dev_user
MYSQL_PASSWORD: 123456789
```