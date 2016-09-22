# php-markup
Create markup code suitable for reddit.

## Examples

use Crecket\PHPMarkup\Format;

$code = new \Crecket\PHPMarkup\Code(array(
    'html_mode' => false,
    'escape_characters' => true
));

```PHP
// some random table
$code->table(
    array(
        Format\Italic::get('some random text'),
        'column2',
        'column3'
    ), array(
    array(
        rand(1, 1000),
        rand(1, 1000),
        rand(1, 1000),
    ),
    array(
        rand(1, 1000),
        rand(1, 1000),
        rand(1, 1000),
    ),
));

// new line
$code->newLine();

$code->link('some text()', 'https://www.masterypoints.com');

$code->newLine();

$code->text(
    Format\Italic::get('some random text')
);

$code->newLine();

$code->text(
    Format\Escaped::get('*some random text*')
);

// get result
$code->newLine();
$code = $code->get();
```

