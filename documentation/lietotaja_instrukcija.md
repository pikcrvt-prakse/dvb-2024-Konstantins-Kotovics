# LIETOTĀJA CEĻVEDIS
## Sistēmas prasības

Tīmekļa vietne ir veidota tā, lai būtu pieejama un ērti lietojama, neprasot augstas sistēmas prasības. Lai palaistu šo tīmekļa vietni lokāli, izmantojot Laragon, ir jānodrošina, ka ierīce atbilst šādām minimālajām prasībām:


| Komponents          | Minimālās prasības                                           |
|---------------------|--------------------------------------------------------------|
| Operētājsistēma     | Windows 7 vai jaunāka, MacOS (ar Wine)                       |
| Laragon versija     | Laragon 4.0 vai jaunāka                                      |
| Procesors           | Intel Core i3 vai jaunāks                                |
| Atmiņa (RAM)        | 4 GB vai vairāk                                              |
| Cietā diska vieta   | Vismaz 500 MB brīvas vietas (vietnei un Laragon instalācijai)|
| Interneta pieslēgums| 1 Mbps vai ātrāks                                            |

Lai palaistu vietni lokāli, jums vispirms jālejupielādē un jāuzstāda Laragon, kas ir ērti lietojama izstrādes vide, kas ietver Apache, MySQL, PHP un citus svarīgus komponentus, nepieciešamus vietnes lokālai palaišanai. Šeit ir dažas piemērotas versijas, kuras varat izmantot bez kļūdām:

- Laragon 4.0
- Laragon 4.1
- Laragon 4.2
- Laragon 5.0
- Laragon 5.1
- Laragon 5.2
- Laragon 6.0

Lai pilnībā izmantotu vietni un pārliecinātos, ka tā darbojas pareizi, ir nepieciešams arī viens no populārajiem mūsdienu pārlūkiem:

- Microsoft Edge (jaunākā versija)
- Mozilla Firefox (jaunākā versija)
- Google Chrome (jaunākā versija)
- Opera GX (jaunākā versija)

Papildus, lai varētu izpakot lejupielādēto projektu ZIP formātā, ir nepieciešams uzstādīt arhivatoru. Šeit ir daži piemēri populāru arhivatoru:

- 7-Zip
- WinRAR
- WinZip

## Sistēmas instalācija un palaišana 

Lai vietne darbotos uz jūsu paša datora, ir nepieciešams veikt instalācijas un palaišanas procesu. Zemāk esošajā instrukcijā ir sniegta detalizēta informācija par katru soli, lai nodrošinātu veiksmīgu vietnes iedarbināšanu lokāli:

1.Vietnes failu lejupielāde no GitHub:

- Apmeklējiet GitHub repozitoriju.
- Noklikšķiniet uz zaļā pogas "Code" un izvēlieties "Download ZIP" (skat. 17. att.).

![DP4-1 Konstantīns Kotovičs GitHub repozitorija](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/17.%20att.%20GitHub%20repozitorija.png)

17. att. GitHub repozitorija

2.Laragon uzstādīšana:

- Lejupielādējiet un instalējiet Laragon no oficiālās mājas lapas.
- Palaidiet instalēto Laragon.

3.Vietnes failu novietošana Laragonā:

- Atveriet Laragon un noklikšķiniet uz pogas "Root" (skat. 19. att.).
- Atarhivējiet iepriekš lejupielādēto ZIP failu mapē "www".
- Lejupielādētā mape tiks nosaukta kā "autosalons-main". Pārdēvējiet šo mapi uz "autosalons" (skat. 18. att.), jo GitHub pievieno "-main" galveno zara nosaukumam.

![DP4-1 Konstantīns Kotovičs mapes nosaukums](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/18.%20att.%20mapes%20nosaukums.png)

18. att. mapes nosaukums

![DP4-1 Konstantīns Kotovičs Largona logs, mape ar projektu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/19.%20att.%20Largona%20logs%2C%20mape%20ar%20projektu.png)

19. att. Largona logs, mape ar projektu

4.Servera un datu bāzes palaišana:

- Noklikšķiniet uz pogas "Start All" galvenajā Laragon logā, lai palaidinātu tīmekļa serveri un MySQL datu bāzi (skat. 20. att.).

