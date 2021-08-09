# Bol.com Retailer API PHP client

This is a PHP client library to communicate with the **Bol.com Retailer API v5.**

*This package is still in development and only minimal test scripts are present, so try at your own risk!*

## Introduction

This package has been developed because Bol.com Retailer API v3 and v4 are now deprecated
and [will be removed in October 2021 and April 2022](https://api.bol.com/retailer/public/Retailer-API/release-planning.html), respectively.

At the time of writing, there was only one v5 API PHP client: [harm-smits/bol-com-retailer-api](https://github.com/best-brands/bol-com-retailer-api).
We decided not to use it, but the package you see before you has been heavily inspired by this one.

Most of the code has been developed to make generation of clients, endpoints, models and enums possible
and therefore it should also be possible to quickly generate future versions of the API based on the OpenAPI
specification as supplied by Bol.com.

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

