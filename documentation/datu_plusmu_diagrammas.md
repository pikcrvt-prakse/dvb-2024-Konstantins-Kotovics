## Funkcionālais sistēmas modelis
### Datu plūsmu modelis

**1.	Piedāvājumu meklēšana un filtrēšana.** Lietotājs ievada meklēšanas virknē ražotāju un modeli (skat. 6. att.). Vēl ir iespējams izvēlēties meklēšanas kritērijus, piemēram: ražotājs, modelis, minimālā cena, maksimālā cena, izdošanas gads, virsbūves tips, krāsa un transmisija, kuriem ir jau iepriekš sagatavoti parametri un kuri darbosies kopā ar meklēšanas virkni. Sistēma veic atbilstošu automobiļu meklēšanu pēc ievadītajiem un izvēlētājiem kritērijiem, ņemot atbilstošos datus no tabulām: "Piedāvājums", "Piedāvājuma informācija", "Automašīnas krāsa", "Ātrumkārba(transmisija)", "Dzinējs". Ja ir atrasti atbilstoši piedāvājumi, tie tiek attēloti lietotājam. Ja nekādi atbilstoši piedāvājumi netiek atrasti, tiks parādīts paziņojums, ka nav atrasts neviens atbilstošs rezultāts.

![DP4-1 Konstantīns Kotovičs Pedāvājumu meklēšanas un filtrēšanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/6.%20att.%20Pedāvājumu%20meklēšanas%20un%20filtrēšanas%20datu%20plūsmu%20diagramma.png)

6. att. Pedāvājumu meklēšanas un filtrēšanas datu plūsmu diagramma

**2.	Piedāvājumu pievienošana.** Apkalpojošs personāls atver piedāvājumu pievienošanas formu un aizpilda tajā nepieciešamos laukus (skat. 7. att.): ražotājs, sākuma cena, modelis, izdošanas gads,  massa, virsbūves tips, krāsa, attēls, krāsas cena, ātrumkārba, ātrumkārbas cena, dzinēja tips, dzinēja cena. Pēc datu ievadīšanas sistēma veic ievadīto informācijas pārbaudi, lai nodrošinātu tās precizitāti un atbilstību prasībām. Ja dati tiek ievadīti nepareizi, piemēram, ne visi lauki ir aizpildīti vai ievadīto simbolu skaits pārsniedz pieļaujamo, tiks izvadīts kļūdas ziņojums. Ja dati ir derīgi un atbilst kritērijiem, sistēma saglabā piedāvājumu datubāzē 5 tabulās: "Piedāvājums", "Piedāvājuma informācija", "Automašīnas krāsa", "Ātrumkārba(transmisija)", "Dzinējs" un izvada ziņojumu par veiksmīgo izpildi.

![DP4-1 Konstantīns Kotovičs Piedāvājuma pievienošanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/7.%20att.%20Piedāvājuma%20pievienošanas%20datu%20plūsmu%20diagramma.png)

7. att. Piedāvājuma pievienošanas datu plūsmu diagramma

**3.	Pasūtījuma izpildes statusa rediģēšana.** Apkalpojošais personāls apstrādās klientu pasūtījumus (skat. 8. att.), kas tiks sagrupēti trīs dažādās tabulās - "Jauns", "Procesā" un "Pabeigts". Ja klients ir nosūtījis pieprasījumu, pasūtījums automātiski tiks novietots tabulā "Jauns". Kad pasūtījuma izpildes process sāksies, apkalpojošais personāls mainīs pasūtījuma statusu uz "Procesā", visi izpildīti pasūtījumi tiks atzīmēti kā pabeigtie. Tiks pārbaudīts identificējošais numurs, lai statuss mainītos tieši izvēlētajai rindai. Ja apkalpojošais personāls veiks jebkādas izmaiņas attiecībā uz pasūtījuma statusu, šīs izmaiņas tiks atjaunotas un saglabātas datubāzē tabulā “Pasūtījumi” un izvadīs ziņu par veiksmīgo izmaiņu. Ja notiks servera kļūda, izvadīs atbilstošo kļūdu.

