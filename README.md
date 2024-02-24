# How To Use

Follow these steps to set up the project:

1. **Clone the repository** using Git Bash:
    ```bash
    git clone https://github.com/ca-kraa/dashboard-admin.git
    ```
2. **Open the project** with Visual Studio Code.

3. **Open the terminal** and run the following command to install the necessary dependencies:
    ```bash
    composer install
    ```
    If you encounter any issues, try updating the composer:
    ```bash
    composer update
    ```

4. **Set up the `.env` file**:
    - Copy the example environment file provided by Laravel:
        ```bash
        cp .env.example .env
        ```
    - Open the `.env` file and update the environment variables (like `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, etc.) according to your local development environment.

5. **Generate an application key**. Laravel requires this to secure user sessions and encrypted data. Run the following command:
    ```bash
    php artisan key:generate
    ```
    This command will generate a key and copy it to your `.env` file.

6. **Enjoy!**

This project uses the AdminLTE template.
