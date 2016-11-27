Het Formule Eén Domein

Formule 1
Als we spreken over Formule Eén, Formule 1, F1, of officieel FIA Formula One World Champion, dan spreken we over de hoogste classe eenzitters auto racing onder regelgeving van de
ook wel the Federation Internationale de l'Automobile (FIA).

Teams
A driver can switch teams during the season and, for the Drivers Championship, keep all points gained at the previous team.[55]

Coureurs
Coureurs zijn pas coureurs als ze een geldige Super Licentie hebben. Dit is de hoogste klasse in racebewijzen, zoals bepaald door de FIA.

Competitie
De Formule één bestaat uit twee competities, die elk bepaald worden door middel van een puntensysteem: een coureurskampioenschap en een teamkampioenschap. De kampioen van de competitie
is de coureur of het team met het hoogste aantal punten aan het einde van de competitie. De punten worden per wedstrijd toegekend aan de coureurs die deze het snelst hebben afgelegd.
In het huidige systeem, dat in 2010 in het leven gebracht werd, betekent dit dat de winnaar van een wedstrijd 25 punten verdient, en dat de overige coureurs in de top 10 punten
toegekend krijgen in de volgorde van 18, 15, 12, 10, 8, 6, 4, 2, 1. De punten die coureurs toegekend krijgen worden opgeteld in een puntentotaal, waaruit het coureurskampioenschap wordt
opgemaakt. Omdat één team per race twee coureurs inschrijft, worden de punten die de beide coureurs van dat team behaald hebben bij elkaar opgeteld. Zo wordt met het puntentotaal van
deze twee coureurs in de teamkampioenschappen, ook wel constructor championships, bepaald.

Toekennen punten
Voor het toekennen van punten moet een coureur geklasseerd worden. Dit houdt in dat een coureur minimaal 90% van de afstand dat de racewinnaar aflegde, afgelegd moet hebben. Coureurs
hoeven een race daarom dus ook niet te voltooien. Het is zelfs mogelijk dat een coureur uitvalt (retires), dat deze dan toch geklasseerd wordt.

Uitzonderingen in puntentoekenning
Wanneer minder dan 75% van de van te voren bepaalde afstand van de race wordt afgelegd door de racewinnaar, bijvoorbeeld in het geval van hevige regen, uitval van alle coureurs, of
wanneer de tijd van racen een van te voren bepaalde duur van twee uur overschreid, wordt de helft van de punten toegekend aan de coureurs. Zo wordt 25 dus 12,5 en 15 dus 7,5. Het is nog
steeds zo dat de top tien punten toegekend krijgen.

Seizoen
Een competitie loopt niet oneindig door. Het wordt na een periode van races afgesloten, waarna een winnaar bepaald wordt. De periode waarover de competitie wordt gehouden wordt van te voren
bepaald en noemen we een seizoen. In de huidige situatie worden de seizoenen per jaar gehouden. Een seizoen begon in 2016 in maart met de eerste wedstrijd, en eindigde in november met de
laatste wedstrijd.




Grand Prix
De kampioenschappen der Formule 1 worden bepaald over een serie van races, welke bekend staan als Grand Prix.

Je hebt één Grand Prix, bijvoorbeeld De Grand Prix van Australië 2017. Er zijn meerdere Grand Prix van Australië binnen het domein Formule 1, maar slechts één Formule één 2017.
Dat betekent dus dat je het domein new GrandPrix() hebt. Deze bestaat dus uit een parameter $naam, $title of $id, en uit een parameter $season.

Op deze manier is de Grand Prix 'Australië, 2017' anders dan 'Australië 2016'. Hieruit maak ik op dat we GrandPrix als volgt opbouwen: __construct($id, $season) { }
In het echte leven is een Grand Prix een evenement. Dit evenement vind op een bepaald weekend in het jaar plaats. Zo vond de Grand Prix van Australië 2016 plaats van datum 18 maart 2016
tot en met datum 20 maart 2016. De Grand Prix bestond dus uit 3 dagen.

Wat zeker is, is dat alle Grand Prix in de huidige situatie over drie dagen plaatsvind. In de meeste gevallen zijn dit de vrijdag, zaterdag en zondag van een week. Uitzondering is Monaco:
Monaco is een stratencircuit dat door de stad ligt. De straten van Monaco worden op de donderdag, zaterdag en zondag dat de Grand Prix van Monaco van dat seizoen plaatsvindt gehouden.
Op de vrijdag is er in Monaco op dezelfde locatie een markt, waardoor het niet mogelijk is om op deze dag op de baan te rijden.

Om deze reden heeft een Grand Prix dus misschien ook wel een datum: new Date() waarop de Grand Prix plaats vindt.

