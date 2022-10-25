# note-taking-app

## Basic setup & installation

1. Download & install [XAMPP](https://www.apachefriends.org/download.html). This tool includes PHP, MySQL, and PhpMyAdmin. Proceed with default options.
2. Delete the contents of the `C:/xampp/htdocs` folder.
3. Open a terminal/command prompt inside the `C:/xampp/htdocs` folder.
4. Clone this repository using Git, inside the `C:/xampp/htdocs` folder:

```bash
git clone https://github.com/yurixander/note-taking-app.git .
```

The `index.php` file should be directly under the `htdocs` folder. In other words: `C:/xampp/htdocs/index.php`.

5. Open the XAMPP Control Panel application. If you're using Windows, simply open your Start menu and search for it.
6. Start the Apache and MySQL services, by clicking their "Start" buttons respectively.
7. Now you should be able to navigate to http://localhost/ in your machine, and the Note Taking App's frontend should come up. If not, then you may have done one of the steps incorrectly, or likely misplaced the files. Do not hesitate to ask for help on the Discord server!
8. You can begin development by opening the `C:/xampp/htdocs` folder in your IDE/editor of choice.
9. Inspect the files and source code to familiarize yourself with the project's structure. Any `.php` file is part of the backend. The `public` folder contains the frontend file(s).

## Background/requirements (what you need to know)

### Backend:

1. [PHP](https://www.w3schools.com/php/default.asp) - Language used for writing the web API.
2. [Databases (MySQL)](https://www.w3schools.com/sql/default.asp) - Used to store user authentication information.
3. [PHPMyAdmin](https://www.phpmyadmin.net/) - Used to manage the database.
4. Web API. - Used to communicate with the frontend clients (people).
5. [JSON](https://www.w3schools.com/js/js_json_intro.asp). - A specific notation used for web/HTTP request data transfer between the backend and frontend.
6. HTTP Requests (Headers, Body), responses, and response codes. - The protocol used for used for data communication between the backend (server) and frontend (browser).
7. [Postman](https://www.postman.com/) - Easy UI used to quickly test that your backend endpoints work as expected.

### Frontend:

1. [HTML](https://www.w3schools.com/html/default.asp)
2. [Super basic CSS](https://www.w3schools.com/css/default.asp)
3. [JavaScript requests & DOM manipulation basics](https://www.w3schools.com/js/default.asp) - All needed is how to send requests and receive responses, and add and remove elements from/into the DOM. Some functions that can be used for this would be ".appendChild()", ".remove()". Then, "fetch" would be used for HTTP requests.
