## interface Hyper/Record/DatabaseConnection
Interface to create your connections models
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
