<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    <script src="https://js.pusher.com/beams/service-worker.js"></script>
</head>
<body>

    <script>
        const beamsClient = new PusherPushNotifications.Client({
          instanceId: '80acd220-c6a2-433d-9612-5237e9e959ed',
        });

        beamsClient.start()
          .then(() => beamsClient.addDeviceInterest('hello'))
          .then(() => console.log('Successfully registered and subscribed!'))
          .catch(console.error);
      </script>

</body>
</html>
