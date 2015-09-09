=====================
Introduction
=====================

Die Extension unterstützt bei der Integration des Parallax-Sliders.
LayerSlider stellt die komfortable Oberfläche zur Verfügung um den Slider als Content Element innerhalb von TYPO3 zu verwalten.

Der Parallax-Slider unterstützt

* 100 2D-Überblend-Effekte
* 110 3D-Überblend-Effekte
* 31 Beschleunigungs/Abbremse-Varianten
* Parallaxe-Effekte
* Einbettung von Medien (Youtube und loklae)
* unbegrenzt viele Layer und Elemente pro Slider

Requirements
----------------------
Die Extension dient nur zur bequemen Konfiguration des Parallax-Sliders.
Der Parallax-Slider selbst ist nicht Bestandteil der Extension. Er ist kostenpflichtig (ca 15 USD) und muss über
Download unter http://codecanyon.net/item/layerslider-responsive-jquery-slider-plugin/922100?ref=kreatura bezogen werden.

Releases
-----------


* Major Release 1 unterstützt Parallax-Slider V 2.x, TYPO3 4.5-4.7
* Major Release 2 unterstützt Parallax-Slider V 4.x, TYPO3 4.5-4.7
* Major Release 3 unterstützt Parallax-Slider V 5.x, TYPO3 6.0 - 6.1

Bugs and Known Issues
-----------------------------------



To Do
-----------

* Manual ist nicht an allen Stellen konsistent.

* Bisher erfolgt das Anlegen von Layern und Elementen im Top-Down-Verfahren. Also zuerst Slider anlegen,
  dann im Slider dessen Layer anlegen und dannach dort die Elemente anlegen.


- Es gibt in dem Layerslider Beispiel noch leere Div Tags, die nur mit
Farbe befüllt sind. Das Funktioniert aber nicht mit dem Textfeld & div
ausgewählt, wenn da kein Text enthalten ist. Gibt es hierfür eine
Möglichkeit das Textfeld trotz fehlendem Inhalt zu verwenden (z.B. mit
&nbsp;)?

Change Log
-----------

3.0.14
* SQL-Definition korrigiert. Defaultwerte waren unsauber angegeben.
* Feldbeschriftung verbessert
* HTML-Parsing für den Elementtext deaktiviert

3.0.13
* Im Element können leere HTML-Tags (z.B. DIV) ausgegeben werden. Zugehörige Style-Strings sind damit wirksam
  (z.B. Hintergrundfarbe)
* Mehrzeilige Eingabe im Element-Text
* Image-Alt-Text kann separat erfasst werden
* Image kann über style-Attribut angepasst werden
* Bild Höhe & Breite px wird automatisch ergänzt, "auto“ wird unterstützt.
* Tippfehler Skalierung behoben
* Zahlenbereich für Skalierung erweitert; jetzt +-99.99
* Dropdown für easeInCubic, easeOutCubic, easeInOutCubic,
  EaseOutElastic korrigiert.

3.0.12
* Timeshift erlaubt auch negative Werte
* Scalein/out erlaubt dezimalwerte mit zwei Nachkommastellen
* Image im Element erhält width und height als Attribute

3.0.11
* easeOutElastic funktioniert jetzt. Tippfehler behoben.
* fehlendes </div> im Template ergänzt.

3.0.10
* Typos im SQL-File korrigiert. Tabellen werden jetzt wieder korrekt angelegt
* Sortierung korrigiert. Fehlende Tabellenspalte ergänzt. Elemente und Layer können wieder zugeordnet werden.
* Memo: keine Quickfixes aus dem Urlaub

3.0.9
* Typo im SQL-File korrigiert

3.0.8
* Textelemente unterstützen jetzt das Attribut nowrap
* Link auf Image-Elemente wird unterstützt
* Link auf einen anderen Layer wird unterstützt
* Reihenfolge der Elemente und Layer kann verändert werden

3.0.7
* Bordertop und Borderleft beim Element verwenden px als Einheit, wenn nur der Zahlenwert angegeben wird
* Dokumentation ergänzt
* Element und Layer: Attribute mit Defaultwerten werden nicht mehr im Template ausgegeben

3.0.6
* HTML-Tag für Textelemente ist frei wählbar (vorher immer h3)
* Ausgaben bereinigt
* Typo im List.html entfernt
* Globale Hintergrundfarbe darf Farbnamen oder Farbwert in Hex enthalten (mit vorgestelltem #)

3.0.5
* BGImage bei der Ausgabe in Hochkomma gesetzt

3.0.4
* Debugausgaben deaktiviert

3.0.3
* Feld "Element Height" entfernt (Altlast, wird nicht mehr unterstützt)
* Felder Borderleft und Bordertop erlauben auch Prozent-Werte und Pixelwerte. Einheit muss dazu angegeben werden
* Feld Textcolor entfällt.
* Feld Textstyle eingeführt. Hier kann der Inhalt der Eigenschaft "style" angegeben werden. Wird 1:1 in den html-code integriert
* Wert aus Container-Skin wurde nicht übernommen -> korrigiert
* Wert aus Skin-Pfad wurde nicht übernommen -> korrigiert
* Wert aus Hintergrundfarbe -> überflüssige Hochkomma entfernt
* Animationen werden auch im Text-Layer aktiviert
* Postionierung wird auch im Text-Layer benutzt
* Feld "Slider wählen" ist im Contentelement ist Pflichtfeld (verhindert die Fehlermeldung "Call to a member function getTitle() on a non-object..."
  wenn versehentlich kein Slider ausgewählt wurde.