![DP4-1 Konstantīns Kotovičs Largona logs, starta poga](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/20.%20att.%20Largona%20logs%2C%20starta%20poga.png)

20. att. Largona logs, starta poga

5.Datu bāzes izveide:

- Pēc servera palaišanas atveriet datu bāzi, noklikšķinot uz pogas "Database" galvenajā Laragon logā.
- Pēc datu bāzes atvēršanas noklikšķiniet uz "File" kreisajā augšējā stūrī un izvēlieties "Run SQL file" (skat. 21. att.).
- Atlasiet failu "database.sql", kas atrodas lejupielādētā repozitorija mapē "sql".
- Šis fails izveidos datu bāzi ar visām nepieciešamajām tabulām.

![DP4-1 Konstantīns Kotovičs Logs ar datubāzes pievienošanu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/21.%20att.%20Logs%20ar%20datubāzes%20pievienošanu.png)

21. att. Logs ar datubāzes pievienošanu

6.Vietnes palaišana:

- Atveriet jebkuru interneta pārlūku datorā.
- Adreses joslā ievadiet: http://localhost/autosalons/index.php.
- Nospiediet Enter, lai atvērtu vietni.

Pēc šo soļu izpildes, vietne būs gatava lietošanai lokālajā vidē.

## Programmas apraksts 

Vispirms jāatver tīmekļa vietnes sākuma lapu: http://localhost/autosalons/index.php, (skat. 22. att.).

1.Reģistrācija vai reģistrētu lietotāju autorizācija. 

![DP4-1 Konstantīns Kotovičs mājaslapas skats](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/22.%20att.%20mājaslapas%20skats.png)

22. att. mājaslapas skats

Ievadam visus nepieciešamos laukus un noklikšķinam uz pogas “Sign In” (skat. 23. att.), ja nav reģistrēta neviena profila, nospiežam pogu “Sign Up”.

![DP4-1 Konstantīns Kotovičs autorizācijas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/23.%20att.%20autorizācijas%20forma.png)
 
23. att. autorizācijas forma

Reģistrācijas lapā ir jāaizpilda vairāk lauku un jāņem vērā formāts un rakstzīmju skaits (skat. 24. att.).

![DP4-1 Konstantīns Kotovičs reģistrācijas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/24.%20att.%20reģistrācijas%20forma.png)
 
24. att. reģistrācijas forma

Ja ievadāt visus datus, tiksiet novirzīts uz sākumlapu, taču atkarībā no ievadītajiem datiem tā tiks rādīta atšķirīgi. Ja pierakstīsieties apkalpojošā personāla kontā, uz kartītēm ar piedāvājumiem redzēsiet statusus (skat. 25. att.), un šie statusi noteiks, vai piedāvājumi tiks rādīti lietotājam vai ne. 

![DP4-1 Konstantīns Kotovičs piedāvājumu atspoguļošanas lapa personālam](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/25.%20att.%20piedāvājumu%20atspoguļošanas%20lapa%20personālam.png)
 
25. att. piedāvājumu atspoguļošanas lapa personālam

Ja pierakstīsieties kā parasts lietotājs, statusi un slēptie piedāvājumi nebūs redzami (skat. 26. att.).
 
![DP4-1 Konstantīns Kotovičs piedāvājumu atspoguļošanas lapa letotājam](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/26.%20att.%20piedāvājumu%20atspoguļošanas%20lapa%20letotājam.png)

26. att. piedāvājumu atspoguļošanas lapa letotājam

2.Jaunu transportlīdzekļu/piedāvājumu pievienošana.

Administratora augšējā joslā varam noklikšķināt uz profila attēla, pēc tam parādīsies saraksts, kurā izvēlamies “Add Offer” (skat. 27. att.), un parādīsies lapa, kurā jāaizpilda visi lauki. 

![DP4-1 Konstantīns Kotovičs navigācijas joslā, nolaižamajs saraksts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/27.%20att.%20navigācijas%20joslā%2C%20nolaižamajs%20saraksts.png)
 
27. att. navigācijas joslā, nolaižamajs saraksts

