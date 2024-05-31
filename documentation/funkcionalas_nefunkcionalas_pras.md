## Funkcionālās prasības :

1. Jaunu lietotāju reģistrācija:
    - Jāparedz ieejas informācijas par lietotāju ievadīšana, pārbaude uz simbolu skaitu un formāta pareizību.
    - Obligātu lauku pārbaude un kļūdas paziņojumu izvadīšana.
    - Lietotāja vārda un ē-pasta salīdzināšana ar esošajiem lietotājiem. Izvadīs kļūdu ar atbilstošo tekstu.
    - Minimālās prasības paroles ilgumam un sarežģītībai.
    - Paroles glabāšana, izmantojot drošu hašēšanas algoritmu. Parole tiks ievadīta divas reizes, lai izvairītos no drukas kļūdām. Ja parole, kura tiks ievadīta atkārtoti, nesakrītīs ar sākotnējo variantu, tiks parādīta kļūda.
    -Pēc veikmīgās lietotāja reģistrācijas, ziņojuma logā atnāks vēstule.
2. Lietotāja autorizācija:
    - Ja lietotājs eksistē datu bāzē, sistēmai ir jānodrošina autorizācija, pieslēdzoties ar lietotājvārdu un paroli.
    - Ja kāds no laukiem nav ievadīts, izvadīt par to paziņojumu.
    - Lauku ievades pārbaude uz pareizību un kļūdas paziņojumi, ja parole vai vārds nesakrīt.
    - Kļūdu izvade, ja ievadītais lietotājvārds neeksistē datu bāzē.
3. Meklēšanas funkcija automašīnu klāstā:
    - Ja lietotājs ievada marku vai modeli, vai visu kopā, sistēmai ir jāparāda visi attiecīgie piedāvājumi.
    - Ja nav atrasti piedāvājumi, izvadīsies atbilstošs teksts.
    - Sistēmai ir jānodrošina meklēšanu pēc filtru saraksta, lai lietotāji varētu viegli atlasīt vajadzīgos kritērijus, tādus kā cenu intervāls, krāsa, ātrumkārba, marka, modelis, virbūves tips, izdošanas gads.
    - Sistēmai ir jānodrošina meklēšana pēc kritērijiem un atslēgvārdiem kopā.
4. Forma automašīnas pirkšanai ar visiem nepieciešamajiem laukiem:
    - Obligātu lauku pārbaude, telefona numurs, vārds un uzvārds, un arī ka lietotājs piekrīt nosacījumiem.
    - Sistēmai ir jāparbauda vai lietotājs ievada tieši ciparus laukā priekš telefona numura.
    - Sistēmai jāsaglabā informāciju par izvēlēto automašīnas komplektāciju.
    - Jaizvada logu ar visu informāciju par pasūtijumu un saziņas informāciju priekš apstiprināšanai.
5. Piedāvājumu pievienošanas funkcija:
    - Datu ivedīšana un obligātu lauku pārbaude.
    - Pārbaude uz maksimālo simbolu skaitu.
6. Komplektāciju pievienošana/dzēšana:
    - Iespēja pie jau eksistējošā modeļa pievienot koplektācijas. Datu ivedīšana.
    - Obligātu lauku pārbaude.
    - Rakstzīmju ierobežojums.
    - Ir iespēja dzēst izvēlēto komplektāciju.
7. Piedāvājumu paslēpšana/deaktivēšana:
    - Iespēja mainīt statusu izvēlējoties atbilstošo komplektāciju.
    - Iespēja paslēpt piedāvājumu, lai lietotājam netiktu rādīti piedāvājumi, kas ir atzīmēti kā neaktīvi.
8. Pasūtījumu apskate un apstrāde.
    - Apkalpojošajam personālam jābūt iespējai apsktīt visus lietotāju pasūtījumus.
    - Iespēja mainīt pasūtījuma izpildes statusu.
    - Lietotājam iespēja apskatīt savus pasūtījumus.
    - Katram autorizētam lietotājam jābūt iespējai izvadīt pasūtījumus excel tabulā.
9. Komentāru atstāšana:
    - Obligātu lauku pārbaude un kļūdas paziņojumu izvadīšana.
    - Lietotāju iespēja atstāt savus komentārus.
    - Iespēja atbildēt uz komentāriem.
    - Komentāru laukā jābūt pārbaude uz simbolu skaitu.
10. Komentāru dzēšana:
    - Lietotāju iespēja dzēst savus komentārus.
    - Apkalpojošajam personālam jābūt iepējai dzēst jebkādu komentāru.
11. Personīgais lietotāja konts un to rediģēšana:
    - Konta informācija un personalizācijas iespējas, konta attēla maiņa.
    - Lietotāja paroles rediģēšanas. Ja tagadējais parolis ir ievadīts nepareizi vai jauns parolis un atkārtoti ievadītais nesakritīs, tad izvadīs kļūdas.
    - Sistēmai ir jānodrošina visu pasūtījumu apskati priekš katra lietotāja un izvadi excel formātā.
