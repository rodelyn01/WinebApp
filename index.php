<?php

require_once 'vendor/autoload.php';

use Microsoft\ApplicationInsights\Telemetry_Client;
use Microsoft\ApplicationInsights\Telemetry_Context;
use Microsoft\ApplicationInsights\Channel\Null_TelemetryChannel;

$instrumentationKey = '5bf77642-c94d-45dc-908d-df38a8914c51'; // Replace with your actual Instrumentation Key

$telemetryClient = new Telemetry_Client();
$telemetryClient->getContext()->setInstrumentationKey($instrumentationKey);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my App</title>
</head>
<body>
    <!-- Make a simple web page with a welcome message and a button to start the app -->
    <h1>Welcome to My App</h1>
    <p>This was made to be presented for our Laboratory Exercise in Azure.</p>
    <p>Click the button below to start using the app.</p>
    <form action="start.php" method="post">
        <button type="button">Start App</button>
    </form>
    <p>If you have any questions, feel free to contact us.</p>
    <p>Follow us on <a href="https://www.facebook.com/sambrix.perello.1">Facebook</a> for updates.</p>
</body>
</html>