Varam redzēt 4 kolonnas, pirmajā ir vispārīga informācija par automobili, bet pārējās 3 ir saistītas ar konfigurāciju, kas vienam un tam pašam modelim var atšķirties (skat. 28. att.).

![DP4-1 Konstantīns Kotovičs piedāvājumu pievienošanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/28.%20att.%20piedāvājumu%20pievienošanas%20forma.png)
 
28. att. piedāvājumu pievienošanas forma

Laukā, kur ir nepieciešams izvēlēties automašīnas ražošanas gadu, ērtības dēļ jau ir sagatavoti varianti (skat. 29. att.), jauni gadi tiks pievienoti automātiski.

![DP4-1 Konstantīns Kotovičs ražošanas gada izvēles lauks](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/29.%20att.%20ražošanas%20gada%20izvēles%20lauks.png)
 
29. att. ražošanas gada izvēles lauks

3.Piedāvājumu meklēšana un filtrēšana.

Galvenajā lapā mēs varam redzēt meklēšanas joslu un filtrus blakus (skat. 30. att.), tie darbojas kopā. 

![DP4-1 Konstantīns Kotovičs meklēšanas josla un filtri](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/30.%20att.%20meklēšanas%20josla%20un%20filtri.png)

30. att. meklēšanas josla un filtri

Ja netiks atrasti atbilstoši piedāvājumi, tiks parādīts uzraksts: “Sorry, but we couldn't find anything.” (skat. 31. att.), bet, ja būs sakritības, tiks parādīti atbilstoši automobiļi.

![DP4-1 Konstantīns Kotovičs izejas virkne, ja nekas nav atrasts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/31.%20att.%20izejas%20virkne%2C%20ja%20nekas%20nav%20atrasts.png)
 
31. att. izejas virkne, ja nekas nav atrasts

Ja mēs ievadām gan meklēšanas joslā, gan filtros, lai atlasītu parametrus, tad tiks ņemti vērā visi atlasītie vai ievadītie lauki (skat. 32. att.).

![DP4-1 Konstantīns Kotovičs piedāvājumu sadaļa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/32.%20att.%20piedāvājumu%20sadaļa.png)
 
32. att. piedāvājumu sadaļa

Lai apskatītu informāciju par piedāvājumu un ar to saistīto funkcionalitāti, ir jānovieto kursors virs attiecīgās kartiņas un jānoklikšķina uz pogas “View” (skat. 33. att.).

![DP4-1 Konstantīns Kotovičs piedāvājumu kartiņa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/33.%20att.%20piedāvājumu%20kartiņa.png)
 
33. att. piedāvājumu kartiņa

4.Transportlīdzekļa lapa un to pasūtīšana.

Šajā lapā mēs varam redzēt visu detalizēto informāciju par izvēlēto piedāvājumu (skat. 34. att.).

![DP4-1 Konstantīns Kotovičs piedāvājuma lapa no apkalpojošā personāla skata](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/34.%20att.%20piedāvājuma%20lapa%20no%20apkalpojošā%20personāla%20skata.png)
 
34. att. piedāvājuma lapa no apkalpojošā personāla skata

Atšķirībā no administratora lietotājam nav pogas “Settings” (skat. 35. att.).

![DP4-1 Konstantīns Kotovičs piedāvājuma detalizētā informācija](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/35.%20att.%20piedāvājuma%20detalizētā%20informācija.png)
 
35. att. piedāvājuma detalizētā informācija

Atsevišķā logā tiek parādītas visas konfigurācijas, kas ir saistītas ar šo modeli, un izvēlētā konfigurācija ir pelēkā krāsā (skat. 36. att.). 

![DP4-1 Konstantīns Kotovičs konfigurāciju izvēles logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/36.%20att.%20konfigurāciju%20izvēles%20logs.png)
 
36. att. konfigurāciju izvēles logs

Izvēloties citu konfigurāciju un noklikšķinot uz pogas “Choose” (skat. 37. att.), mēs tiksim novirzīti uz tā paša modeļa lapu, bet ar citu konfigurāciju.

![DP4-1 Konstantīns Kotovičs piedāvājuma lapa no lietotāja skata](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/37.%20att.%20piedāvājuma%20lapa%20no%20lietotāja%20skata.png)
 
37. att. piedāvājuma lapa no lietotāja skata

