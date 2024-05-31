# ER-diagramma
Datu bāzes projektēšanā datu kopu un saišu starp tām attēlošanai tika lietota relācijusaišu diagramma, kas sastāv no divām veidu objektiem – entītijām (loģiskais objekts) un relācijām(attiecības). Sistēmas ER modelis (sk.4. attēlu) sastāvēs no 11 entītijām. Tas nodrošina pamat informācijas uzglabāšanu un apstrādi. Tie ir: 

* “Komentārijs” – apraksta komentārus, kas raksta lietotāji. Tās atribūtu kopums sevī ietver datumu, paša komentāra saturu un saiti uz vecāku komentāriju (Glabā saiti uz komentāriju uz kuru atbildēja. Ja tas ir oriģināls, neko neglabās.). Tabula “Komentārijs” ir saistīta ar tabulu “Lietotājs”. Vienam lietotājam var būt vairāki komentāri (sk.4. attēlu), bet komentāram tikai viens lietotājs. 

* “Piedavājums” – superklase, apraksta visus piedāvājumus. Tabula “Piedavājums” ir saistīta ar tabulu “Piedavājuma informācija”, “Pasūtījums” un “Automašīnas krāsa”. Vienam piedavājumam var būt vairākie krāsu varianti. Piedavājums var būt vairākos pasūtījumos, bet pasūtījumā tikai viena automašīna. Tās atribūtu kopums sevī ietver, automašīnas marku un modeli.

* “Piedavājuma informācija” – “Piedavājums” klases apakšklase, apraksta piedāvājumus, dodot plašāku informāciju, tika izmantots, lai optimizēt tabulu “Piedavājums”. Tabula “Piedavājuma informācija” ir saistīta ar tabulu “Piedavājums”. Attiecība būs viens pret vienu, katram piedāvājumam piederēs atbilstoša informācija. Tās atribūtu kopums sevī ietver cenu, izdošanas gadu, virsbūves tipu un massu.

* “Specifiskas detaļas” – starptabula, kas glabā ārējās atslēgas no tabulām: "Automašīnas krāsa", “Transmisija”, “Dzinējs”, apraksta automašīnu komplektācijas (komplektācija sastāv no: dzinēja tipa, dzinēja cenas, transmisijas tipa, transmisijas cenas, krāsas un krāsas cenas.), dodot plašāku izvēli lietotājam. Šī tabula tika izveidota, lai glabātu datus, kas vienam un tam pašam modelim var atšķirties. Tabula “Specifiskas detaļas” ir saistīta ar tabulu “Piedavājuma informācija” un attiecība būs viens pret daudziem, katram piedāvājumam piederēs vairākās automašīnu komplektācijas. Vēl šī tabula glabā arējās atslēgas no tabulām - "Automašīnas krāsa", “Transmisija”, “Dzinējs” -, lai vienam automašīnas modelim varētu būt vairākas komplektācijas. Tās atribūtu kopums sevī ietver izveidošanas datumu un komplektācijas statusu.

* “Transmisija” – satur informāciju par pieejamajiem transmisijas variantiem, kuri ir izmantoti komplektāciju veidošanā. Tabula “Transmisija” ir saistīta ar tabulu “Specifiskas detaļas”, kur katrā komplektācijā ir piešķirta konkrēta transmisija, attiecība būs viens pret vienu. Atribūti ietver transmisijas tipu un cenu.

* “Dzinējs” – satur informāciju par pieejamajiem dzinēju variantiem, kuri ir izmantoti komplektāciju veidošanā. Tabula “Dzinējs” ir saistīta ar tabulu “Specifiskas detaļas”, kur katrai komplektācijas variantam ir piešķirts konkrēts dzinējs, attiecība būs viens pret vienu. Atribūti ietver dzinēja tipu un cenu.

* “Automašīnas krāsa” – satur informāciju par pieejamajām automašīnu krāsām, kuri ir izmantotas komplektāciju veidošanā. Tabula “Automašīnas krāsa” ir saistīta ar tabulu “Specifiskas detaļas”, kur katrai komplektācijas variantam ir piešķirta konkrēta krāsa, attiecība būs viens pret vienu. Atribūti ietver krāsas nosaukumu, attēlu, kas attēlo krāsu, un cenas informāciju.

* “Lietotājs” – superklase, apraksta cilvēkus, kas pieder sistēmai:  gan klientus (potenciālie pircēji), gan apkalpojošo personālu, kas sazinās ar klientu, palīdz tiem un apstiprina pasūtijumu. Atkarībā no lietotāja statusa vērtības viņš būs personāls vai klients. Tās atribūtu kopums sevī ietver statusu, paroli, lietotājvārdu, attēlu, pieņemto noteikumu statusu un ē-pastu. Tabula “Lietotājs” ir saistīta ar tabulu “Komentārijs”, “Pasūtījums” un “Ziņojums”. Katram lietotājam var būt vairākie pasūtījumi, bet pasūtījums pieder vienam konkrētam lietotājam.

* “Pasūtījums” – ir starp tabula, kas apraksta klienta pasūtijumu. Tās atribūtu kopums sevī ietver apstaprināšanas statusu un pasūtijuma datumu, pasūtītāja vārdu, uzvārdu un telefonu. Tabula “Pasūtījums” ir saistīta ar tabulu “Piedavājums”, “Lietotājs” un “Automašīnas krāsa”. Vienam klientam būs iespēja veikt vairākus pasūtījumus, bet vienam pasūtījumam var būt tikai viens klients. Piedāvājums var piederēt vairākiem pasūtijumiem, bet pasūtijumā var būt tikai viens piedāvājums.

* “Ziņojuma tēma” – tabula, kura satur paziņojumu tēmas, kuras ir saistītas ar lietotāju. Tā atribūtu kopa ietver tēmas nosaukumu un paziņojumu tēmas statusu. Tabula “Ziņojuma tēma” ir saistīta ar tabulu “Lietotājs”. Vienam lietotājam var piederēt vairākas ziņojumu tēmas, bet katra tēma var piederēt tikai vienam lietotājam.

* “Ziņojums” – “Ziņojuma tēma” klases apakšklase, tabula, kurā glabājās paziņojumu saturs, ko saņem lietotāji. Tā atribūtu kopa ietver ziņojuma tekstu, laiku un izlasīšanas statusu. Tabula “Ziņojums” ir saistīta ar tabulu “Ziņojuma tēma”. Katrs paziņojums pieder vienai no tēmām, tāpēc vienā tēmā var būt vairāki paziņojumi.

![DP4-1 Konstantīns Kotovičs Entity relationship modelis](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/4.%20att.%20Entity%20relationship%20modelis.png)

4. att. Entity relationship modelis
