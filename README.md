# Laravel Shopping Cart Project

This project is a simple shopping cart application. It's a single-page application that provides basic shopping functionalities such as listing products, adding them to the cart, and removing them from the cart.

## Features

- **Product Listing:** At the start of the application, products fetched from the database are listed.
- **Add and Remove from Cart:** Each product can be added to the cart using the "Add to Cart" button. Products in the cart can be removed using the "Remove" button.
- **Dummy Data:** Dummy data has been seeded into the database using Laravel's Faker library.
- **Docker Setup:** The project is Dockerized. Docker Compose manages Laravel, MySQL, and PhpMyAdmin containers.

## Technologies and Tools

- **Laravel:** PHP-based web application framework.
- **MySQL:** Database management system.
- **PhpMyAdmin:** Web-based interface for managing MySQL databases.
- **Docker:** Containerization for easier deployment and portability.

## Running the Project

1. **Docker Installation:** Install Docker Desktop on your computer.
   
2. **Downloading the Project:** Clone the project using Terminal or Git bash:
   ```bash
   git clone <repository-link>
   cd <project-directory>
3. Running with Docker:
    ```bash
    docker-compose up -d --build
4. Accessing the Application:

    - Application: http://localhost:9000/
    - PhpMyAdmin: http://localhost:9001/

5. Adding Dummy Data (Optional):
    ```
    docker-compose exec laravel-app php artisan db:seed
    ```
6. Stopping the Application:
    ```
    docker-compose down
    ```
## Developer
This project is developed to enhance backend skills, with frontend design being a secondary focus.