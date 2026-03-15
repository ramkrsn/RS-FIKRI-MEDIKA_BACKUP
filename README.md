# RS FIKRI MEDIKA - Hospital Management System

**RS FIKRI MEDIKA** is a comprehensive web-based hospital management system built with Laravel. It streamlines hospital operations including patient registration, doctor scheduling, queue management, and pharmacy services.

## 🚀 Features

- **👨‍⚕️ Manajemen Dokter**: Manage doctor profiles, specialties, and schedules.
- **🏥 Manajemen Pasien**: Full CRUD for patient records, including inpatient and outpatient status.
- **📅 Jadwal Pertemuan**: Online appointment booking system for patients.
- **🎫 Sistem Antrian**: Real-time queue management for doctor consultations and pharmacy.
- **💊 Farmasi & Obat**: 
    - Inventory management of medicines.
    - Online medicine reservation.
    - Information center for drug usage.
- **📰 Artikel Kesehatan**: Informative health blog/articles for visitors.
- **🏢 Fasilitas Rumah Sakit**: Information about available hospital facilities and rooms.
- **💬 Feedback & Keluhan**: Integrated system for patient feedback and reviews.
- **👥 Kunjungan Pasien**: Management of visitor logs for patients.
- **🔐 User Authentication**: Secure login and registration with profile management.

## 🛠️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Blade Templates, Tailwind CSS (implied by modern Laravel), Vite
- **Database**: MySQL
- **Authentication**: Laravel Sanctum & Laravel UI

## 📋 Prerequisites

- PHP >= 8.2
- Composer
- MySQL/MariaDB
- Node.js & NPM

## ⚙️ Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd RS-FIKRI-MEDIKA_BACKUP
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   Create a database named `RS_FIKRI_MEDIKA2` in your MySQL server, then update your `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=RS_FIKRI_MEDIKA2
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run Migrations & Seeders**
   ```bash
   php artisan migrate --seed
   ```

6. **Compile Assets**
   ```bash
   npm run dev
   ```

7. **Start the Server**
   ```bash
   php artisan serve
   ```

## 📂 Project Structure Highlights

- `app/Models/`: Contains core business entities (Pasien, Doctor, Antrian, etc.).
- `app/Http/Controllers/`: Handles business logic and routing responses.
- `database/migrations/`: Database schema definitions.
- `resources/views/`: Blade templates for the user interface.
- `routes/web.php`: Definition of all web routes.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
