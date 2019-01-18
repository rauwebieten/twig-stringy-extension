# Twig Stringy Extension

[![Build Status](https://travis-ci.org/rauwebieten/twig-stringy-extension.svg?branch=master)](https://travis-ci.org/rauwebieten/twig-stringy-extension)
[![codecov](https://codecov.io/gh/rauwebieten/twig-stringy-extension/branch/master/graph/badge.svg)](https://codecov.io/gh/rauwebieten/twig-stringy-extension)
[![Maintainability](https://api.codeclimate.com/v1/badges/1b42dc9cdf05782957ea/maintainability)](https://codeclimate.com/github/rauwebieten/twig-stringy-extension/maintainability)
[![StyleCI](https://github.styleci.io/repos/165697147/shield?branch=master)](https://github.styleci.io/repos/165697147)
[![Issues](https://img.shields.io/github/issues/rauwebieten/twig-stringy-extension.svg)](https://github.com/rauwebieten/twig-stringy-extension/issues)
![](https://img.shields.io/github/license/rauwebieten/twig-stringy-extension.svg)

A [Twig extension](https://github.com/twigphp/Twig)
for the [Stringy library](https://github.com/danielstjules/Stringy)

Use string manipulations from the Stringy library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-stringy-extension
```

## Available filters

All Stringy methods are converted to underscored filters (to maintain the twig code style).  
All filters are prefixed "stringy_" to avoid collissions with other filters.

## Available filters & example usage

Example usage in a twig template

```twig,html
<p>
    {# stringy_append #}
    {{ 'àê'|stringy_append('ïò') }} => àêïò
</p>
<p>
    {# stringy_at #}
    {{ 'àêïò'|stringy_at(1) }} => ê
</p>
<p>
    {# stringy_between #}
    {{ 'àêïò'|stringy_between('à','ò') }} => êï
</p>
<p>
    {# stringy_camelize #}
    {{ 'Thîs ïs à senténce'|stringy_camelize }} => thîsÏsÀSenténce
</p>
<p>
    {# stringy_chars #}
    {% for char in 'fòôbàř'|stringy_chars %}char "{{ char }}" {% endfor %}
</p>
<p>
    {# stringy_collapse_whitespace #}
    {{ '   Ο     συγγραφέας  '|stringy_collapse_whitespace }} => Ο συγγραφέας
</p>
<p>
    {# stringy_contains #}
    {% if 'Ο συγγραφέας είπε'|stringy_contains('συγγραφέας') %}contains συγγραφέας{% endif %}
</p>
```

## More info

[Stringy documentation](https://github.com/danielstjules/Stringy)