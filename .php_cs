<?php

$header = <<<EOF
This file is part of bytesystems/contao-news-homesite

(c) 2020 bytesystems ITS GmbH

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

@package    bits_homesite
@author     Daniel Heim
@copyright  2020 bytesystems ITS GmbH
@license    LICENSE LGPL-3.0

EOF;

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__.'/src'])
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        'align_multiline_comment' => true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'general_phpdoc_annotation_remove' => [
            'expectedException',
            'expectedExceptionMessage',
        ],
        'header_comment' => ['header' => $header],
        'heredoc_to_nowdoc' => true,
        'linebreak_after_opening_tag' => true,
        'no_null_property_initialization' => true,
        'no_superfluous_elseif' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'php_unit_strict' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_order' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'strict_comparison' => true,
        'strict_param' => true,
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
;
