# JMI Inventaris Modul Karyawan

Testing module karyawan


## Installation Step
1. Composer  
    * require and repositories
    
    ```
    "require": {
        ...

        "zein-jayantara/karyawan": "1.*"
    },
    ```
    
    * Update composer
    
    ```
    composer update
    ```

2. config/app.php 
    * Moduls
    
    ```
    'moduls' => [
        ...
        'karyawan' => '/karyawan',
        ],
    ```
    * providers
   
    ```
    Jalinmodule\Barang\KaryawanServiceProvider::class,
    ```
    
3. artisan
   
    ```
    php artisan vendor:publish
    ```

    ```
    php artisan migrate
    ```

## Usage example
```
http://localhost:8000/karyawan
```
