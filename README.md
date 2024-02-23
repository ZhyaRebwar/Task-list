<h1 align="center" font-size="large" >Task List project</h1>

Task list is a project which made using larave. The interface was created using blade and bootstrap.
The project allows the user to create tasks and mark them when completed also delete and edit the tasks.

- Create tasks
- Delete tasks
- Update tasks
- Read tasks

so, basicaly the crud operation.

## Setting up the project on your PC

It is required to download Apache, Docker, Composer, Python.

- We use the python to be able to run the setup of the project like database and running the docker files for those who don't have knowledge about docker.
- The composer and apache is for Laravel.
- The docker is for the database and admin configuration and view, the database is MySQL and the container is Adminer.

## First

Start by running the "python setup.py" command to setup the docker and check composer and docker.

## Second

Run "python start.py" to be able to run the docker and laravel.

## Third

Run "python database_and_records.py" to be able to configure the database and set the fake records into it.

## stopping the docker container

To stop the container you can use "python stop.py" command which stops the container.

## Notes

The database name is "task-list" which is already configured in the Laravel .env file.

The path to open Laravel is: localhost:8000
The path to open the adminer is: localhost:8080
