<?php
  require __DIR__ . '/vendor/autoload.php';
  require __DIR__ . '/pusher_config.php';

  $pusher = new Pusher\Pusher(
    PUSHER_KEY,
    PUSHER_SECRET,
    PUSHER_APP_ID,
    array(
      'cluster' => PUSHER_CLUSTER,
      'encrypted' => true
    )
  );

  $channelName = 'sample-channel';
  $eventName   = 'sample-event';

  $data = array(
    'message' => $_GET['message']
  );

  $pusher->trigger($channelName, $eventName, $data);
?>