Lai pasūtītu izvēlēto automašīnu, nospiežam pogu “Get an offer”. Pēc tam aizpildam nepieciešamos laukus ar kontaktinformāciju un atzīmējam, ka piekrītam noteikumiem (skat. 38. att.).

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/38.%20att.%20pasūtīšanas%20forma.png)
 
38. att. pasūtīšanas forma

Pēc tam tiek parādīts apstiprinājuma logs ar visu informāciju par automašīnu un lietotāju (skat. 39. att.), kas veicis pasūtījumu.

![DP4-1 Konstantīns Kotovičs apstiprinājuma logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/39.%20att.%20apstiprinājuma%20logs.png)
 
39. att. apstiprinājuma logs

Ja pasūtījums ir veiksmīgi nosūtīts, lietotājs saņems paziņojumu (skat. 40. att.).

![DP4-1 Konstantīns Kotovičs ziņojumu logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/40.%20att.%20ziņojumu%20logs.png)
 
40. att. ziņojumu logs

5.Transportlīdzekļa konfigurācijas dzēšana vai informācijas rediģēšana.

Administratoram piedāvājuma lapā ir poga ar parametriem, noklikšķinot uz tās, parādās logs, kura pirmajā sadaļā var rediģēt informāciju par pašu modeli un konkrēto konfigurāciju (skat. 41. att.).

![DP4-1 Konstantīns Kotovičs informācijas rediģēšanas sadaļa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/41.%20att.%20informācijas%20rediģēšanas%20sadaļa.png)
 
41. att. informācijas rediģēšanas sadaļa

Otrā sadaļa ļauj pievienot jaunas konfigurācijas esošajam modelim (skat. 42. att.).

![DP4-1 Konstantīns Kotovičs konfigurāciju pievienošanas sadaļa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/42.%20att.%20konfigurāciju%20pievienošanas%20sadaļa.png)
 
42. att. konfigurāciju pievienošanas sadaļa

Un trešajā sadaļā ir iespēja izdzēst konkrēto konfigurāciju vai pārveidot to par neaktīvu (skat. 43. att.), tad tā netiks rādīta lietotājam.

![DP4-1 Konstantīns Kotovičs kontroles pogas sadaļa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/43.%20att.%20kontroles%20pogas%20sadaļa.png)
 
43. att. kontroles pogas sadaļa

6.Ziņojumu saņemšana un to dzēšana.

Katram reģistrētajam lietotājam ir paziņojumu attēls navigācijas joslā, ja nav nelasītu paziņojumu, tā būs neaktīva (skat. 44. att.).

![DP4-1 Konstantīns Kotovičs navigācijas josla ar neaktīvo attēlu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/44.%20att.%20navigācijas%20josla%20ar%20neaktīvo%20attēlu.png)
 
44. att. navigācijas josla ar neaktīvo attēlu

Ja ir jauni paziņojumi, kurus lietotājs nav izlasījis, tā tiks mainīta uz aktīvu (skat. 45. att.).

![DP4-1 Konstantīns Kotovičs navigācijas josla ar aktīvo attēlu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/45.%20att.%20navigācijas%20josla%20ar%20aktīvo%20attēlu.png)
 
45. att. navigācijas josla ar aktīvo attēlu

Noklikšķinot uz šī attēla, tiks atvērts logs ar saņemtajiem paziņojumiem (skat. 46. att.). Visus paziņojumus var dzēst, noklikšķinot uz krustiņa pret tiem, vai arī var dzēst tos visus uzreiz, noklikšķinot uz pogas “Clear all”. Ziņojumi ir sadalīti 3 tēmās: “Forum”, “Orders”, “Profile”, katrs paziņojums ir saistīts ar attiecīgo tēmu, piemēram, ja tiek atbildēts uz lietotāja sesijā atstāto komentāru, tiks nosūtīts paziņojums ar tēmu “Forums”. 

![DP4-1 Konstantīns Kotovičs ziņojumu logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/46.%20att.%20ziņojumu%20logs.png)
 
46. att. ziņojumu logs

Lietotājs var paslēpt tēmas, kas viņu neinteresē, izvēloties iespēju “Hide” pie konkrētām tēmām (skat. 47. att.), un paziņojumi netiks rādīti.

