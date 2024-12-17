<?php
require_once(__DIR__ . '/vendor/autoload.php');
function convertToHTML($control)
{
    if ($control instanceof \App\Button) {
        return sprintf(
            '<button style="background:%s; width:%s; height:%s;" name="%s" value="%s">%s</button>',
            $control->getBackground(),
            $control->getWidth(),
            $control->getHeight(),
            $control->getName(),
            $control->getValue(),
            $control->getValue()
        );
    } elseif ($control instanceof \App\Text) {
        return sprintf(
            '<input type="text" style="background:%s; width:%s; height:%s;" name="%s" value="%s" placeholder="%s">',
            $control->getBackground(),
            $control->getWidth(),
            $control->getHeight(),
            $control->getName(),
            $control->getValue(),
            $control->getPlaceholder()
        );
    } elseif ($control instanceof \App\Label) {
        return sprintf(
            '<label style="background:%s; width:%s; height:%s;" for="%s">%s</label>',
            $control->getBackground(),
            $control->getWidth(),
            $control->getHeight(),
            $control->getParentName(),
            $control->getParentName()
        );
    } else {
        return '';
    }
}

$button = new \App\Button("red", "100px", "50px", "submitButton", "Submit", true);

$text = new \App\Text("white", "300px", "40px", "username", "", "Enter your username");

$label = new \App\Label("transparent", "150px", "30px", "labelForUsername", "", $text);

echo convertToHTML($button) . "\n";
echo convertToHTML($label) . "\n";
echo convertToHTML($text) . "\n";
