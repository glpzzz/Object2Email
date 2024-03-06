# Object2Email

Simple solution to prepare a Symfony Email by implementing an interface in any class

The idea is to provide a common interface to for objects to be sent via Symfony Mailer.

## Installation

Install using `composer`

```bash
  composer require glpzzz/object2email
```
    
## Usage

```php
$p = new Person() // or obtain from db
// work with it, modify it, set the properties...
$mailer->send($p->toEmail());
```

## License

[MIT](https://choosealicense.com/licenses/mit/)


