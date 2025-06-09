<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# 🫀 Sistem Prediksi Penyakit Jantung Berbasis Web

Sistem ini merupakan aplikasi web yang dirancang untuk membantu tenaga medis atau pengguna umum dalam mengklasifikasikan kemungkinan seseorang mengidap penyakit jantung, menggunakan algoritma **Random Forest**. Sistem dibangun menggunakan framework **Laravel** di sisi frontend, dan **Flask (Python)** di sisi backend untuk menjalankan model Machine Learning.

---

## 🚀 Fitur Utama

- ✅ Input data pasien melalui form interaktif
- ✅ Prediksi penyakit jantung secara real-time
- ✅ Integrasi Laravel dengan Flask API
- ✅ Tampilan antarmuka modern dan responsif (Tailwind CSS)
- ✅ Visualisasi data menggunakan Chart.js

---

## 🧠 Teknologi yang Digunakan

| Layer         | Teknologi                    |
|---------------|------------------------------|
| Frontend      | Laravel Blade, Tailwind CSS  |
| Backend       | Python Flask API             |
| ML Model      | Random Forest (scikit-learn) |
| Komunikasi    | HTTP (Laravel ke Flask)      |

---

## 📥 Cara Menjalankan Proyek Ini

### 1. Jalankan Laravel
```bash
cd KecerdasanBuatan
composer install
cp .env.example .env
php artisan key:generate
php artisan serve

### 2. Jalankan Flask API
```bash
cd backend
python -m venv venv
venv\Scripts\activate
pip install -r requirements.txt
python app.py
Pastikan Flask berjalan di: http://127.0.0.1:5000

## 📊 Contoh Prediksi

Masukkan data seperti:
Usia: 63  
Jenis Kelamin: 1  
Tipe Nyeri Dada: 3  
Tekanan Darah: 145  
Kolesterol: 233  
Gula Puasa: 1  
EKG Istirahat: 0  
Detak Jantung Maks: 150  
Angina Olahraga: 0  
Oldpeak: 2.3  
Slope: 0

Lalu klik Prediksi, dan sistem akan menampilkan:
✅ Positif Penyakit Jantung
atau
❌ Negatif / Sehat

## 👨‍💻 Tim Pengembang

Monica Caroline Gulo
Melinda Meikhua Permatasari
Joe Ferdinan
Mohammad Hanif Ardiansyah