![DP4-1 Konstantīns Kotovičs tukšs ziņojumu logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/47.%20att.%20tukšs%20ziņojumu%20logs.png)
 
47. att. tukšs ziņojumu logs

7.Lietotāja lapa un tās rediģēšana.

Lai nokļūtu profila lapā, navigācijas joslā no nolaižamajā sarakstā jāizvēlas “Profile & Orders” (skat. 48. att.).

![DP4-1 Konstantīns Kotovičs navigācijas joslā, nolaižamajs saraksts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/48.%20att.%20navigācijas%20joslā%2C%20nolaižamajs%20saraksts.png)
 
48. att. navigācijas joslā, nolaižamajs saraksts

Lapā var mainīt profila attēlu (skat. 49. att.), bet paroli apkalpojošs personāls nevar mainīt patstāvīgi, to var darīt tikai administrators.

![DP4-1 Konstantīns Kotovičs personāla profila lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/49.%20att.%20personāla%20profila%20lapa.png)
 
49. att. personāla profila lapa

Atšķirībā no apkalpojošā personāla lietotāji var mainīt savu paroli (skat. 50. att.), ievadot pašreizējo paroli, jauno paroli un atkārtoti jauno paroli.

![DP4-1 Konstantīns Kotovičs lietotāja profila lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/50.%20att.%20lietotāja%20profila%20lapa.png)
 
50. att. lietotāja profila lapa

Izvēloties otro sadaļu “My Orders”, var apskatīt savu pasūtījumu vēsturi (skat. 51. att.).

![DP4-1 Konstantīns Kotovičs lietotāja pasūtījumu vēstures lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/51.%20att.%20lietotāja%20pasūtījumu%20vēstures%20lapa.png)
 
51. att. lietotāja pasūtījumu vēstures lapa

Tabulu ar pasūtījumiem var eksportēt Excel failā, noklikšķinot uz pogas “Export To Excel” (skat. 52. att.).

![DP4-1 Konstantīns Kotovičs lietotāja pasūtījumu vēstures Excel tabula](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/52.%20att.%20lietotāja%20pasūtījumu%20vēstures%20Excel%20tabula.png)
 
52. att. lietotāja pasūtījumu vēstures Excel tabula

8.Visu lietotāju pasūtījumu vēsture un izpildes statusa rediģēšana.

Lai apskatīt visu lietotāju pasūtījumu vēsturi, navigācijas joslā no nolaižamajā sarakstā jāizvēlas “All orders” (skat. 53. att.). 

![DP4-1 Konstantīns Kotovičs navigācijas joslā nolaižamajs saraksts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/53.%20att.%20navigācijas%20joslā%20nolaižamajs%20saraksts.png)
 
53. att. navigācijas joslā nolaižamajs saraksts

Šī lapa ir paredzēta tikai apkalpojošajam personālam (skat. 54. att.).

![DP4-1 Konstantīns Kotovičs visu lietotāju pasūtījumu vēstures lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/54.%20att.%20visu%20lietotāju%20pasūtījumu%20vēstures%20lapa.png)
 
54. att. visu lietotāju pasūtījumu vēstures lapa

Šajā lapā ir 3 sadaļas: “New”, “In progress”, “Done”.  Tas nozīmē, ka pasūtījumi ir iedalīti 3 kategorijās, kurās var mainīt katra pasūtījuma statusu, un pēc pogas “Save changes” nospiešanas ieraksti tiek pārvietoti uz attiecīgajām tabulām (skat. 55. att.).

![DP4-1 Konstantīns Kotovičs statusa rediģēšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/55.%20att.%20statusa%20rediģēšanas%20forma.png)
 
55. att. statusa rediģēšanas forma

Šo tabulu var arī izvadīt Excel failā (skat. 56. att.), noklikšķinot uz pogas “Export to Excel” augšējā labajā stūrī.

![DP4-1 Konstantīns Kotovičs lietotāja pasūtījumu vēstures Excel tabula](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/56.%20att.%20lietotāja%20pasūtījumu%20vēstures%20Excel%20tabula.png)
 
56. att. lietotāja pasūtījumu vēstures Excel tabula

9.Komentāru pievienošana un dzēšana.

