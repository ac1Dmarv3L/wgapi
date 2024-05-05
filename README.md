# WGAPIWrapper
## Wrapper for Wargaming API

### Dependencies:
- PHP 7.2.5 or higher

The wrapper uses GuzzleHttp library.

You can run locally an example of using this PHP class.
Follow the next steps:
- Go to this app's directory in your terminal.
- Build Docker container:
    `docker build -t <your_container_name> .`, for example: `docker build -t wg-api-wrapper .`
- Run the Docker container:
    `docker run -d -p 80:80 -v <current_directory_on_your_computer>:/var/www/html <your_container_name`, for example: `docker run -d -p 80:80 -v "D:/Server/wg-api-wrapper:/var/www/html" wg-api-wrapper`
This will run the container with the next tools: PHP 8.3. Apache 2, composer. The web-interface is available by addresses `localhost` or `127.0.0.1`.