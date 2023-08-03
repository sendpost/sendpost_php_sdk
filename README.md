# sendpost

Email API and SMTP relay to not just send and measure email sending, but also alert and optimise. We provide you with tools, expertise and support needed to reliably deliver emails to your customers inboxes on time, every time.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "sendpost/sendpost_php_sdk": "^1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sendpost/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\EmailApi($client);

  $x_sub_account_api_key = 'your_api_key'; // string | Sub-Account API Key
  $email_message = new \sendpost\model\EmailMessage(); 
  $email_message->setSubject('Hello World');
  $email_message->setHtmlBody('<strong>it works!</strong>');
  $email_message->setIppool('PiedPiper');
  $from = new \sendpost\model\From();
  $from->setEmail('richard@piedpiper.com');

  $to = new \sendpost\model\To();
  $to->setEmail('gavin@hooli.com');
  $email_message->setTo(array($to));
  $email_message->setFrom($from);

  try {
      $result = $apiInstance->sendEmail($x_sub_account_api_key, $email_message);
      print_r($result);
  } catch (Exception $e) {
      echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
  }

```

Example with cc, bcc and template:

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\EmailApi($client);

  $x_sub_account_api_key = 'your_api_key'; // string | Sub-Account API Key
  $email_message = new \sendpost\model\EmailMessage(); 
  $email_message->setSubject('Hello World');
  $email_message->setHtmlBody('<strong>it works!</strong>');
  $email_message->setIppool('PiedPiper');
  $from = new \sendpost\model\From();
  $from->setEmail('richard@piedpiper.com');

  $cc = new \sendpost\model\CopyTo();
  $cc->setEmail('dinesh@bachmanity.com');
  $to->setCc(array($cc));
  $bcc = new \sendpost\model\CopyTo();
  $bcc->setEmail('jian@bachmanity.com');
  $to->setBcc(array($bcc));

  $email_message->setTemplate('Welcome Mail');

  $to = new \sendpost\model\To();
  $to->setEmail('gavin@hooli.com');
  $email_message->setTo(array($to));
  $email_message->setFrom($from);

  try {
      $result = $apiInstance->sendEmailWithTemplate($x_sub_account_api_key, $email_message);
      print_r($result);
  } catch (Exception $e) {
      echo 'Exception when calling EmailApi->sendEmailWithTemplate: ', $e->getMessage(), PHP_EOL;
  }

```

## Suppressions

Create Suppressions

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\SuppressionApi($client);

  $x_sub_account_api_key = 'your_api_key'; 

  $r_suppression = new \sendpost\model\RSuppression();
  $suppression_email = new \sendpost\model\SuppressionEmail();
  $suppression_email->setEmail('richard@piedpiper_fake.com');

  $r_suppression->setHardBounce(array($suppression_email));

  // fields are optional, but you have to send at least one of them.

  // $r_suppression->setManual(array($suppression_email));
  // $r_suppression->setSpamComplaint(array($suppression_email));
  // $r_suppression->setUnsubscribe(array($suppression_email));

  try {
      $result = $apiInstance->createSuppressions($x_sub_account_api_key, $r_suppression);
      echo json_encode($result);
  } catch (Exception $e) {
      echo 'Exception when calling SuppressionApi->createSuppressions: ', $e->getMessage(), PHP_EOL;
  }
```

Get Suppressions

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\SuppressionApi($client);

  $x_sub_account_api_key = 'your_api_key'; 

  $offset = 0;
  $limit = 10;
  $search = null;
  $from = '2023-06-07';
  $to = '2023-08-02';

  try {
      $result = $apiInstance->getSuppressions($x_sub_account_api_key, $offset, $limit, $search, $from, $to);
      echo json_encode($result);
  } catch (Exception $e) {
      echo 'Exception when calling SuppressionApi->getSuppressions: ', $e->getMessage(), PHP_EOL;
  }
```

Delete Suppression

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\SuppressionApi($client);

  $x_sub_account_api_key = 'your_api_key'; 

  $rd_suppression = new \sendpost\model\RDSuppression();
  $suppression_email = new \sendpost\model\SuppressionEmail();
  $suppression_email->setEmail('richard@piedpiper_fake.com');

  $rd_suppression->setSuppressions(array($suppression_email));

  try {
      $result = $apiInstance->deleteSuppression($x_sub_account_api_key, $rd_suppression);
      echo json_encode($result);
  } catch (Exception $e) {
      echo 'Exception when calling SuppressionApi->deleteSuppression: ', $e->getMessage(), PHP_EOL;
  }
```

Count Suppression

```php
  require_once(__DIR__ . '/vendor/autoload.php');
  $client = new GuzzleHttp\Client();

  $apiInstance = new sendpost\api\SuppressionApi($client);

  $x_sub_account_api_key = 'your_api_key'; 

  $from = '2023-06-07';
  $to = '2023-08-02';

  try {
      $result = $apiInstance->count($x_sub_account_api_key, $from, $to);
      echo json_encode($result);
  } catch (Exception $e) {
      echo 'Exception when calling SuppressionApi->count: ', $e->getMessage(), PHP_EOL;
  }
```

## API Endpoints

All URIs are relative to *https://api.sendpost.io/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmailApi* | [**sendEmail**](docs/Api/EmailApi.md#sendemail) | **POST** /subaccount/email/ | 
*EmailApi* | [**sendEmailWithTemplate**](docs/Api/EmailApi.md#sendemailwithtemplate) | **POST** /subaccount/email/template | 
*SuppressionApi* | [**count**](docs/Api/SuppressionApi.md#count) | **GET** /subaccount/suppression/count | 
*SuppressionApi* | [**createSuppressions**](docs/Api/SuppressionApi.md#createsuppressions) | **POST** /subaccount/suppression/ | 
*SuppressionApi* | [**deleteSuppression**](docs/Api/SuppressionApi.md#deletesuppression) | **DELETE** /subaccount/suppression/ | 
*SuppressionApi* | [**getSuppressions**](docs/Api/SuppressionApi.md#getsuppressions) | **GET** /subaccount/suppression/ | 

## Models

- [Attachment](docs/Model/Attachment.md)
- [City](docs/Model/City.md)
- [CopyTo](docs/Model/CopyTo.md)
- [CountStat](docs/Model/CountStat.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [Device](docs/Model/Device.md)
- [EmailMessage](docs/Model/EmailMessage.md)
- [EmailResponse](docs/Model/EmailResponse.md)
- [EventMetadata](docs/Model/EventMetadata.md)
- [From](docs/Model/From.md)
- [Os](docs/Model/Os.md)
- [QEmailMessage](docs/Model/QEmailMessage.md)
- [QEvent](docs/Model/QEvent.md)
- [RDSuppression](docs/Model/RDSuppression.md)
- [RSuppression](docs/Model/RSuppression.md)
- [ReplyTo](docs/Model/ReplyTo.md)
- [Suppression](docs/Model/Suppression.md)
- [SuppressionEmail](docs/Model/SuppressionEmail.md)
- [To](docs/Model/To.md)
- [UserAgent](docs/Model/UserAgent.md)
- [WebhookEvent](docs/Model/WebhookEvent.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

dev@sendpost.io
