# Geometrie Rechner mit Laravel 5.3

Für Nutzeroberfläche siehe layout.pdf 

Hilfsmittel für Geometrieaufgaben.

Nutzer kann zwischen geometrischen Objekten wählen (Kreis, Kugel, Rechteck, etc.) wählen und für z.B. Kreis einen Wert für Radius oder  Durchmesser oder Umkreis eingeben. 

Für diesen Wert erhält der Nutzer einen Kreis mit berechnetem Radius, Durchmesser, Umkreis und Flächeninhalt.

Nutzer kann diese Werte in einer Datenbank speichern, einsehen und löschen


- Verwendet Laravel als MVC
- Builder Erzeugungsmuster für die einzelnen geometrischen Objekte
- Bootstrap Grid und Forms
- Success Messages (Speichern)
- jQuery Fade-In Functions
- Bilder lizenfrei von www.pexels.com



<p align="left">
  <img src="https://s19.postimg.org/3u40tk2sj/startseite.jpg" width="500"/>
  <img src="https://s19.postimg.org/zba6gt5b7/berechnung.jpg" width="500"/>
   <img src="https://s19.postimg.org/efnw5k943/image.jpg" width="500"/>
</p>


in Arbeit! Bisher sind Werte für Kreis und Kugel berechenbar.

Beispieleingaben und Ausgaben für den Rechner

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
