<?php
session_start();
include("database.php");

function showTours()
{
    global $pdo;
    $result = $pdo->query("SELECT * FROM `tours`");
    while ($result2 = $result->fetch(PDO::FETCH_BOTH)) {
        $event_id = $result2['id'];
        $title = $result2['title'];
        $place = $result2['place'];
        $day = $result2['day'];
        $month = $result2['month'];
        $day_of_week = $result2['day_of_week'];
        $link_place = $result2['link_place'];
        $link_tickets = $result2['link_tickets'];
        echo "<div class=\"tours-event-content event_$event_id\">
                <div class=\"tours-event-date-holder\">
                    <div class=\"tours-event-date-holder-left\">
                        <span class=\"tours-event-day-number-holder\">$day</span>
                    </div>
                    <div class=\"tours-event-date-holder-right\">
                        <span class=\"tours-event-day-holder\">$month</span>
                        <span class=\"tours-event-month-holder\">$day_of_week</span>
                    </div>
                </div>
                <div class=\"tours-event-title-holder\">
                    <h4 class=\"tours-event-title\">
                        <a class=\"tours-event-title\" href=\"$link_place\" target=\"_blank\">$title | $place</a>
                    </h4>
                </div>
                <div class=\"tours-event-buy-tickets-holder\">
                    <a href=\"$link_tickets\" target=\"_blank\" class=\"tours-event-buy-tickets-button\">
                        <span class=\"tours-event-buy-tickets-holder\">buy tickets</span>
                    </a>
                </div>
              </div>";
    }
}

?>