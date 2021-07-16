# Handling errors and exceptions in PHP


## Installation

Use Composer to install the library with this command:

`composer require sikessem/errors`

Or [click here to download it directly in ZIP format ](https://github.com/SIKessEm/Errors.php/archive/refs/heads/main.zip)


## Usage

If you are using Composer, include the Composer autoload file.
Otherwise, you can use the example below in all cases:

```php
<?php

//...


use SIKessEm\Errors\{
  Catcher,
  Thrower
};


$catcher = new Catcher(function($e) {
  echo "<p>{$e->getMessage()}</p>";
  exit(1);
});

$thrower = new Thrower($catcher);


try {
  1/0;
} catch (\Throwable $e) {
  $thrower->throw($e);
}


//...
```


## Requirements

PHP 8.0.0 or above (at least 8.0.7 recommended to avoid potential bugs)


## Author

SIGUI Kessé Emmanuel | [GitHub](https://github.com/SIKessEm) | [npm](https://npmjs.org/~sikessem) | [Twitter](https://twitter.com/SIKessEm_tweets) | [sikessem@omninf.com](mailto:sikessem@omninf.com) | [sikessem.omninf.com](https://sikessem.omninf.com)


## Security Reports

Please send any sensitive issue to [sikessem@omninf.com](mailto:sikessem@omninf.com). Thanks!


## License
Errors is licensed under the Apache 2.0 License - see the [LICENSE](./LICENSE) file for details.


## Contribution

For any contribution, please follow these steps:

1. Clone the repository with `git clone https://github.com/SIKessEm/Errors.php` or `git remote add origin https://github.com/SIKessEm/Errors.php` then `git branch -M main`
2. Create a new branch. Example: `git checkout -b my_contribution`
3. Make your changes and send them with `git push -u origin main`

You will be informed of the rest.
