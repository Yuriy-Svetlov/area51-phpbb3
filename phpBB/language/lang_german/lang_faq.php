<?php

/***************************************************************************
 *                            lang_faq.php [German]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 *
 * German Translation by:
 * Joel Ricardo Zick (Rici) webmaster@forcena-inn.de || http://www.sdc-forum.de
 ***************************************************************************/

// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Registrieren und Einloggen");
$faq[] = array("Warum kann ich mich nicht einloggen?", "Hast Du Dich registriert? Du musst Dich erst registrieren, bevor Du Dich einloggen kannst. Wurdest Du vom Board gebannt (in dem Fall erh�lst Du eine Nachricht)? Wenn dem so ist, solltest Du den Webmaster oder den Forumsadministrator kontaktiveren, um herauszufinden, warum. Falls Du registriert und nicht gebannt bist und Dich immer noch nicht einloggen kannst, dann �berpr�fe Deinen Usernamen und das Passwort. Normalerweise liegt hier der Fehler, falls nicht, kontaktiere den Forumsadministrator, es k�nnten eine fehlerhafte Forumskonfiguration vorliegen.");
$faq[] = array("Warum muss ich mich �berhaut registrieren?", "Es kann auch sein, dass Du das gar nicht musst, das ist die Entscheidung des Administrators. Auf jeden Fall erh�lst Du nach der Registrierung zus�tzliche Funktionen, die G�ste nicht haben, z.B. Avatare, Private Nachrichten, Eintritt in Usergruppen, usw. Es dauert nur wenige Augenblicke sich zu registrieren, Du solltest es also tun.");
$faq[] = array("Warum logge ich mich automatisch aus?", "Solltest Du die Funktion <i>Automatisch einloggen</i> beim Einloggen aktiviert haben, bleibst Du nur f�r eine gewisse Zeit eingeloggt. Dadurch wird der Mi�brauch Deines Accounts verhindert. Um eingeloggt zu bleiben, w�hle die entsprechende Option beim Einloggen. Dies ist nicht empfehlenswert, wenn Du an einem fremden Rechner sitzt, z.B. in einer B�cherei oder Universit�t, im Internetcaf� usw.");
$faq[] = array("Wie kann ich verhindern, dass man Name in der 'Wer ist online?'-Liste auftaucht?", "In Deinem Profil findest Du die Funktion <i>Onlinestatus verbergen</i>, und wenn Du diese aktivierst, k�nnen Dich nur noch Administratoren in der Liste sehen. Du z�hlst dann als versteckter User.");
$faq[] = array("Ich habe mein Passwort verloren!", "Kein Problem! Du kannst Dein Passwort resetten. Klicke dazu auf der Loginseite auf <u>Ich habe mein Passwort vergessen</u>, folge den Anweisungen und Du solltest recht flott wieder eingeloggt sein.");
$faq[] = array("Ich habe mich registriert, kann mich aber nicht einloggen!", "�berpr�fe erst, ob Du den richtigen Benutzernamen und/oder Passwort angegeben hast. Falls sie stimmen, gibt es zwei M�glichkeiten, was passiert ist: Wenn der COPPA Bestimmungen aktiviert sin und Du die Option <u>Ich bin unter 13 Jahre alt</u> beim Registrieren gew�hlt hast, musst Du den erhaltenen Anweisungen folgen. Falls dies nicht der Fall ist, braucht Dein Account eine Aktivierung. Auf einigen Boards ist es der Fall, dass eine Registrierung immer erst aktiviert werden muss, entweder von Dir selbst oder vom Administrator, bevor Du Dich einloggen kannst. Beim Registrieren wird es Dir gesagt, ob eine Aktivierung ben�tigt wird. Falls Dir eine E-Mail zugesandt wurde, folge den enthaltenen Anweisungen, falls Du diese E-Mail nicht erhalten hast, vergewissere Dich, dass die E-Mail Adresse korrekt war. Ein Grund f�r den Gebrauch der Accountaktivierungen ist die Vermeidung von Forumsgesindel. Wenn Du Dir sicher bist, dass die angegebene E-Mail Adresse richtig ist, kontaktiere den Administrator.");
$faq[] = array("Ich habe mich vor einiger Zeit registriert, kann mich aber nicht mehr einloggen!", "Die Gr�nde daf�r sind meistens, dass Du entweder einen falschen Usernamen oder ein falsches Psswort eingegeben hast (�berpr�fe die E-Mail, die Du vom Board geschickt bekommen hast) oder der Administrator hat Deinen Account gel�scht. Falls letzteres der Fall ist, hast Du vielleicht mit dem Account noch nichts gepostet? Es ist durch aus �blich, dass Foren regelm��ig User l�schen, die nichts gepostet haben, um die Gr��e der Datenbank zu verringern. Versuche Dich erneut zu registrieren und tauche wieder ein in die Welt der Diskussionen.");


