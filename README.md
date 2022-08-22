# Bol.com Retailer API PHP client

This is a PHP client library to communicate with the **Bol.com Retailer API.**

*This package has only minimal test scripts present, so try at your own risk!*

## Introduction

This package had been developed because Bol.com Retailer API v3 and v4 were deprecated
and subsequently removed in October 2021 and April 2022, respectively.

This package has been heavily inspired by
[harm-smits/bol-com-retailer-api](https://github.com/best-brands/bol-com-retailer-api).

Most of the code has been developed to make generation of clients, endpoints, models and enums possible
and therefore it should also be possible to quickly generate future versions of the API based on the OpenAPI
specification as supplied by Bol.com.

## Supported versions

Currently clients, endpoints, models and other related objects have been generated for API v5 through v7.
Later versions will be generated and released as soon as they go into production.
Similarly, API versions removed by Bol.com will also be removed from this package to keep things nice and tidy.

**Note:** When API versions are going to be removed, this package will always release
with a new major version number *(semantic versioning)*.

Please check the [Bol.com Retailer API release schedule](https://api.bol.com/retailer/public/Retailer-API/release-planning.html)
for further information on the lifecycle stage of each version.

## Usage

All versions of the API will get their own namespace. So if you have to upgrade (or downgrade) to another API version,
in theory you could simply change the namespace from `V5` to `V6` or vice versa.

```php
$client = new \Inktweb\Bolcom\RetailerApi\Clients\V5\Client(
    new \Inktweb\Bolcom\RetailerApi\Client\Config(
        "your-client-id",
        "your-client-secret",
        true // Use demo mode (default if you omit this parameter) 
    )
);
```
After creating the client, you can access the various endpoints as a method. For example:

```php
// Get a paginated list of all orders
$orders = $client->orders()->getOrders();

// Get a paginated list of open orders
$orders = $client->orders()->getOrders(
    null,
    null,
    \Inktweb\Bolcom\RetailerApi\Enums\V5\Orders\Status::open()
);
```

In the case of an error, the client will always throw an exception.

## Available endpoints

Since the classes are generated from the OpenAPI specification, all endpoints are available.

