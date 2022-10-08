## Flow for this application

The application's flow is as follows:

1. The user (browser, JavaScript action, etc.) initiates an HTTP request to the PHP application.
2. The PHP application receives the request and routes it to the appropriate controller.
3. The controller receives the request and its appropriate request method handler is invoked.
4. The controller makes use of the appropriate model to retrieve data from the database.
5. The controller proceeds to return the data retrieved from the database.
6. The user receives the data and the JavaScript handles and displays it on the user's browser.

## index.php file

This serves as the entry point for the backend application. Its code is responsible for routing an incoming request to its appropriate controller.

You can try to take a look at it but it isn't important to understand.

## .env file

The application uses a `.env` file to store environment variables. The `.env` file is not included in the repository, because secrets & passwords should not be pushed to a public repository for security purposes.

You can create a `.env` file by copying the `.env.example` file and filling in the appropriate values. These values would then be used by the application to initiate a connection to the database.

## API & controllers

Controllers are objects/classes that handle incoming requests, make use of models, and finally return data to the user. The controllers are located in the `controllers` directory.

## Database & models

Models are objects/classes used to *model* information from the database. They also have several utility functions that can be used to perform database operations specifically on the model's corresponding table. The models are located in the `models` directory.