$faq[] = array("--","Benutzerangaben und Einstellungen");
$faq[] = array("Wie �ndere ich meine Einstellungen?", "Deine Einstellungen (sofern Du registriert bist) werden in der Datenbank gespeichert. Klicke auf den <u>Profil</u>-Link, um sie zu �ndern (wird normalerweise am oberen Bildschirmrand angezeigt, h�ngt aber vom Style ab). Damit kannst Du jede Deiner Einstellungen �ndern");
$faq[] = array("Die Zeiten stimmen nicht!", "Die Zeiten stimmen h�chstwahrscheinlich schon, vermutlich hast Du einfach die angezeigte Zeitzone nicht richtig eingestellt. Falls dem so ist, solltest Du die Einstellungen Deines Profils �berpr�fen, um die Zeitzone, die f�r Dich zutreffend ist, zu w�hlen. Bitte beachte, dass Du die Zeitzone nur wechseln kannst, wenn Du ein registriertes Mitglied bist. Falls Du also noch nicht registriert bist, w�re das vielleicht ein guter Grund.");
$faq[] = array("Ich habe die Zeitzone gewechselt und die Zeit ist immer noch falsch!", "Wenn Du Dir sicher bist, die richtige Zeitzone gew�hlt zu haben und die Zeiten immer noch nicht stimmen, kann es daran liegen, dass das System auf Sommerzeit steht. Das Board ist nicht dazu erschaffen worden, zwischen Winter- und Sommerzeit zu wechseln, weswegen es im Sommer zu einer Stunde Differenz zwischen Deiner gew�hlten und der Boardzeit kommen kann.");
$faq[] = array("Meine Sprache ist nicht verf�gbar!", "Die wahrscheinlichsten Gr�nde sind, dass der Administrator die Sprache nicht installiert hat oder das Board wurde noch nicht in Deine Sprache �bersetzt. Versuche, den Board-Administrator davon zu �berzeugen, Dein Sprachfile zu installieren oder, fall es nicht existiert, kannst Du auch gerne selber eine �bersetzung schreiben. Weitere Informationen erh�lst Du auf der phpBB Group Website (Der Link ist am Ende jeder Seite)");
$faq[] = array("Wie kann ich ein Bild unter meinem Benutzernamen anzeigen?", "Es k�nenn sich zwei Bilder unter dem Benutzernamen befinden. Das erste geh�rt zu Deinem Rang, z.B. Punkte oder Sterne, die anzeigen, wie viele Beitr�ge Du geschrieben hast oder welchen Status Du im Forum hast. Darunter befindet sich meist ein gr��eres Bild, Avatar genannt. Dies ist normalerweise ein Einzelst�ck und an den Benutzer gebunden. Es liegt am Administrator, ob er Avatare erlaubt und ob die Benutzer w�hlen d�rfen, wie sie ihren Avatar zug�nglich machen. Wenn Du keine Avatare benutzen kannst, ist das eine Entscheidung des Administrators. Du solltest ihn nach dem Grund fragen (Er wird bestimmt einen guten haben).");
$faq[] = array("Wie kann ich meinen Rang �ndern?", "Normalerweise kannst Du nicht direkt den Wortlaut des Ranges �ndern (R�nge erscheinen unter Deinem Benutzernamen in Themen und in Deinem Profil, abh�ngig davon, welchen Style Du benutzt). Die meisten Boards benutzen R�nge, um anzuzeigen, wie viele Beitr�ge geschrieben wurden und bestimmte Benutzer, z.B. Moderatoren oder Administratoren, k�nnten einen speziellen Rang haben. Bitte bel�stige das Forum nicht mit unn�tigen Beitr�gen, nur um Deinen Rang zu erh�hen, sonst wirst Du auf einen Moderator oder Administrator treffen, der Deinen Rang einfach wieder senkt.");
$faq[] = array("Wenn ich auf den E-Mail Link eines Benutzers klicke, werde ich dazu aufgefordert, mich einzuloggen!", "Nur registrierte Benutzer k�nnen �ber das Forum E-Mails verschicken (falls der Administrator diese Funktion zul�sst). Damit sollen obsz�ne Mails von unbekannten Benutzern unterbunden werden.");


