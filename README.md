# Aegyo.id --CMS

CMS dan API pembuatan artikel aegyo.id

## Installation

Download file atau clone. Install composer. Masuk kedalam File
```bash
composer install
```

## Setting Database
Ubah settingan environment pada file .env dengan settingan komputer yang digunakan. Migrate database yang sudah tersedia

```bash
php artisan migrate
```
lalu buka
```bash
http://localhost:8000/
```

## API Article
Get All data (GET METHOD)
```bash
http://localhost:8000/api/articles
```
Get data by ID (GET METHOD)
```bash
http://localhost:8000/api/articles/{id}
```
Post Data (POST METHOD)
```bash
http://localhost:8000/api/articles/{id}
```
Update Data (PUT METHOD)
```bash
http://localhost:8000/api/articles/{id}
```
Delete Data (DELETE METHOD)
```bash
http://localhost:8000/api/articles/{id}
```
example response and request
```bash
[
    {
        "id": 3,
        "category_id": 2,
        "title": "knbjnkijnjo",
        "description": "nknjnojno",
        "content": "<p>nmnknlknlknml</p>",
        "created_at": "2022-02-24T21:07:53.000000Z",
        "updated_at": "2022-02-24T21:07:53.000000Z"
    }
]
```
## API Category
Get All data (GET METHOD)
```bash
http://localhost:8000/api/category
```
Get data by ID (GET METHOD)
```bash
http://localhost:8000/api/category/{id}
```
Post Data (POST METHOD)
```bash
http://localhost:8000/api/category/{id}
```
Update Data (PUT METHOD)
```bash
http://localhost:8000/api/category/{id}
```
Delete Data (DELETE METHOD)
```bash
http://localhost:8000/api/category/{id}
```
example response and request
```bash
[
    {
       "id": 4,
       "name": "haloo",
       "updated_at": "2022-02-24T23:23:11.000000Z",
       "created_at": "2022-02-24T23:23:11.000000Z"
    }
]
```
