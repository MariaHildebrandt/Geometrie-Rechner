# Geometrie Rechner mit Laravel 5.3

Für Nutzeroberfläche siehe layout.pdf 

Hilfsmittel für Geometrieaufgaben.

Nutzer kann zwischen geometrischen Objekten wählen (Kreis, Kugel, Rechteck, etc.) wählen und für z.B. Kreis einen Wert für Radius oder  Durchmesser oder Umkreis eingeben. 

Für diesen Wert erhält der Nutzer einen Kreis mit berechnetem Radius, Durchmesser, Umkreis und Flächeninhalt.

Nutzer kann diese Werte in einer Datenbank speichern, einsehen und löschen


- Verwendet Laravel als MVC
- Builder Erzeugungsmuster für die einzelnen geometrischen Objekte



in Arbeit! Bisher sind Werte für Kreis und Kugel berechenbar.

|               | Kreis         | Kugel       | Rechteck      | Quadrat     |
| ------------- |:-------------:|:-----------:|:-------------:|:-----------:|
| Eingabe       | Radius        | Radius      | Länge         | Länge       |
|               | Durchmesser   | Durchmesser | Breite        | Breite      |     
|               | Umkreis       | Umrkreis    |               | Höhe        |
|               |               |             |               |             |
| Ausgaben      | Radius        | Radius      | Umkreis       | Oberfläche  |
|               | Durchmesser   | Durchmesser | Flächeninhalt | Volumen     |
|               | Umkreis       | Umkreis     |               |             |
|               | Flächeninhalt | Oberfläche  |               |             |
|               |               | Volumen     |               |             |