$faq[] = array("--","Beitr�ge schreiben");
$faq[] = array("Wie schreibe ein Thema in ein Forum?", "Ganz einfach, klicke einfach auf den entsprechenden Button auf der Forums- oder Beitragsseite. Es kann sein, dass Du Dich erst registrieren musst, bevor Du eine Nachricht schreiben kannst - Deine verf�gbaren Aktionen werden am Ende der Seite aufgelistet (die <i>Du kannst neue Themen erstellen, Du kannst an Umfragen teilnehmen, usw.<i>-Liste)");
$faq[] = array("Wie editiere oder l�sche ich einen Beitrag?", "Sofern Du nicht der Boardadministrator oder der Forumsmoderator bist, kannst Du nur Deine eigenen Beitr�ge l�schen oder editieren. Du kannst einen Beitrag editieren (eventuell nur f�r eine gewisse Zeit) indem Du auf den <i>Editieren</i>-Button des jeweiligen Beitrages klickst. Sollte jemand bereits auf den Beitrag geantwortet haben, wirst Du einen kleinen Text unterhalb des Beitrags lesen k�nnen, der anzeigt, wie oft der Text bearbeitet wurde. Er wird nur erscheinen, wenn jemand geantwortet hat, ferner wird er nicht erscheinen, falls ein Moderator oder Administrator den Beitrag editiert hat (Sie sollten eine Nachricht hinterlassen, warum sie den Beitrag editierten). Beachte, dass normale Benutzer keine Beitr�ge l�schen k�nnen, wenn schon jemand auf sie geantwortet hat.");
$faq[] = array("Wie kann ich eine Signatur anh�ngen?", "Um eine Signatur an einen Beitrag anzuh�ngen, musst Du erst eine im Profil erstellen. Wenn Du eine erstellt hast, aktiviere die <i>Signatur anh�ngen</i>-Funktion w�hrend der Beitragserstellung. Du kannst auch eine Standardsignatur an alle Beitr�ge anh�ngen, indem Du im Profil die entsprechende Option anw�hlst  (Du kannst das Anf�gen einer Signatur immer noch verhindern, indem Du die Signaturoption beim Beitragssschreiben abschaltest)");
$faq[] = array("Wie erstelle ich eine Umfrage?", "Eine Umfrage zu erstellen ist recht einfach: Wenn Du ein neues Thema erstellst, (oder den ersten Beitrag eines Themas editierst, sofern Du die Erlaubnis hast) solltest Du die <i>Umfrage hinzuf�gen</i>-Option unterhalb der Textbox sehen (falls Du sie nicht sehen kannst, hast Du m�glicherweise nicht die erforderlichen Rechte). Du solltest einen Titel f�r Deine Umfrage angeben und mindestens eine Antwortm�glichkeit (um eine M�glichkeit anzugeben, klicke auf den <i>M�glichkeit hinzuf�gen</i> Knopf. Du kannst auch ein Zeitlimit f�r die Umfrage setzen, 0 ist ein unendlich lang andauernde Umfrage. Es gibt automatische Grenze bei der Anzahl an Antwortoptionen, diese setzt der Administrator fest");
$faq[] = array("Wie editiere oder l�sche ich eine Umfrage?", "Genau wie mit den Beitr�gen, k�nnen Umfrage nur vom Verfasser editiert oder gel�scht werden, oder vom Forumsmoderator oder Administrator. Um eine Umfrage zu editieren, editiere den ersten Beitrag im Thema (die Umfrage ist immer damit verbunden). Wenn noch niemand bei der Umfrage mitgestimmt hat, k�nnen User die Umfrage editieren oder l�schen , falls jedoch schon jemand mitgestimmt hat, k�nnen nur Moderatoren oder Administratoren sie l�schen oder editieren. Damit soll verhindert werden, dass Personen ihre Umfragen beeinflussen, indem sie Optionen ver�ndern");
$faq[] = array("Warum kann ich ein Forum nicht betreten?", "Manche Foren k�nnen nur von bestimmten Benutzern oder Gruppen betreten werden. Um dort hineinzugelangen, Beitr�ge zu lesen oder zu schreiben usw. k�nntest Du eine spezielle Erlaubnis brauchen. Nur der Forumsmoderator und der Boardadministrator k�nnen Dir die Zugangsrechte daf�r geben, Du solltest sie um Zugang bitten, sofern dies gerechtfertigt ist.");
$faq[] = array("Warum kann ich bei Abstimmungen nicht mitmachen?", "Nur registrierte Benutzer k�nen an Umfragen teilnehmen. Dadurch wird eine Beeinflussung des Ergebnisses verhindert. Falls Du Dich registriert hast und immer noch nicht mitstimmen kannst, hast Du vermutlich nicht die erforderlichen Rechte dazu.");


