<?php

declare(strict_types=1);

namespace Mageplaza\HelloWorld\Plugin;

use Mageplaza\HelloWorld\Controller\Index\Example;

class ExamplePlugin
{
    /**
     * Modify title before being set.
     *
     * @param Example $subject
     * @param string $title
     * @return array
     */
    public function beforeSetTitle(Example $subject, string $title): array
    {
        $title .= " to ";
        echo __METHOD__ . "</br>";

        return [$title];
    }

    /**
     * Modify title after being retrieved.
     *
     * @param Example $subject
     * @param string $result
     * @return string
     */
    public function afterGetTitle(Example $subject, string $result): string
    {
        echo __METHOD__ . "</br>";

        return '<h1>' . $result . 'Mageplaza.com' . '</h1>';
    }

    /**
     * Wrap around the getTitle method.
     *
     * @param Example $subject
     * @param callable $proceed
     * @return string
     */
    public function aroundGetTitle(Example $subject, callable $proceed): string
    {
        echo __METHOD__ . " - Before proceed() </br>";
        $result = $proceed();
        echo __METHOD__ . " - After proceed() </br>";

        return $result;
    }
}
