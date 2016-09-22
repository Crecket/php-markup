# php-markup
Create markup code suitable for reddit.

## Examples

```PHP
use Crecket\PHPMarkup\Format;

$code = new \Crecket\PHPMarkup\Code();

// a table with some text and custom headers
$code->table(
    array(
        Format\Italic::get('italic column header'),
        Format\Strike::get('bad column'),
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

// basic link
$code->link('a title for my link', 'https://www.masterypoints.com');

// titles
$code->line(Format\Title1::get('title1'), true);
$code->line(Format\Title2::get('title2'), true);
$code->line(Format\Title3::get('title3'), true);
$code->line(Format\Title4::get('title4'), true);

$code->line(Format\Italic::get('italic text'), true);
$code->line(Format\Bold::get('bold text'), true);
$code->line(Format\Strike::get('strike through text'), true);

// automatically makes sure all words are super script
$code->line(Format\SuperScript::get('super script text'), true);

// code formatting
$code->line(Format\Formatted::get("formatted text \nmultiline \ncode"), true);

// code inline formatting variation
$code->line(Format\InlineFormatted::get('inline formatted text'), true);

// escape any special characters
$code->line(Format\Escaped::get('*escaped special characters*'), true);

// a qouted multi line text
$code->line(Format\Qoute::get("wew I'm important \nsome random dude"), true);

// get result
$markup = $code->get();

```