$faq[] = array("--","Was man in und mit Beitr�gen tun kann");
$faq[] = array("Was ist BBCode?", "BBCode ist eine spezielle Abart von HTML. Ob Du BBCode benutzen kannst, wird vom Administrator vorgegeben. Du kannst es auch in einzelnen Beitr�gen deaktivieren. BBCode selber ist HTML sehr �hnlich, die Tags sind von den Klammern [ und ] umschlossen und dies bietet Dir gro�e Kontrolle dar�ber, was und wie etwas angezeigt wird. F�r weitere Informationen �ber den BBCode solltest Du Dir die Anleitung anschauen, die Du von der Beitr�ge Schreiben-Seite aus erreichen kannst..");
$faq[] = array("Darf ich HTML benutzen?", "Das h�ngt davon ab, ob es Euch vom Administrator erlaubt wurde. Falls Du es nicht darfst, wirst Du nachher nur ein Klammer-Wirrwarr wieder finden. Dies ist eine <i>Sicherung</i>, um Leute davon abzuhalten, das Forum mit unn�tigen Tags zu �berschwemmen, die das Layout zerst�ren oder andere St�rungen hervorrufen k�nnten. Falls HTML aktiviert wurde, kannst Du es immer noch manuell f�r jeden Beitrag deaktivieren, indem Du beim Schreiben die entsprechende Option aktivierst.");
$faq[] = array("Was sind Smilies?", "Smilies sind kleine Bilder, die benutzt werden k�nnen, um Gef�hle auszudr�cken. Es werden nur kurze Codes ben�tigt, z.B. zeigt :) Freude und :( Traurigkeit an. Die komplette Liste der Smilies kann auf der Beitrag Schreiben-Seite gesehen werden. �bertreibe es nicht mit Smilies, es kann schnell passieren, dass ein Beitrag dadurch v�llig un�bersichtlich wird. Ein Moderator k�nnte sich entschlie�en, den Beitrag zu bearbeiten oder sogar komplett zu l�schen.");
$faq[] = array("Darf ich Bilder einf�gen?", "Bilder k�nnen in der Tat im Beitrag angezeigt werden. Auf jeden Fall gibt es noch keine M�glichkeit, Bilder direkt aufs Board hochzuladen.  Deshalb musst Du zu einem bestehehden Bild verlinken, welches sich auf einem f�r die �ffentlichkeit zug�nglichen Server befindet. z.B. http://www.meineseite.de/bescheuertesbild.gif. Du kannst weder zu Bildern linken, die sich auf Deiner Festplatte befinden (au�er es handelt sich um einen �ffentlich-verf�gbaren Server) noch zu Bildern, die einen Zugang brauchen, um sie anzuzeigen (z.B. EMail-Konten, Passwort-gesch�tzte Seiten usw). Um das Bild anzuzeigen, benutze entweder den BB-Code [img] oder nutzt HMTL (sofern erlaubt).");
$faq[] = array("Was sind Ank�ndigungen?", "Ank�ndigungen beinhalten meistens wichtige Informationen und Du solltest sie so fr�h wie m�glich lesen. Ank�ndigungen erscheinen immer am Anfang des jeweiligen Forums. Ob Du eine Ank�ndigung machen kannst oder nicht h�ngt davon ab, was f�r Befugnisse dazu erstellt wurden. Diese legt der Board Administrator fest.");
$faq[] = array("Was sind Wichtige Themen?", "Wichtige Themen erscheinen unterhalb der Ank�ndigungen in der Forumsansicht. Sie enthalten auch meistens wichtige Informationen, die Du gelesen haben solltest. Genau wie mit den Ank�ndigungen, entscheidet auch bei den Wichtigen Themen der Administrator, wer sie posten darf und wer nicht.");
$faq[] = array("Was sind geschlossene Themen?", "Themen werden entweder vom Forumsmoderator oder dem Board Administrator geschlossen. Man kann auf geschlossene Beitr�ge nicht antworten und falls eine Umfrage angef�gt wurde, wird diese damit auch beendet. Es gibt verschiedene Gr�nde, warum ein Thema geschlossen wird.");


