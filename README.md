# Kroon Studio

## Description
This is a Wordpress Developer test task for Kroon Studio. The task instuctions have been delivered to you via email.

## Requirements
- Docker (https://docs.docker.com/engine/install/)
- Docker Compose (https://docs.docker.com/compose/install/)
- A GitHub Account

## Usage
1. Use this template repository to create a new Private Repository (https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template)
2. Clone your new repository to your local machine
3. Ensure that Docker Engine and Docker Compose are installed and running
4. Open a terminal and navigate to the root of your local repository
5. Run ```docker-compose up -d```
6. Open http://localhost:8000 in your browser
7. Follow the task instructions
8. Write your notes in the [TASK_NOTES.md](TASK_NOTES.md) file
9. When you finish everything, export the database and store it in the ```db_dumps/candidate_db.sql``` folder using phpMyAdmin. This will allow us to import your database and test your work in case the db_data folder is corrupted.
10. Commit your changes to Git as you go
11. Before you push your changes to GitHub, stop the containers by running ```docker-compose stop``` and wait until all three containers are stopped. This will ensure that the database files are not corrupted.
12. Push your changes to GitHub
13. Invite us to your Private repository

## Credentials
- Wordpress Admin Username: ```admin```
- Wordpress Admin Password: ```password```
- Wordpress Database Name: ```MyWordPressDatabaseName```
- Wordpress Database Username: ```MyWordPressUser```
- Wordpress Database Password: ```Pa$$5w0rD```
- Wordpress Database Host: ```db```
- Wordpress Database Port: ```3306```

## Installation

```bash
docker-compose up -d
```


## Alternative Installation
We are aware you might not be familiar with Docker. While we strongly recommend you give Docker a second try, if you are still not able to run the Docker Compose command, you can run the `wordpress_site` within your preferred environment. In the db_dumps folder you will find a database dump file. You can import this file into your database and use the credentials above to connect to it. You will also need to update the wp-config.php file with the new database credentials.

## Links
- Wordpress: http://localhost:8000
- PhpMyAdmin: http://localhost:8080
- Task Notes: [TASK_NOTES.md](TASK_NOTES.md)

## Folder Structure
- **db_data:** This folder contains the database files. As you move on with your tasks, this folder will be populated with the database changes. **Do not modify this folder!**
- **db_dumps:** This folder contains the database dump file. If you use the docker-compose command, the database should be already imported. In any case, here you can find a copy of the initial database dump file: ```db_dumps/initial_db.sql```.
- **wordpress_site:** This folder contains the Wordpress site files. Here you will work on your tasks.
- **docker-compose.yml:** This file contains the Docker Compose configuration. You should not need to modify this file.
- **TASK_NOTES.md:** You should write your task notes in this file.
- **.gitignore:** This file contains the files and folders that should be ignored by Git. **Do not modify this file!**

## Stopping the Containers
If you want to stop the containers, you can run:
```bash
docker-compose stop
```

## Starting the Containers
If you want to start the containers, you can run:
```bash
docker-compose start
```

## Cleanup and Removal
After you push everything and deliver your task, we assume you would like to keep your machine clean.
You can remove the containers and volumes by running:
```bash
docker-compose down
```

# Thank You!