# Twig Stringy Extension

A [Twig extension](https://github.com/twigphp/Twig)
for the [Stringy library](https://github.com/danielstjules/Stringy)

Use string manipulations from the Stringy library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-stringy-extension
```

## Available filters

All Stringy methods are converted to underscored filters (to maintain the twig code style).

stringy_append, stringy_at, stringy_between, stringy_camelize, stringy_chars, stringy_collapse_whitespace, 
stringy_contains, stringy_contains_all, stringy_contains_any, stringy_count_substr, stringy_dasherize, 
stringy_delimit, stringy_ends_with, stringy_ends_with_any, stringy_ensure_left, stringy_ensure_right, 
stringy_first, stringy_get_encoding, stringy_has_lower_case, stringy_has_upper_case, stringy_html_decode, 
stringy_html_encode, stringy_humanize, stringy_index_of, stringy_index_of_last, stringy_insert, 
stringy_is_alpha, stringy_is_alphanumeric, stringy_is_base64, stringy_is_blank, stringy_is_hexadecimal, 
stringy_is_json, stringy_is_lower_case, stringy_is_serialized, stringy_is_upper_case, stringy_last, stringy_length, 
stringy_lines, stringy_longest_common_prefix, stringy_longest_common_suffix, 
stringy_longest_common_substring, stringy_lower_case_first, stringy_pad, stringy_pad_both, 
stringy_pad_left, stringy_pad_right, stringy_prepend, stringy_regex_replace, stringy_remove_left, 
stringy_remove_right, stringy_repeat, stringy_replace, stringy_reverse, stringy_safe_truncate, 
stringy_shuffle, stringy_slugify, stringy_slice, stringy_split, stringy_starts_with, 
stringy_starts_with_any, stringy_strip_whitespace, stringy_substr, stringy_surround, stringy_swap_case, 
stringy_tidy, stringy_titleize, stringy_to_ascii, stringy_to_boolean, stringy_to_lower_case, 
stringy_to_spaces, stringy_to_tabs, stringy_to_title_case, stringy_to_upper_case, stringy_trim, 
stringy_trim_left, stringy_trim_right, stringy_truncate, stringy_underscored, stringy_upper_camelize, 
stringy_upper_case_first

See the [Stringy documentation](https://github.com/danielstjules/Stringy) for details.

## Example usage

```twig
{{ 'This is a sentence'|stringy_slugify }}
```