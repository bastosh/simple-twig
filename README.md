# SIMPLE Project • Twig skeleton

Twig version of simple skeleton

## Requirements
- Composer installed
- nodejs and npm installed
- PDO PHP Extension
- local development server
- good bases in HTML, CSS and PHP
- familiarity with object-oriented programming and namespacing
- familiarity with Foundation, Sass and Gulp

## Download
Download or clone the repository :
```
git clone https://github.com/bastosh/simple-demo.git my-new-project
```
Go into the folder and start a new Git repository :
```
cd my-new-project
rm -rf .git && git init
```
## Install dependencies
```
composer install && npm install
```
## Database configuration
Create a database.

Populate it (if you want) with the file simple.sql.

Open config.php file and set the username and the password according to your configuration.

```
'dsn' => 'mysql:host=localhost;dbname=simple',
'login' => 'root',
'password' => 'root',
```

## Assets
Compile the scss files and populate the public/css folder
```
gulp
```

And you should be good to go.

The documentation is included.

## Changelog
See [CHANGELOG.md](https://github.com/bastosh/simple-mvc/blob/master/CHANGELOG.md).

## Licence ISC
Copyright (c) 2018, Sébastien Pereda

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted, provided that the above
copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
