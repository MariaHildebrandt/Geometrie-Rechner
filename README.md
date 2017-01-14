# Geometrie Rechner mit Laravel 5.3

Für Nutzeroberfläche siehe layout.pdf 

Hilfsmittel für Geometrieaufgaben.

Nutzer kann zwischen geometrischen Objekten wählen (Kreis, Kugel, Rechteck, etc.) wählen und für z.B. Kreis einen Wert für Radius oder  Durchmesser oder Umkreis eingeben. 

Für diesen Wert erhält der Nutzer einen Kreis mit berechnetem Radius, Durchmesser, Umkreis und Flächeninhalt.

Nutzer kann diese Werte in einer Datenbank speichern, einsehen und löschen


- Verwendet Laravel als MVC
- Builder Erzeugungsmuster für die einzelnen geometrischen Objekte



<p align="center">
  <img src="https://s19.postimg.org/5t4hxdrqb/startseite.png" width="400"/>
  <img src="https://s19.postimg.org/9s1pg7gdf/kreis.png" width="400"/>
</p>
<p align="center">
  <img src="https://s19.postimg.org/ef7rhz3qb/berechnung.png" width="400"/>
  <img src="https://s19.postimg.org/4j6oibxyb/image.png" width="400"/>
</p>


in Arbeit! Bisher sind Werte für Kreis und Kugel berechenbar.

mögliche Eingaben und Ausgaben für den Rechner

|               | Kreis         | Kugel       | Kegel               | Rechteck      | Quadrat     |
| ------------- |:-------------:|:-----------:|:-------------------:|:-------------:|:-----------:|
| Eingabe       | Radius        | Radius      | Radius              | Länge         | Länge       |
|               | Durchmesser   | Durchmesser | Höhe                | Breite        | Breite      |
|               | Umkreis       | Umrkreis    |                     |               | Höhe        |
|               |               |             |                     |               |             |
| Ausgaben      | Radius        | Radius      | Flächeninhalt Grund | Umkreis       | Oberfläche  |
|               | Durchmesser   | Durchmesser | Flächeninhalt Mantel| Flächeninhalt | Volumen     |
|               | Umkreis       | Umkreis     | Oberfläche          |               |             |
|               | Flächeninhalt | Oberfläche  | Volumen             |               |             |
|               |               | Volumen     | Mantelhöhe          |               |             |
|               |               |             | Umfang              |               |             |

(sowie: Pyramide, Dreicken, Tetraeder)
