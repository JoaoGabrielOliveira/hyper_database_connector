## interface Hyper/Record/Driver
Interface to create your database drivers
```php
public function __construct($params, array $options = []);
public function connect();
```



## class Hyper/Record/Database
Representation of a database

```php
public function __construct(DatabaseConnection $connection)
```
```php
public function connect();
```