Sessies
In de Formule 1 spreken we niet zo snel over dagen; eerder over de sessies die op deze dagen plaatsvinden.
Dag 1 (vrijdag 18 maart) bestaat uit twee sessies: vrije training één en twee.
Dag 2 (zaterdag 19 maart) bestaat ook uit twee sessies: vrije training drie en kwalificatie.
Dag 3 (zondag 20 maart) bestaat uit één sessie: de race.

Zo wordt er gesproken over een totaal van vijf sessies: drie vrije trainingen, een kwalificatie en een race.






Gedurende een sessie worden ronden afgelegd. Elke ronde bestaat uit een rondenummer. Rondenummers zijn oplopende getallen. Ronde 1 is de eerste ronde die is afgelegd, ronde 2 de tweede, etc.
We spreken daarbij van een ronde die in een bepaalde tijd (rondetijd) wordt afgelegd door de coureur.

Laptijden worden neergezet door een coureur, die een volle lap uitrijden. Dit houdt in dat een coureur zijn lap start (over start/finish rijdt), een ronde aflegt, en uiteindelijk de ronde
afsluit (opnieuw over start/finish rijdt): coureur start ronde -> coureur legt ronde af -> coureur sluit ronde af -> tijd over ronde wordt vastgelegd;
De rondetijd van een coureur is dus afhankelijk van het moment dat deze een ronde start en afsluit, en zou dus kunnen worden bepaald door deze momenten met elkaar te vergelijken.
Ronde 1 zou dus een start ronde 1 en einde ronde 1 bevatten.
Wanneer de coureur meerdere rondes aflegt, dan worden meerdere rondes geregistreerd. Het einde van ronde 1 is dat tegelijk de start van ronde 2 en het einde van ronde 2 is de start van
ronde 3.

LapTimes zouden dus bestaan uit een starttijd en een eindtijd, en door een formule (eindtijd-starttijd) teruggebracht kunnen worden naar een tijdsduur: de laptime. Het is hier dus wel zo
dat wanneer het evenement 'coureur duikt pits in', dat de lap wordt opgeheven. Einde ronde 2 is dan ook alleen einde ronde 2 en niet begin ronde 3 meer. Begin ronde 3 begint dan zoals
eerder beschreven.

Laptimes en pitstops
Alleen tijdens de race worden rondes vastgelegd waarbij een coureur de pits in duikt. In andere gevallen wordt de rondetijd geschrapt, en start de coureur pas weer een nieuwe ronde zodra
hij, nadat hij de pitsstraat weer is uitgereden, voor het eerst over de start finish lijn rijdt.
De tijd dat de coureur in de pits verblijft is namelijk belangrijk voor de tijd die de coureur nodig
heeft om een ronde af te leggen. Dit komt omdat de rondes die worden afgelegd gezamelijk een totale eindtijd bepalen in het raceresultaat. Wat hier dus belangrijk is om te weten,
is dat een ronde ook gedeeltelijk in de pits afgelegd kan worden.
De oplossing die gehanteerd wordt, is dat de start finish lijn wordt doorgetrokken tot in de pitsstraat. Wanneer een coureur hier over de start finish lijn rijdt, sluit hij een ronde af
en start hij een nieuwe ronde.

Ook hier is het zo dat LapTimes bestaan uit een starttijd en een eindtijd, en dat met de bovenstaande formule (eindtijd-starttijd) de tijdsduur bepaald wordt. Hier wordt een tijd echter
niet geschrapt wanneer het evenement 'coureur duikt pits in' plaats vindt. Er gebeurd wel iets anders.

Pitstop
Wanneer een coureur een pitstop aangaat, wordt de tijd dat de coureur doet over een pitstop geregistreerd. Hierin zijn twee verschillende tijdregistraties belangrijk: de totale tijd die
de coureur zich in de pitstop zone begeeft, en de tijdsduur van de handelingen die het team aan de auto doen tijdens de daadwerkelijke pitstop.

Pitstraatregistratie
De tijd dat een coureur zich in de pitstopzone begeeft is afhankelijk van twee factoren. De eerste factor is het moment dat de coureur de pitstopzone in rijdt. Hiervoor is een moment
in de uitrit gekozen als registratieevenement 'Coureur rijdt pitstraat in'. Visueel is dit evenement aangegeven als een witte lijn waar de auto overheen rijdt. De tweede factor is
het moment dat de coureur de pitstraat uitrijdt. Hiervoor is een moment in de inrit gekozen als registratiemoment 'Coureur rijdt pitstraat uit'. Visueel is ook dit evenement aangegeven
met een witte lijn waar de coureur overheen rijdt. Deze momenten worden met de formule ('Coureur rijdt pitstraat uit'-'Coureur rijdt pitstraat in') met elkaar vergeleken en zo wordt
een totale tijd dat de coureur gedurende deze pitstop zich in de pitstraat bevond bepaald.
De tijd wordt opgeheven als het team van de coureur de auto uit de race haalt en zo het
evenement 'team retires car' plaatsvindt, waarbij de car kan worden geïdentificeerd door middel van het nummer dat aan de coureur en auto is gekoppeld (bijv. 44 bij Lewis Hamilton), en /of
door middel van de afkorting van de naam van de coureur die de auto bestuurde (VES bij Max Verstappen).

