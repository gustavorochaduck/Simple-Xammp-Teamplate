## Xampp Web Application Setup with Docker Compose

This is a guide to setting up a local web development environment using Docker and Docker Compose for easy deployment and management of your PHP applications. 


**Table of Contents:**

1. **Prerequisites**
2. **Configuration Breakdown**
3. **Setting Up the Environment**
4. **Understanding the Services**
5. **Starting, Stopping, & Managing Docker**
6. **Further Exploration**


---

**1. Prerequisites**

*  **Docker:** Ensure you have Docker installed on your system. You can download it from [https://docs.docker.com/install/](https://docs.docker.com/install/) 
*  **Linux Terminal (Bash):** You'll use the command line to interact with Docker and manage containers.


**2. Configuration Breakdown**

* **`dockerfile`:** This file defines the base image and extensions for your web server, ensuring compatibility and security of the XAMPP server environment.
* **`docker-compose.yaml`:**  This file orchestrates the services (web, db, phpMyAdmin) and their dependencies to create a self-contained system that runs on Docker containers. 
* **`config.yaml`:** Defines a basic model with an auto detection feature, demonstrating how your application data can be defined in YAML format for use within this setup.

**3. Setting Up the Environment**

1.  **Create Project Directory:** Create a new folder to store your project's files and code (e.g., `myproject`).
2.  **Navigate and Generate Docker-compose:** 
    ```bash
    cd myproject
    docker-compose up -d 
    ```

**4. Understanding the Services**

*   **`web` service:**  A basic web server using XAMPP to host your application's files (e.g., HTML, CSS, JavaScript). It exposes port 8080 for access and manages the web applications within it.
*   **`db` service:** A MySQL database service running on port 3306. It provides a storage solution for your data and can be managed via phpMyAdmin tool that runs on port 8081. 
*   **`phpmyadmin` service:** A simple interface for managing the database, making it easy to create, modify and delete data as needed.

**5. Starting, Stopping, & Managing Docker**


* **Stop Services:**  
    ```bash
    docker-compose stop 
    ``` 
 
* **Start Services:** 
    ```bash
    docker-compose up -d
    ```



**6. Further Exploration**

*   **Customizations:** You can adjust the configuration files `dockerfile`, `config.yaml` and `docker-compose.yaml` to modify how your application behaves, for example, adding new PHP modules or configuring environment variables. 


---

Let me know if you have any further questions!