![DP4-1 Konstantīns Kotovičs Pasūtījuma izpildes statusa rediģšanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/8.%20att.%20Pasūtījuma%20izpildes%20statusa%20rediģšanas%20datu%20plūsmu%20diagramma.png)

8. att. Pasūtījuma izpildes statusa rediģšanas datu plūsmu diagramma

**4.	Oriģinālo komentāru pievienošana.**  No sākuma sistēma paņems lietotāja ID no tabulas "Lietotājs", lai identificēt kam piederēs šīs komentārijs, pēc tam tiks pārbaudīts komentāra teksts, lai noskaidrotu, vai tas ir derīgs (skat. 9.att.), kā arī vai tas nepārsniedz norādīto simbolu skaitu. Kad pārbaude ir veikta un komentārs ir derīgs, sistēma saglabās šo komentāru datubāzē tabulā “Komentārijs”. 

![DP4-1 Konstantīns Kotovičs Komentāru pievienošanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/9.%20att.%20Komentāru%20pievienošanas%20datu%20plūsmu%20diagramma.png)

9. att. Komentāru pievienošanas datu plūsmu diagramma

**5.	Atbilde uz oriģinālo komentāru.** Izmantojot šo funkciju, lietotājam ir iespēja ne tikai atstāt komentārus, bet arī atbildēt uz jau atstātajiem komentāriem. Nosūtot atbildi no tabulas “Lietotājs”, tiek ņemts lietotāja ID numurs  (skat. 10. att.), lai noteiktu, kurš atstājis komentāru, ja šī vērtība netiek saņemta, komentārs netiks parādīts. Pēc tam no tabulas “Komentāriji” tiek ņemts sākotnējā komentāra identificējošais numurs, ja šī vērtība netiek iegūta, komentārs tiks uzskatīts par patstāvīgu komentāru, bet ne par atbildi. Pēc tam tiek pārbaudīts ievadītā ziņojuma formāts un garums, un, ja viss ir pareizi, komentārs tiek pievienots tabulā “Komentāriji”. 

![DP4-1 Konstantīns Kotovičs Atbildes uz oriģinālo komentāriju pievienošanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/10.%20att.%20Atbildes%20uz%20oriģinālo%20komentāriju%20pievienošanas%20datu%20plūsmu%20diagramma.png)

10. att. Atbildes uz oriģinālo komentāriju pievienošanas datu plūsmu diagramma

**6.	Pasūtījumu veikšana.** Ja lietotājs nolemj veikt pasūtījumu, vispirms ir jāievada šādi dati: vārds, uzvārds, tālruņa numurs, un dati: datums un statuss tiks aizpildīti automātiski  (skat. 11. att.). Pasūtījuma informācijai nepieciešami arī dati par pašu transportlīdzekli, tāpēc identifikācijas numuri tiek ņemti no tabulām “Lietotājs”, “Pasūtījumi”, “Specifiskas detaļas”. Pēc tam tiek pārbaudīti ievadītie dati, ja trūkst kontaktinformācijas, tiek parādīta attiecīga kļūda, ja viss ir kārtībā, pasūtījums tiek veiksmīgi ievadīts tabulā “Pasūtījumi” un lietotājam tiek nosūtīts paziņojums.

![DP4-1 Konstantīns Kotovičs Pasūtījumu veikšanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/11.%20att.%20Pasūtījumu%20veikšanas%20datu%20plūsmu%20diagramma.png)

11. att. Pasūtījumu veikšanas datu plūsmu diagramma