Lai nokļūtu šajā lapā, navigācijas joslā izvēlieties “Forum” (skat. 57. att.). 

![DP4-1 Konstantīns Kotovičs navigācijas joslā, nolaižamajs saraksts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/57.%20att.%20navigācijas%20joslā%2C%20nolaižamajs%20saraksts.png)
 
57. att. navigācijas joslā, nolaižamajs saraksts

Pirmo reizi atverot šo lapu, lietotājam tiks parādīti foruma noteikumi (skat. 58. att.), kuri ir jāpieņem, lai varētu lasīt un atstāt komentārus, tas ir jādara tikai vienu reizi, pēc tam šis logs vairs netiks rādīts.

![DP4-1 Konstantīns Kotovičs foruma noteikumi](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/58.%20att.%20foruma%20noteikumi.png)
 
58. att. foruma noteikumi

Autorizētiem lietotājiem ir iespēja publicēt komentārus līdz 700 rakstzīmēm vai atbildēt uz citiem komentāriem, kā arī iespēja dzēst savus komentārus (skat. 59. att.). Personāls var dzēst visus komentārus.

![DP4-1 Konstantīns Kotovičs komentāru lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/59.%20att.%20komentāru%20lapa.png)
 
59. att. komentāru lapa

10.Informācijas lapu apskate.

Lai skatītu kontaktinformāciju, navigācijas joslā noklikšķiniet uz pogas “About Us” (skat. 60. att.).

![DP4-1 Konstantīns Kotovičs navigācijas joslā](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/60.%20att.%20navigācijas%20joslā.png)
 
60. att. navigācijas joslā

Šajā lapā ir saites uz pakalpojuma sociālajiem tīkliem, kā arī visa kontaktinformācija (skat. 61. att.).

![DP4-1 Konstantīns Kotovičs kontaktinformācijas lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/61.%20att.%20kontaktinformācijas%20lapa.png)
 
61. att. kontaktinformācijas lapa

Navigācijas joslā ir arī punkts “Help & Information” (skat. 62. att.).

![DP4-1 Konstantīns Kotovičs navigācijas joslā, nolaižamajs saraksts](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/62.%20att.%20navigācijas%20joslā%2C%20nolaižamajs%20saraksts.png)
 
62. att. navigācijas joslā, nolaižamajs saraksts

Šajā lapā ir arī neliela informācija par pakalpojumu (skat. 63. att.).

![DP4-1 Konstantīns Kotovičs informācijas lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/63.%20att.%20informācijas%20lapa.png)
 
63. att. informācijas lapa

11.Izrakstīšanās no konta

Izvēlamies opciju "Sign out" (skat. 64. att.), pēc kā sesija tiks pārtraukta.

![DP4-1 Konstantīns Kotovičs informācijas lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/63.%20att.%20informācijas%20lapa.png)
 
64. att. navigācijas josla.png

## Testa piemērs
Šajā sadaļā ir sniegti piemēri, kas parāda, kā pārbaudīt sistēmas funkcionalitāti dažādās situācijās. Katram testam ir aprakstīti ievaddati un sagaidāmais rezultāts, kas palīdzēs saprast, kā sistēma reaģē uz konkrētiem ievaddatiem un kādi kļūdu ziņojumi tiek rādīti lietotājam. Tas palīdzēs nodrošināt, ka sistēma darbojas atbilstoši specifikācijām un lietotāju prasībām.

