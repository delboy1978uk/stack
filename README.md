# stack
[![Build Status](https://travis-ci.org/delboy1978uk/stack.png?branch=master)](https://travis-ci.org/delboy1978uk/stack) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/stack/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/stack/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/stack/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/stack/?branch=master) <br />
a stack PHP setup for writing a new Github project with Composer and Packagist complete with travis builds and scrutinizer code coverage & quality analysis
##Usage
Simply clone this repository, delete the .git folder, tweak the composer.json, and do a couple of (case sensitive) find and replaces:
```
stack
Stack
Del
delboy1978uk
```

Rename the following files/folders:
```
src/Stack.php
tests/unit/Del/
tests/unit/Del/StackTest.php
```
Finally, add your repository on Travis CI and Scrutinizer, then commit and push to your Github repository.
Now Github has a commit with a composer.json, head over to Packagist and submit your repository.
###Note about tests
Tests are done using the awesome Codeception! Run tests from the root folder by typing:
```
vendor/bin/codecept run unit
```
Tests will push to your Travis branch, which will push code coverage to scrutinizer. Now you can start making tests and not worry about setup.
