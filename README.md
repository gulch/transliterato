# gulch/transliterato

## Install

You will need [Composer](http://getcomposer.org) installed.
```bash
composer require gulch/transliterato
```

## How to use

```php
use gulch\Transliterato\Processor;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;

$processor = new Processor(new UkrToEngKeyboardLayout());
echo $processor->process('Руддщ цщкдв!'); // Hello world!
```

```php
use gulch\Transliterato\BatchProcessor;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToRusKeyboardLayout;

$processor = new BatchProcessor(
    new UkrToEngKeyboardLayout(),
    new UkrToRusKeyboardLayout()
);
$result = $processor->process('Руддщ фдд еру цщкдві!');
var_export($result); // array (0 => 'Hello all the worlds!', 1 => 'Руддщ фдд еру цщкдвы!',)
```

```php
use gulch\Transliterato\Processor;
use gulch\Transliterato\Scheme\CyrToLatinTranslit;

$processor = new Processor(new CyrToLatinTranslit());
echo $processor->process('простий приклад'); //prostiy priklad 
```