| Nr. | Prasības numurs | Prasības nosaukums       | Ievaddati/situācijas apraksts                                     | Sagaidāmais rezultāts                                          | Statuss |
| --- | ---------------- | ------------------------- | ----------------------------------------------------------------- | -------------------------------------------------------------- | ------- |
| 1.  | 1.               | Jauna lietotāja reģistrācija | Pareizi dati lietotāja vārds, lietotāja e-pasts, 1.parole, 2.parole | Ieraksts ir pievienots datubāzei, un lietotājam tiek nosūtīts paziņojums. | Pareizi |
| 2.  |                  |                           | konstantins@gmail.com                                            | Paziņojums, ka šis e-pasts jau ir aizņemts                     | Pareizi |
| 3.  |                  |                           | 1. un 2. parole = k18t                                           | Paziņojums, ka parole ir pārāk īsa – tai jābūt vismaz 6 simbolu garai | Pareizi |
| 4.  | 11.2.            | Lietotāja paroles maiņa    | Pareizi dati spēkā esošā parole, jauna parole, atkārtoti jauna parole | Ieraksta rediģēšana datubāzē un paziņojums par veiksmīgu paroles maiņu | Pareizi |
| 5.  |                  |                           | Spēkā esošā parole: r18opX2<br>Jauna parole: r18opX2              | Tiek parādīta kļūda, ka jaunajai parolei un esošajai jābūt atšķirīgām | Pareizi |
| 6.  |                  |                           | Jauna parole: r18opX2<br>atkārtoti ievadīta jaunā parole: irwv8opX2 | Paziņojums, ka jaunā un atkārtoti ievadītā parole nesakrīt    | Pareizi |
| 7.  | 7.1.             | Piedāvājumu paslēpšana/deaktivēšana | Vispirms uzklikšķinot uz pogas “Settiings” izvēlētajā konfigurācijas lapā, pēc tam atverot cilni “Manage Options” un noklikšķinot uz pogas “Deactivate” | Datubāzē ir mainījies statuss, pēc kā piedāvājums sākumlapā tiks atzīmēts kā neaktīvs. | Pareizi |
| 8.  | 4.               | Pasūtījuma veikšana        | Pareizi dati Vārds, Uzvārds, telefona numurs, izvēles rūtiņa priekš nosacījumiem | Ieraksts ir pievienots datubāzei, un lietotājam tiek nosūtīts paziņojums par veikmīgo pasūtīšanu. | Pareizi |
| 9.  |                  |                           | Ir ievadīti visi lauki, izņemot vārdu, un arī nav atzīmēta atbilstošā izvēles rūtiņa priekš nosacījumiem | Tiek parādīts logs ar vispārējo tekstu, kur norādīts, kā aizpildīt šo veidlapu. Šajā gadījumā ir nepieciešams aizpildīt visus laukus | Pareizi |
| 10. |                  |                           | Telefona numurs: 2413                                            | Tiks parādīts kļūdas ziņojumu logs, jo nosacījumos ir minēts, ka telefona numuram jābūt vismaz 5 simbolus garumā | Pareizi |
| 11. | 10.1.            | Lietotāju komentāru dzēšana | Peles klikšķis uz pogas “Delete” blakus attiecīgajam komentāram    | Ieraksts tiek dzēsts no datubāzes, un šis ieraksts nav redzams komentāru lapā | Pareizi |


1.Pirmajā testa gadījumā pārbaudīsim reģistrācijas funkciju.

Vispirms jāatver saite “http://localhost/autosalons/index.php”, kas ir sākuma lapa, un pēc tam navigācijas joslā jānoklikšķina uz pogas "Registration" (skat. 65. att.). 

![DP4-1 Konstantīns Kotovičs sākuma lapa](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/64.%20att.%20sākuma%20lapa.png)
 
65. att. sākuma lapa

- Pirmajā gadījumā aizpildām visus datus, izņemot lietotājvārdu (skat. 66. att.). Var pamanīt, ka sistēma izvada šādas kļūdas: "Nepieciešams aizpildīt lietotājvārda lauku", "Paroles nesakrīt", tas nozīmē, ka paroles laukā ievadītā parole nesakrīt ar atkārtoti ievadīto paroli, kas izraisa šo kļūdu. "E-pasts jau eksistē" nozīmē, ka konts ar šādu e-pasta adresi jau pastāv un ir jāizmanto cita e-pasta adrese.

![DP4-1 Konstantīns Kotovičs reģistrēšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/65.%20att.%20reģistrēšanas%20forma.png)
 
66. att. reģistrēšanas forma

- Nākamajā gadījumā aizpildām visus laukus un varam pamanīt, ka parole ir pārāk īsa – tai jābūt vismaz 6 simbolu garai (skat. 67. att.), un lietotājvārds jau ir aizņemts, tāpēc jāizdomā cits.

![DP4-1 Konstantīns Kotovičs reģistrēšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/66.%20att.%20reģistrēšanas%20forma.png)
 
67. att. reģistrēšanas forma

