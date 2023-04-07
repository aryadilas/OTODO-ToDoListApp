
# OTODO - To Do List App





## Description
Ini adalah aplikasi to do list sederhana, aplikasi ini dibuat dengan laravel, tailwindcss dan livewire sehingga proses di dalam aplikasi dapat berjalan lebih dinamis.

## User Example
```bash
Email : email@gmail.com
Password : password
```
## Tech Stack

**Client:** HTML, CSS, JS \
**Server:** PHP \
**Framework:** Laravel, Livewire, Tailwindcss


## Installation

Untuk dapat menggunakannya lakukan langkah langkah berikut :

- Clone project dari github
```bash
  git clone https://github.com/aryadilas/OTODO-ToDoListApp.git
```
- Buat .env, copy dari .env-example    
- Buat database baru
- Edit config database pada file .env
- Lakukan Composer Install
```bash
  composer install
```
- Generate key
```bash
  php artisan key:generate
```
- Lakukan migrasi dan seeding
```bash
  php artisan migrate --seed
```
- Buat Symbolic Link
```bash
  php artisan storage:link
```
- Run Aplikasi
```bash
  php artisan serve
```