12. Iziešana no profila:
    - Katram lietotājam jābūt iespēja iziet no lietotāja konta.
13. Ziņojumu saņemšanas sistēma:
    - Sistēmai jānosūta paziņojums par veiksmīgu reģistrāciju.
    - Sistēmai jānosūta paziņojums par veiksmīgu pasūtīšanu.
    - Sistēmai jānosūta paziņojums, ja uz lietotāja komentāru atbildēja.
14. Ziņojumu paslēpšana pēc tēmatiem.
    - Lietotājiem jābūt iespējai paslēpt ziņas par tēmām, kas viņu neinteresē ("Forums", "Pasūtījumi", "Profila izmaiņas").
15. Ziņojuma dzēšana.
    - Lietotājam vajadzētu būt iespēja dzēst ziņojumus no sava konta pasta.
    - Lietotājam vajadzētu būt iespēja dzēst ar vienu pogu visus ziņojumus no sava konta pasta.
16. Transportlīdzekļa komplektāciju variantu attēlošana:
    - Visiem lietotājiem jābūt iespējai apskatīt automobiļa komplektāciju variantus, un sistēmai jāuzrāda visas komplektācijas, kas ir saistītas ar izvēlēto modeli.
    
## Nefunkcionālās prasības
1. Veiktspēja: sistēmai jānodrošina atbilde lietotājam ne ilgāk kā 2 sekundes laikā un datu bāzes jautājumiem jābūt izpildītiem ne ilgāk kā 5 sekundēs.
2. Drošība: lietotāja paroles jābūt saglabātām, izmantojot šifrēšanu. Piekļuve administratīvajām funkcijām jābūt tikai autorizētiem darbiniekiem.
3. Dizains: lietotāja saskarnē jābūt viegli saprotamai un draudzīgai lietotājiem no visdažādākajām paaudzēm. Lietotāja saskarnei jābūt responsīvai, lai nodrošinātu labu pieredzi gan datoriem, gan mobilajiem ierīcēm.  
4. Aizsardzība pret SQL injekcijām. Šī prasība paredz nodrošināt, ka sistēma ir pasargāta no iespējamām SQL injekcijām, kas var rasties, ja nepietiekami tiek pārbaudīta un filrēta lietotāja ievadītā informācija.
5. Saprotama un viegla navigācija. Šī prasība attiecas uz lietotāja pieredzi, nodrošinot sistēmu ar saprotamu un intuitīvu navigāciju.
6. Saprotama administrāciju lapa priekš apkalpojošā personāla. Šeit svarīgs ir sistēmas pārvaldības skatījums, kas ir saprotams un vienkāršs, it īpaši apkalpojošam personālam vai administratoriem.
7. Vietne darbotos bez kļūdām visās populārākajās pārlūkprogrammās, piemēram, Google Chrome, Opera, Firefox, Edge, Safari.
8. Sistēmai ir nepieciešama spēja viegli pielāgoties jaunām funkcijām vai vides izmaiņām, nodrošinot tās atjaunināšanu un paplašināšanu.
9. Sistēmai jābūt aprīkotai ar automatizētu darbību iespējām, lai nodrošinātu efektīvu darbību un minimizētu cilvēka iesaisti, it īpaši attiecībā uz rutīnas procesiem vai ilgstošām darbībām.
10. Jābūt nodrošinātam vispusīgam un pieejamam sistēmas atbalstam, lai ātri novērstu jebkādas darbības vai sistēmas kļūmes, kā arī nodrošinātu lietotāju ar palīdzību un atbalstu sistēmas izmantošanā.

* Sistēmas reģistrācijas formas skice (skat.2.att.)

![DP4-1 Konstantīns Kotovičs Sistēmas reģistrācijas formas skice](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/2.att.%20Sistēmas%20reģistrācijas%20formas%20skice.png)

2.att. Sistēmas reģistrācijas formas skice

Šī skice attēlo sistēmas interfeisu, kurā lietotāji var reģistrēties. Tajā formā ir 4 lauki un 3 pogas “Sign Up”, lai piereģistrētu jauno lietotāju, “Cancel”, lai atceltu darbību un poga “Already have an account?”, ja lietotājam jau ir konts šajā vietnē.

* Automašīnu pievienošanas formas skice (skat.3.att.)

![DP4-1 Konstantīns Kotovičs Automašīnu pievienošanas formas skice](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/3.att.%20Automašīnu%20pievienošanas%20formas%20skice.png)

3.att. Automašīnu pievienošanas formas skice

Šī skice attēlo sistēmas interfeisu, kurā apkalpojošs personāls var pievienot jaunas automašīnas.

