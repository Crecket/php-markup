# php-markup
Create markup code suitable for reddit.

## Examples

```PHP
use Crecket\PHPMarkup\Format;

$markup = new \Crecket\PHPMarkup\Markup();

// a table with some text and custom headers
$markup->table(

    // a array with list of the column names
    array(
        Format\Italic::get('italic column header'),
        Format\Strike::get('bad column'),
        'column3'
    ),

    // a array with rows in it
    array(

        // a array with data for the first row
        array(
            rand(1, 1000),
            rand(1, 1000),
            rand(1, 1000),
        ),

        // a array with data for the second row
        array(
            rand(1, 1000),
            rand(1, 1000),
            rand(1, 1000),
        ),
    )
);

// new line
$markup->newLine();

// basic link
$markup->link('a title for my link', 'https://www.masterypoints.com');

// titles
$markup->line(Format\Title1::get('title1'), true);
$markup->line(Format\Title2::get('title2'), true);
$markup->line(Format\Title3::get('title3'), true);
$markup->line(Format\Title4::get('title4'), true);

// basic b/i/s formatting
$markup->line(Format\Italic::get('italic text'), true);
$markup->line(Format\Bold::get('bold text'), true);
$markup->line(Format\Strike::get('strike through text'), true);

// automatically makes sure all words are super script
$markup->line(Format\SuperScript::get('super script text'), true);

// code formatting
$markup->line(Format\Formatted::get("formatted text \nmultiline \ncode"), true);

// code inline formatting variation
$markup->line(Format\InlineFormatted::get('inline formatted text'), true);

// escape any special characters
$markup->line(Format\Escaped::get('*escaped special characters*'), true);

// a qouted multi line text
$markup->line(Format\Qoute::get("wew I'm important \n\- some important dude"), true);

// get result
$markup_result = $markup->get();

```
This results in:

*italic column header*|~~bad column~~|column3
---|---|---
581|85|624
740|421|981
[a title for my link](https://www.masterypoints.com)

# title1

## title2

### title3

#### title4

*italic text*

**bold text**

~~strike through text~~

^super ^script ^text

    formatted text 
    multiline 
    code

`inline formatted text`

\*escaped special characters\*

> wew I'm important 

> \- some important dude