**7.	Ziņojumu tēmu statusu rediģēšana.** Lietotājam ir iespēja atsevišķā logā izvēlēties, par kurām tēmām viņš vēlas saņemt paziņojumus. Ir 3 galvenās tēmas  (skat. 12. att.): “Forums” - paziņojumi, kad tiek atbildēts uz lietotāja komentāru sesijā, “Pasūtījumi” - kad tiek izpildīts pasūtījums, lietotājs tiek informēts par veiksmīgu pasūtījumu, “Profils” - kad tiek mainīta parole vai kad lietotājs reģistrējas. Vispirms tiek iegūts ID, lai identificētu lietotāju un pašu tēmu, un tad, ja serverī nav kļūdas, ieraksts tiek veiksmīgi ievadīts tabulā.

![DP4-1 Konstantīns Kotovičs Ziņojumu tēmu statusu rediģēšanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/12.%20att.%20Ziņojumu%20tēmu%20statusu%20rediģēšanas%20datu%20plūsmu%20diagramma.png)

12. att. Ziņojumu tēmu statusu rediģēšanas datu plūsmu diagramma

**8.	Komplektācijas dzēšana.** Apkalpojošs personāls var dzēst izvēlēto konfigurāciju, vispirms tiek automātiski ņemts komplektācijas ID  (skat. 13. att.), lai noteiktu konkrēto konfigurāciju, pēc tam tiek iegūts ID no tabulām “Automašīnu krāsa”, “Ātrumkārba”, “Dzinējs”, lai dzēstu saistītos ar konfigurāciju ierakstus. Pēc tam, ja nav kļūdas, ieraksts tiek veiksmīgi dzēsts. 

![DP4-1 Konstantīns Kotovičs Komplektācijas dzēšanas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/13.%20att.%20Komplektācijas%20dzēšanas%20datu%20plūsmu%20diagramma.png)

13. att. Komplektācijas dzēšanas datu plūsmu diagramma

**9.	Paroles maiņa.** Ja lietotājs vēlas labot profilu, viņam būs iespēja mainīt paroli. Kad lietotājs ievadīs tagadējo paroli, jauno paroli un atkārtoto paroli, sistēma pārbaudīs, vai iepriekšējā parole ir ievadīta pareizi (skat. 14. att.) un vai jaunā parole atbilst atkārtoti ievadītajai. Informācija tiks ņemta no tabulas “Lietotājs”. Ja ievadītās paroles nesakrīt, vai tagadējā parole neatbilst, vai ja kāda no tām ir ievadīta nepareizi, sistēma parādīs kļūdas paziņojumu, ļaujot lietotājam labot ievadītos datus un nodrošinot drošu profila informācijas labošanu.

![DP4-1 Konstantīns Kotovičs Paroles maiņas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/14.%20att.%20Paroles%20maiņas%20datu%20plūsmu%20diagramma.png)

14. att. Paroles maiņas datu plūsmu diagramma

**10.	Lietotāja reģistrācija.** Kad lietotājs reģistrējas, sistēma veic ievadīto datu pārbaudi (skat. 15. att.), lai nodrošinātu to kvalitāti un drošību. Tas ietver lietotājvārda un e-pasta adreses unikāluma pārbaudi, kā arī paroles drošības novērtējumu. Lietotāja lomu un profila attēlu sistēma piešķirs automātiski. Ja kāds no ievadītajiem datiem neatbilst prasībām vai nav derīgs, sistēma uzrādīs attiecīgu kļūdas paziņojumu, sniedzot norādījumus, kādēļ reģistrācija nevar tikt pabeigta.  Ja visi dati ir derīgi, sistēma saglabā lietotāja informāciju datubāzē tabulā “Lietotājs”, nodrošinot drošu un uzticamu reģistrācijas procesu.

![DP4-1 Konstantīns Kotovičs Lietotāja reģistrācijas datu plūsmu diagramma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/15.%20att.%20Lietotāja%20reģistrācijas%20datu%20plūsmu%20diagramma.png)

15. att. Lietotāja reģistrācijas datu plūsmu diagramma
