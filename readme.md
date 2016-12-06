# JMI Inventaris Modul Karyawan

Testing module karyawan


## Installation Step
1. Composer  
    * require and repositories
    
    ```
    "require": {
        ...

        "jalinmodule/karyawan": "dev-master"
    },
    ```
    ```
    "repositories":[
        ...

        {
            "type":"git",
            "url":"git@git.ip:jalinmodule/karyawan.git"
        }
    ],
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