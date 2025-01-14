<?php
declare(strict_types=1);

namespace Search\Model\Filter\Escaper;

class SqlserverEscaper extends DefaultEscaper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected array $_defaultConfig = [
        'fromWildCardAny' => '%',
        'toWildCardAny' => '[%]',
        'fromWildCardOne' => '_',
        'toWildCardOne' => '[_]',
    ];
}
