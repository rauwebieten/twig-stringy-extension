# Twig Stringy Extension

[![Build Status](https://travis-ci.org/rauwebieten/twig-stringy-extension.svg?branch=master)](https://travis-ci.org/rauwebieten/twig-stringy-extension)
[![codecov](https://codecov.io/gh/rauwebieten/twig-stringy-extension/branch/master/graph/badge.svg)](https://codecov.io/gh/rauwebieten/twig-stringy-extension)
[![Maintainability](https://api.codeclimate.com/v1/badges/1b42dc9cdf05782957ea/maintainability)](https://codeclimate.com/github/rauwebieten/twig-stringy-extension/maintainability)
[![StyleCI](https://github.styleci.io/repos/165697147/shield?branch=master)](https://github.styleci.io/repos/165697147)

A [Twig extension](https://github.com/twigphp/Twig)
for the [Stringy library](https://github.com/danielstjules/Stringy)

Use string manipulations from the Stringy library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-stringy-extension
```

## Available filters

All Stringy methods are converted to underscored filters (to maintain the twig code style).

append, at, between, camelize, chars, collapse_whitespace, 
contains, contains_all, contains_any, count_substr, dasherize, 
delimit, ends_with, ends_with_any, ensure_left, ensure_right, 
first, get_encoding, has_lower_case, has_upper_case, html_decode, 
html_encode, humanize, index_of, index_of_last, insert, 
is_alpha, is_alphanumeric, is_base64, is_blank, is_hexadecimal, 
is_json, is_lower_case, is_serialized, is_upper_case, last, length, 
lines, longest_common_prefix, longest_common_suffix, 
longest_common_substring, lower_case_first, pad, pad_both, 
pad_left, pad_right, prepend, regex_replace, remove_left, 
remove_right, repeat, replace, reverse, safe_truncate, 
shuffle, slugify, slice, split, starts_with, 
starts_with_any, strip_whitespace, substr, surround, swap_case, 
tidy, titleize, to_ascii, to_boolean, to_lower_case, 
to_spaces, to_tabs, to_title_case, to_upper_case, trim, 
trim_left, trim_right, truncate, underscored, upper_camelize, 
upper_case_first

See the [Stringy documentation](https://github.com/danielstjules/Stringy) for details.

## Example usage

Example usage in a twig template

```twig
{{ 'àê'|appends('ïò') }} => àêïò
{{ 'àêïò'|at(1) }} => ê
{{ 'àêïò'|between('à','ò') }} => êï
{{ 'Thîs ïs à senténce'|camelize }} => thîsÏsÀSenténce
```