# Atlassian Document Format Builder (PHP)

A library that simplifies building documents that follow the Atlassian Document Format structure.

This is based on [pyadf (Python)](https://bitbucket.org/mdoms/pyadf/src/cda38c99d110) and [adf-builder (JavaScript)](https://bitbucket.org/atlassian/adf-builder-javascript).

## Installation

Install the package using

    composer require jmsfwk/adf-builder

## Usage

```php
use Jmsfwk\Adf\Document;

$doc = new Document();
$doc->paragraph()
    ->text('See the ')
    ->link('documention', 'https://example.com')
    ->text(' ')
    ->emoji('smile');
```

### Serialization

A document can be serialized in different ways:

```php
$doc = new Document();
$doc->toJson();      // Returns a compact JSON string
json_encode($doc); // Equivalent to '$doc->toString()'
```

### Examples

#### Simple paragraphs

In order to get an output like:

> Hello @joe, please *carefully* read [this contract](https://www.example.com/contract)

You would use:

```php
use Jmsfwk\Adf\Document;

$doc = new Document();
$doc->paragraph()
    ->text('Hello ')
    ->mention($id, 'joe')
    ->text(', please ')
    ->em('carefully')
    ->text(' read ')
    ->link('this contract', 'https://www.example.com/contract');
```
