# WHMCS API - Update Order Status
Below you'll find out how can you install and configure this WHMCS API. If you have any question or problem, I will be at your disposal to configure it remotely.

# Install
1. Upload the `includes` folder to your WHMCS Installation.

# WHMCS API Documentation
**WARNING:** This part was removed and edited from their original [Developer documentation](https://github.com/WHMCS/developer-docs).

Updates an order to a custom status

### Request Parameters

| Parameter | Type | Description | Required |
| --------- | ---- | ----------- | -------- |
| action | string | "UpdateOrderStatus" | Required |
| orderid | int | The order id to be updated | Required |
| orderstatus | string | The order status to use | Required |

### Response Parameters

| Parameter | Type | Description |
| --------- | ---- | ----------- |
| result | string | The result of the operation: success or error |


### Example Request (CURL)

```
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.example.com/includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'action' => 'UpdateOrderStatus',
            // See https://developers.whmcs.com/api/authentication
            'username' => 'IDENTIFIER_OR_ADMIN_USERNAME',
            'password' => 'SECRET_OR_HASHED_PASSWORD',
            'orderid' => '1',
            'orderstatus' => 'Processing',
            'responsetype' => 'json',
        )
    )
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
```


### Example Request (Local API)

```
$command = 'UpdateOrderStatus';
$postData = array(
    'orderid' => '1',
    'orderstatus' => 'Processing',
);
$adminUsername = 'ADMIN_USERNAME'; // Optional for WHMCS 7.2 and later
$results = localAPI($command, $postData, $adminUsername);
print_r($results);
```


### Example Response JSON

```
{
    "result": "success"
}
```


### Error Responses

Possible error condition responses include:

* Order ID Not Found
* Order Status Not Found


### Version History

| Version | Changelog |
| ------- | --------- |
| 1.0 | Initial Version |

# Contact information
[Website](https://www.andrezzz.pt)<br>
[Discord](https://www.andrezzz.pt/discord)<br>

# Copyright
Copyright (c) 2022 André Antunes (Andrezzz). All rights reserved.

# License
This project is distributed under the [MIT License](https://opensource.org/licenses/MIT), see LICENSE file for more information.
