# Task Manager
A task management application built with **Laravel** (backend) and **Next.js** (frontend) following **Clean Code Architecture** principles.

## Backend (Laravel)

### Architecture
This project follows **Clean Code Architecture** to ensure a clear separation of concerns and maintainable code. The backend is structured as follows:

- **App**:
  - **Domain Layer**: Contains core business logic and services.
  - **Data Layer**: Apply Repository Design Pattern.
  - **Presentation Layer**: API controllers.

### Setup
1. **Clone the repository**:
   ```bash
   git clone https://github.com/hossamadelelsayed/task-manager.git
   cd task-manager/task-manager-backend
2. **Install dependencies**:
    ```bash
     composer install
3. **Environment Configuration**: Copy .env.example to .env and configure your database settings.
    ```bash
     cp .env.example .env
4. **Run migrations**:
    ```bash
     php artisan migrate
5. **Run Seeders**:
    ```bash
     php artisan db:seed
6. **Run the server**: Start the Laravel development server
    ```bash
     php artisan serv
7. **API Endpoints**
    GET /api/v1/tasks: List all tasks.
    ```bash
    http://localhost:8000/api/v1/tasks

## Frontend (Next.js)

### Architecture
The frontend is built using Next.js and React with clean separation between components and hooks. It fetches tasks from the Laravel API and displays them in a user-friendly interface

- **File Structure**:
    ```bash
    task-manager-frontend/
    │
    ├── components/
    │   └── TaskCard.tsx
    │
    ├── pages/
    │   ├── index.tsx
    │
    ├── styles/
    │   └── globals.css
    └── public/

### Setup
1. **Clone the repository**:
   ```bash
   cd task-manager/task-manager-frontend
2. **Install dependencies**:
    ```bash
     npm install
3. **Environment Configuration**: Add your Laravel API base URL to the .env.local file.
    ```bash
     NEXT_PUBLIC_API_BASE_URL=http://localhost:8000/api
4. **Run the Next.js development server**:
    ```bash
     npm run dev


**How to Use the Application**
  - Start the Laravel API: Run php artisan serve to start the Laravel API at http://localhost:8000.
  - Start the Next.js frontend: Run npm run dev to start the frontend at http://localhost:3000.
  - Access the task manager: Open a browser and go to http://localhost:3000 to see the task management dashboard.
