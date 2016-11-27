De race is gestart.
Er vond een ongeluk plaats.
Er blokkeerde een wiel.
Er werd een ronde afgelegd.
Er werd iemand ingehaald.
Er vond een pitstop plaats
De race is beeindigd.

pitstop
Car entered pit lane.
Car slowed down at pit entrance
Car stopped
Wheels are removed
Wheels are added
Degree of frontwing was adjusted
Green light was given
Car left garage
Car left pit lane
Car joined track

$race->start(); // Leidt tot RaceStarted
$race->registerCrash(); // CrashHappened
$race->recordLap($forDriver); // LapWasRecorded
$pitStop = $race->startPitStop($forDriver); // PitStopWasStarted
$pitStop->registerPitLaneEntrance();
$pitStop->registerCarStopped();


Het seizoen '2017' is gestart
De eerste Grand Prix van het seizoen, 'Grand Prix van Australië', is gestart
De eerste sessie van de eerste Grand Prix, 'Vrije Training 1' is gestart.
