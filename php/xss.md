# XSS-Attack in php

## Wie funktioniert die Sicherheitslücke?
- Ein Angreifer schleust eigenen Code, beispielsweise ein Javascript-Skript auf einer Website ein.
- Ein anderer Benutzer will die Seite ansehen.
- Der Code des Angreifers wird ausgeführt. 

### Schaden
- Der Inhalt einer Website kann angepasst werden.
- Die Session könnte übernommen werden.
- Der Benutzer kann auf eine andere Website umgeleitet werden.

## Wie konnten Sie die Sicherheitslücke ausnutzen?

Ich habe in der URL eine variable namens username. In jener kann der Benutzername eingegeben werden. Falls man jetzt jedoch anstatt einem normalen String, JavaScript-Code einfügt, wird dieser ausgeführt. 
- Codebeispiel: [Beispiel Unsecaped Code](/php/unescaped.php)
- Url normal: ```index.php?username=damian```
![Normale Ausgabe](/php/normal.png)
- URL mit JavaScript: ```index.php?username=<script>alert(%27hello%20world%27);</script>```
![Normale Ausgabe](/php/xss.png)


## Wie haben Sie die Sicherheitslücke geschlossen (wo im Code?)?

- Damit man diese Sicherheitslücke schliessen kann, muss man im PHP-Code die Eingabe der GET-Variable escapen. Dies macht man durch den command: ```htmlspecialchars()```. Durch diesen Code werden alle spezielen Zeichen durch speziele Codes ersetzt. Beispielsweise wird aus einem ```<``` das neue Zeichen ```&lt;```.
- Codebeispiel: [Beispiel Escaped Code](/php/escaped.png)
![Beispiel Escaped Code](/php/escaped.png)

## Installation
Damit dieser Code getestet werden kann, muss man XAMPP installieren. Sofern dies getan wurde, muss man im Ordner Dashboard einen neuen Ordner namens ```www``` erstellen und den Code darin einfügen. Danach kann man den PHP Server von XAMPP starten und unter der URL ```localhost/dashboard/www/Security-Leaks/php/escape.php``` oder ```localhost/dashboard/www/Security-Leaks/php/unescaped.php``` den Code testen.
### [Go Back](https://github.com/Damian-Sommer/Security-Leaks)