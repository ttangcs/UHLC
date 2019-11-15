<?php
require __DIR__ . '/vendor/autoload.php';





/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
    putenv('GOOGLE_APPLICATION_CREDENTIALS=/srv/http/wordpress/wp-content/themes/uhlc/UHLC-f85ced82cfb7.json');
    $client = new Google_Client();
    $client->useApplicationDefaultCredentials();
    $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);

    return $client;
}


// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
$calendarId = '462ovjk9ahr2l0rp0me0ruptjc@group.calendar.google.com';
$optParams = array(
  'maxResults' => 10,
  'orderBy' => 'startTime',
  'singleEvents' => true,
  'timeMin' => date('c'),
);
$results = $service->events->listEvents($calendarId, $optParams);
$events = $results->getItems();

if (empty($events)) {
    print "No upcoming events found.<br/>\n";
} else {
    print "Upcoming events:<br/>\n";
    foreach ($events as $event) {
        $start = $event->start->dateTime;
        if (empty($start)) {
            $start = $event->start->date;
        }
        printf("%s (%s)<br/>\n", $event->getSummary(), $start);
    }
}
