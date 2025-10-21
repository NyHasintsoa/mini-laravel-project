# 🚀 Laravel Project

A lot of description about the project

---

## 📜 Table of Contents

-   [About the Project](#📖-about-the-project)
-   [Features](#✨-features)
-   [Tech Stack](#🛠-tech-stack)
-   [Getting Started](#🚀-getting-started)
    -   [Prerequisites](#prerequisites)
    -   [Installation](#installation)
    -   [Running the App](#running-the-app)
-   [Configuration](#⚙-configuration)
-   [Project Structure](#📂-project-structure)

---

## 📖 About the Project

Description about the project

---

## ✨ Features

-   ✅ Authentication with Breeze

---

## 🛠 Tech Stack

-   **PHP** 8.3

---

## 🚀 Getting Started

### Prerequisites

Make sure you have installed:

-   PHP 8.3 (`php -v`)
-   NPM 11.\* (`npm -v`)

### Installation

```bash
# Clone the repository
git clone https://github.com/NyHasintsoa/mini-laravel-project.git

# Go into the project directory
cd your-project-name
npm install
composer install
```

### Running the App

```bash
php artisan serve
```

```bash
npm run dev
```

Access the app at: http://127.0.0.1:8080

## ⚙ Configuration

Configure your database in `.env`

```bash
cp .env.example .env
```

After configuring the database :

```bash
php artisan migrate
php artisan db:seed # seeding database with fake data
```

Authentication

**user :** admin@domain.com  
**password :** Admin@123


## 📂 Project Structure

```bash
.
├── app
│   ├── Http
│   │   ├── Controllers
│   │   ├── Middleware
│   │   └── Requests
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
└── target/

```