- Ja visi lauki ir aizpildīti pareizi un reģistrācija ir veiksmīga, navigācijas panelī varēs redzēt profila attēlu un jaunu paziņojumu (skat. 68. att.).

![DP4-1 Konstantīns Kotovičs navigācijas josla](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/67.%20att.%20navigācijas%20josla.png)
 
68. att. navigācijas josla

Ja viss ievadīts pareizi, būs saņemts paziņojums ar attiecīgo tekstu. (skat. 69. att.).

![DP4-1 Konstantīns Kotovičs ziņojuma logs](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/68.%20att.%20ziņojuma%20logs.png)
 
69. att. ziņojuma logs

2.Nākamajā testēšanā mēs pārbaudīsim lietotāja paroles maiņu.

- Pirmajā gadījumā visi lauki ir vienādi, un tiek parādīta kļūda, ka jaunajai parolei un esošajai jābūt atšķirīgām (skat. 70. att.).

![DP4-1 Konstantīns Kotovičs paroles maiņas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/69.%20att.%20paroles%20maiņas%20forma.png)
 
70. att. paroles maiņas forma

- Otrajā gadījumā esošās paroles lauks ir ievadīts nepareizi, un jaunā parole ir pārāk īsa un tai jābūt vismaz 6 rakstzīmju garumā (skat. 71. att.).

![DP4-1 Konstantīns Kotovičs paroles maiņas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/70.%20att.%20paroles%20maiņas%20forma.png)
 
71. att. paroles maiņas forma

- Trešajā gadījumā viens lauks ir izlaists, un tiek parādīts ziņojums ar tekstu, ka šis lauks ir jāaizpilda (skat. 72. att.).

![DP4-1 Konstantīns Kotovičs paroles maiņas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/71.%20att.%20paroles%20maiņas%20forma.png)
 
72. att. paroles maiņas forma

- Ja visi lauki ir ievadīti pareizi, tiks parādīts ziņojums par veiksmīgu paroles maiņu (skat. 73. att.), kā arī tiks nosūtīts paziņojums.

![DP4-1 Konstantīns Kotovičs paroles maiņas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/72.%20att.%20paroles%20maiņas%20forma.png)
 
73. att. paroles maiņas forma

3.Pārbaude par kontaktinformācijas lauku ievadi pasūtījuma veikšanas laikā.

- Pirmajā gadījumā ir ievadīti visi lauki, izņemot vārdu, un arī nav atzīmēta atbilstošā izvēles rūtiņa priekš nosacījumiem (skat. 74. att.). Visi lauki jāaizpilda.

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/73.%20att.%20pasūtīšanas%20forma.png)
 
74. att. pasūtīšanas forma

Tiks parādīts vispārējs teksts, kur norādīts, kā aizpildīt šo veidlapu (skat. 75. att.).

![DP4-1 Konstantīns Kotovičs pasūtīšanas formas kļūda](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/74.%20att.%20pasūtīšanas%20formas%20kļūda.png)
 
75. att. pasūtīšanas formas kļūda

- Otrajā gadījumā tiks parādīta tāda pati kļūdas ziņojumu kaste (skat. 75. att.), jo nosacījumos ir minēts, ka vārdam jābūt vismaz 3 simbolus garumā (skat. 76. att.).

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/75.%20att.%20pasūtīšanas%20forma.png)
 
76. att. pasūtīšanas forma

- Trešajā gadījumā trūkst telefona numura lauka (skat. 77. att.). Tiks parādīta kļūdas ziņojumu kaste (skat. 75. att.).

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/76.%20att.%20pasūtīšanas%20forma.png)
 
77. att. pasūtīšanas forma

- Ja visi lauki ir ievadīti pareizi un ir atzīmēta izvēles rūtiņa (skat. 78. att.), kas norāda uz piekrišanu nosacījumiem, tad parādīsies apstiprinājuma loga izvērsiens pasūtījuma apstiprināšanai (skat. 79. att.).

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/77.%20att.%20pasūtīšanas%20forma.png)
 
78. att. pasūtīšanas forma

![DP4-1 Konstantīns Kotovičs pasūtīšanas forma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/78.%20att.%20pasūtīšanas%20forma.png)
 
79. att. pasūtīšanas forma
