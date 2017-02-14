# Anagram with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/14/2017

#### By Leah Sherrell , Benjamin T. Seaver

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Leah Sherrell, Benjamin T. Seaver

## License
* MIT

## Specifications
* Phase 1 - Dependencies, composer files and .gitignore.
* Phase 2 - Anagram class with an anagram finder method.
* Phase 3 - Build Test cases and implement Anagram methods

* Behavior given Word and Possible List, return Actual List of anagrams

| Word         | Possible List              | Actual List of Anagrams             |
|--------------|----------------------------|-------------------------------------|
|              |                            |                                     |
|              | tic tac toe                |                                     |
| cat          |                            |                                     |
| cat          | cat                        |                                     |
| cat          | tac                        | tac                                 |
| cat          | tac tic toe act            | tac act                             |

* Note! Not in initial test cases: Capitalization, hyphenated words, punctuation, numbers, other characters, words that are white space.

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Twig template with a a form that accepts a list of words and returns which words are anagrams.
* Phase 6 - Output partial anagrams (if time allows).


* End specifications
