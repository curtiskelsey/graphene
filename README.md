# Graphene

A simple tool extension library for Carbon. The focus of these tools is on 
the relationship between two or more `DatePeriod`s 
https://graphene.curtiskelsey.info

```php
$lastWeek = Graphene::create(Carbon::now()-subDays(8), Carbon::now()->subDay());
$thisWeek = Graphene::create(Carbon::now(), Carbon::now()->addDays(7));

$thisWeek->overlaps($lastWeek); // false

$thisWeek->disjointFrom($lastWeek) // true

$thisWeek->contains($lastWeek) // false

$thisWeek->containedBy($lastWeek) // false

$thisWeek->equalTo($lastWeek) // false

$thisWeek->getOverlap($lastWeek) // false

$thisWeek->getOuterJoin($lastWeek) // Graphene[] 

$thisWeek->isBefore($lastWeek) // false

$thisWeek->isAfter($lastWeek) // true

$thisWeek->getBetween($lastWeek) // false
```

## Installation

### With Composer

```
$ composer require curtiskelsey/graphene
```

```json
{
    "require": {
        "curtiskelsey/graphene": "dev-master"
    }
}
```

```php
<?php
require 'vendor/autoload.php';

use Graphene\Graphene;

printf('Default: %s', Graphene::now());
```

## Docs

[http://graphene.curtiskelsey.info/docs](http://graphene.curtiskelsey.info/docs)