$faq[] = array("--","Benutzerebenen und Gruppen");
$faq[] = array("Was sind Administratoren?", "Administratoren haben die h�chste Kontrollebene im gesamten Forum. Sie haben die Macht, jede Forumsaktion zu unterbinden und Aktionen durchzuf�hren, wie die Vergabe von Befugnissen, das Bannen von Benutzern, Benutzergruppen erstellen, Moderatoren ernennen usw. Sie haben au�erdem die vollen Moderatorenrechte in jedem Forum.");
$faq[] = array("Was sind Moderatoren?", "Moderatoren sind Personen (oder Gruppen) die auf das t�gliche Geschehen in dem jeweiligen Forum achten. Sie haben die M�glichkeit, Beitr�ge zu editieren und zu l�schen, Themen zu schlie�en, �ffnen, verschieben oder l�schen. Moderatoren haben die Aufgabe, die Leute davon abzuhalten, unpassende Themen in einen Beitrag zu schreiben, oder sonstigen Bl�dsinn in die Welt zu setzen.");
$faq[] = array("Was sind Benutzergruppen?", "In Benutzergruppen werden einige Benutzer vom Administrator zusammengefasst. Jeder Benutzer kann zu mehreren Gruppen geh�ren, und jeder Gruppe k�nnen spezielle Zugangsrechte erteilt werden. So ist es f�r den Administrator einfacher, mehrere Benutzer zu Moderatoren eines bestimmten Forums zu erkl�ren, ihnen Rechte f�r ein privates Forum zu geben und so weiter.");
$faq[] = array("Wie kann ich einer Benutzergruppe beitreten?", "Um einer Benutzergruppe beizutreten, klicke auf den Benutzergruppe-Link im Men�, Du erh�lst dann einen �berblick �ber alle Benutzergruppen. Nicht alle Gruppen haben <i>offenen Zugang</i>, manche sind geschlossen und andere k�nnten versteckt sein. Falls die Gruppe Mitglieder zu l�sst, kannst Du um Einlass in die Gruppe bitten, indem Du auf den Beitreten-Button klickst. Der Gruppenmoderaotr muss noch seine Zustimmung geben, eventuell gibt es R�ckfragen, warum Du der Gruppe beitreten m�chtest. Bitte nerve die Gruppenmoderatoren nicht, nur weil sie Dich nicht in die Gruppe aufnehmen wollen, sie werden ihre Gr�nde haben.");
$faq[] = array("Wie werde ich ein Gruppenmoderator?", "Benutzergruppen werden vom Board Administrator erstellt, er bestimmt ebenfalls den Moderator. Falls Du daran interessiert bist, eine Benutzergruppe zu erstellen, solltest Du zuerst den Administrator kontaktieren, zum Beispiel mit einer Privaten Nachricht.");


$faq[] = array("--","Private Nachrichten");
$faq[] = array("Ich kann keine Privaten Nachrichten verschicken!", "Es gibt drei m�gliche Gr�nde daf�r: Du bist nicht registriert bzw. eingeloggt, der Board Administrator hat das Private Nachrichten-System f�r das gesamte Board abgeschaltet oder der Administrator hat Dir das Schreiben von PMs untersagt. Falls das letzte zutreffen sollte, solltest Du ihn fragen, warum.");
$faq[] = array("Ich erhalte dauernd ungewollte PMs!", "Es wird bald ein Ignorieren-System f�r das Private Nachrichten-System geben. Im Moment musst Du, falls Du ununterbrochen unerw�nschte Nachrichten von einer Person erh�lst, den Administrator informieren. Er kann ein Versenden von PMs durch den jeweiligen Benutzer verbieten.");
$faq[] = array("Ich habe eine Spamm- oder perverse E-Mail von jemandem auf diesem Board erhalten!", "Das E-Mail System dieses Boards enth�lt Sicherheitsvorkehrungen, um solche Aktionen eines Benutzers zu verhindern. Du solltest dem Board Administrator eine Kopie der erhaltenen E-Mail schicken, wichtig dabei ist, dass die Kopfzeilen angef�gt bleiben (die Details �ber den Benutzer, der die E-Mail schickte). Dann erst kann er handeln.");

//
// DIE DREI UNTEN STEHENDEN FRAGEN DER FAQ SOLLEN UN�BERSETZT BLEIBEN, DA ES SICH UM INTERNATIONALES RECHT HANDELT - LASST DIE DREI EINTR�GE BITTE ENGLISCH!
//
$faq[] = array("--","phpBB 2 Issues");
$faq[] = array("Who wrote this bulletin board?", "This software (in its unmodified form) is produced, released and is copyright  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. It is made available under the GNU General Public Licence and may be freely distributed, see link for more details");
$faq[] = array("Why isn't X feature available?", "This software was written by and licensed through phpBB Group. If you believe a feature needs to be added then please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the Group uses sourceforge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.");
$faq[] = array("Who do I contact about abusive and/or legal matters related to this board?", "You should contact the administrator of this board. If you cannot find who this you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");

//
// This ends the FAQ entries
//

?>