Pitstopregistratie
Een pitstop bestaat dus ook uit de pitstop, waarbij de handelingen aan de auto worden gedaan. In de meeste gevallen bestaan handelingen uit evenementen als 'engineer verwijderd wiel' en
'engineer plaatst wiel', maar het kan bijvoorbeeld ook zo fijn dat een vleugelhoek wordt aangepast, of dat de gehele voorvleugel wordt vervangen.
De registratie van de pitstop heeft echter met twee evenementen te maken: 'auto van coureur is gestopt' voordat de handelingen gedaan worden en 'auto van coureur komt in beweging' nadat de
coureur de handelingen heeft gedaan. De tijd dat de daadwerkelijke pitstop plaatsvindt heeft dus te maken met deze twee evenementen (resulteren in een vergelijking tussen
start en einde pitstop; formule: eind - start = tijd).

Laptimes worden zoals eerder vermeld door momenten (tijd). Voor een rondetijd is tijd dus een belangrijke factor. De momenten waar we over praten zullen dus moeten worden bepaald.
Deze momenten zijn in de Europese standaard gegeven in Uren, minuten en seconden, in het format hh:mm:ss. In de Formule 1 wordt er ook gesproken van 10en, 100en en 1000en van een seconde.
Dit komt omdat rondetijden van coureurs zo dicht bij elkaar kunnen liggen, dat het verschil alleen in de 1000en gemerkt kan worden. Op deze manier wordt tijd bepaald in het uren, minuten,
seconden, en 10en, 100en en 1000en: hh:mm:ss.uuu. Zo is dus de start van een ronde mogelijk op 13:58:20.102, en is het einde op 14:00:02.390.
Eén ding is zeker in ieder geval zeker: het evenement 'coureur sluit ronde af' kan nooit op een eerder moment plaats vinden dan 'coureur start ronde' als we spreken over dezelfde ronde.
Lap 4 kan dus niet eerder eindigen dan dat ronde 4 start. Ronde 4 kan wel eerder eindigen dat dat ronde 6 start. Ronde 6 kan zelfs ook nooit eerder starten dan dat ronde 4 eindigt.

De rondetijd wordt, net als de tijd van het moment van starten en eindigen van de ronde, bepaald in het format hh:mm:ss.uuu. Het is echter zo dat het afleggen van een ronde
in de huidige situatie niet langer duurt dan enkele minuten. Op deze manier zal de tijdsduur worden weergeven als mm:ss.uuu. De tijd zal ook geen nul zijn. De tijd wordt voor de gebruiker
weergegeven als een string 'mm:ss.uuu'. Zo is het voor de gebruiker leesbaar. Voor berekeningen die worden gedaan met de tijden wordt de tijd gebruikt als integer. De tijd moet dus in dit
geval een integer zijn. Daarbij kan de integer ook geen 0 zijn.


Dus:
- Formule 1 heeft twee competities->driver and team. Team is coureurs opgeteld. Coureurs kunnen van team wisselen-> het tot dan behaalde aantal punten voor teamchampionship behoudt het team.
Voor coureur championship behoudt coureur zijn punten. De daarop behaalde punten zijn voor coureur en zn nieuwe team.
- Deze competities worden per seizoen gehouden (elke jaar begint en eindigt een nieuw seizoen: begin rond maart, einde rond november)
- Elke seizoen bestaat uit meerdere races: zogenaamde Grand Prix.
- Een Grand Prix bestaat uit sessies: drie vrije trainingen, 1 kwalificatie en 1 race. Punten voor klassement worden verdeeld tijdens de race.
- Tijdens een sessie schrijft een team twee coureurs in. Hoeft niet per sessie dezelfde coureurs te zijn (WAT ZIJN HIER DE REGELS VOOR?).
- De coureur legt in een sessie een aantal rondes af. Deze rondes starten bij start lap en eindigen bij end lap. Zo wordt een laptime bepaald.
- De laps worden vergeleken en de beste lap wordt gebruikt in de klassering van de coureurs. Hierin worden de beste laptimes van de participerende coureurs vergeleken.
- Tijdens de race wordt er gekeken wie de race het snelst aflegt.

Er is dus een Grand Prix van een bepaald seizoen, waarin een sessie gehouden wordt.




