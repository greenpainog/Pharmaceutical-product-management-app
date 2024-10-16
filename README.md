# Pharmaceutical Research Product Management App

This is a **Pharmaceutical Research Product Management App** designed to manage pharmaceutical products used in research. The app is built using **Laravel** (backend) and **Vue.js** (frontend) with CRUD operations to manage information such as the product name, category, active ingredients, research status, batch number, manufacturing date, and expiration date.

## Features

- **Add Products**: Add new pharmaceutical products into the system with details like category, active ingredients, batch number, etc.
- **Update Products**: Modify existing products to reflect new information or changes.
- **Delete Products**: Remove products from the system.
- **View Products**: View a list of products, including all the relevant details.
  
## Tech Stack

- **Backend**: PHP with **Laravel Framework** (RESTful API)
- **Frontend**: **Vue.js**
- **Database**: MySQL (or other compatible databases)

## Installation

### Prerequisites

- PHP 8.x
- Composer
- Node.js
- MySQL (or any other database supported by Laravel)

### Steps

1. **Clone the repository:**
    ```bash
    git clone https://github.com/greenpainog/pharmaceutical-app.git
    cd pharmaceutical-app
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Set up the environment:**
    - Copy `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Set up database credentials and other environment configurations in the `.env` file.

4. **Run migrations:**
    ```bash
    php artisan migrate
    ```

5. **Start the development server:**
    ```bash
    php artisan serve
    ```

6. **Run frontend:**
    ```bash
    npm run dev
    ```

## Usage

- Visit `http://127.0.0.1:8000` to access the app.
- Use the interface to add, update, view, or delete products.
  
## Contribution

Feel free to contribute to this project by forking the repository and submitting a pull request.

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
