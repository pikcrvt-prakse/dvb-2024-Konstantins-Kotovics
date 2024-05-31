# Tīmekļa lietotne automašīnu meklēšanai un pārdošanai tiešsaistē

## Projekta apraksts
Kvalifikācijas darba uzdevums ir izveidot tīmekļa lietotni, kas atvieglos automašīnu meklēšanu un pārdošanu tiešsaistē . 
Ir plānotas vairākas funkcijas:
- Lietotājs:
  - Detalizētas informācijas par automašīnu apskate un nepieciešamās preces meklēšana pēc atslēgvārdiem un filtrēšanas kritērijiem (krāsa, ātrumkārba, marka, cenas intervāls); 
  - Apskatīt piedāvājumu visas pieejamās krāsās un veikt pasūtījumu aizpildot formu;
  - Iespēja mainīt sava profila datus (paroli un attēlu);
  - Iespēja apskatīt visus savus pasūtījumus un izvadīt excel tabulā;
  - Iespēja atstāt komentāri un dzēst to;
  - Reģistrācija un autorizācija.
  
- Apkalpojošs personāls:
  - Piedavājumu pievienošana vai dzēšana un informācijas rediģēšanas, piemēram, mainīt cenu, krāsu un citus datus par piedāvājumu;
  - Pievienot vai dzēst krāsu variantus;
  - Noteikt pasūtījuma statusu un pasūtījuma izpildes procesā mainīs pasūtījuma izpildes statusu;
  - Dzēst pasūtījumu;
  - Izvadīt tabulu ar klientu pasūītījumiem excel tabulā;
  - Atbildēt uz jautājumu vai dzēst (komentāru sistēma);
  - Iespēja mainīt sava profila datus;
  - Autorizācija.

## Izmantotās tehnoloģijas
- Lietotāja daļā tika izmantots:
  - HTML
  - CSS
  - JavaScript
- Servera daļā tika izmantots:
  - PHP
- Izstrādes vides, kas tika izmantotas:
  - Laragon, GIT, Visual Studio Code, Notepad++

## Izmantotie avoti
1. [W3School/css](https://bootsnipp.com/snippets/K0ZmK) - tika ņemts html un css kods priekš profila lapas.

2. [Bootstrap/header](https://getbootstrap.com/docs/5.0/examples/headers/) - tika ņemts html un css kods priekš header'a.

3. [Bootstrap/footer](https://getbootstrap.com/docs/5.3/examples/footers/) - tika ņemts html un css kods priekš footer'a.

4. [Bootstrap/design](https://getbootstrap.com) - tika ņemts css kods priekš lapu dizaina.

5. [jquery](https://code.jquery.com/jquery-3.6.0.min.js) - tika izmantots priekš ziņojumu (kļūdu vai apstiprinājumu) izvades.

6. [PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet) - šī bibliotēka tiek izmantota, lai izveidotu Excel failus, izmantojot PHP. To izmanto, lai ģenerētu Excel tabulas ar datiem no mūsu vietnes un piedāvātu lietotājiem lejupielādēt šos failus ar informāciju par pasūtījumiem.

7. [Sweetalert](https://sweetalert2.github.io) - tika ņemta pirmā versija: "https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js", bet aktuālā saite ir ar otro versiju. Tika ņemts prieks apstiprinājuma vai kļūdas parādīšanas logam.

## Uzstādīšanas instrukcija
Lai vietne darbotos uz jūsu paša datora, ir nepieciešams veikt instalācijas un palaišanas procesu. Zemāk esošajā instrukcijā ir sniegta detalizēta informācija par katru soli, lai nodrošinātu veiksmīgu vietnes iedarbināšanu lokāli:

1.Vietnes failu lejupielāde no GitHub:

- Apmeklējiet GitHub repozitoriju.
- Noklikšķiniet uz zaļā pogas "Code" un izvēlieties "Download ZIP".
- Atarhivējiet lejupielādēto ZIP failu.

![DP4-1 Konstantīns Kotovičs GitHub repozitorija](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/17.%20att.%20GitHub%20repozitorija.png)

17. att. GitHub repozitorija

2.Laragon uzstādīšana:

- Lejupielādējiet un instalējiet Laragon no oficiālās mājas lapas.
- Palaidiet instalēto Laragon.

3.Vietnes failu novietošana Laragonā:

- Atveriet Laragon un noklikšķiniet uz pogas "Root".
- Lejupielādētā mape tiks nosaukta kā "autosalons-main". Pārdēvējiet šo mapi uz "autosalons", jo GitHub pievieno "-main" galveno zara nosaukumam.

![DP4-1 Konstantīns Kotovičs mapes nosaukums](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/18.%20att.%20mapes%20nosaukums.png)

18. att. mapes nosaukums
- Atarhivējiet iepriekš lejupielādēto ZIP failu mapē "www", kas atrodas mapē, kuru atverat, noklikšķinot uz pogas "Root".

![DP4-1 Konstantīns Kotovičs Largona logs, mape ar projektu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/19.%20att.%20Largona%20logs%2C%20mape%20ar%20projektu.png)

19. att. Largona logs, mape ar projektu

4.Servera un datu bāzes palaišana:

- Noklikšķiniet uz pogas "Start All" galvenajā Laragon logā, lai palaidinātu tīmekļa serveri un MySQL datu bāzi.

![DP4-1 Konstantīns Kotovičs Largona logs, starta poga](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/20.%20att.%20Largona%20logs%2C%20starta%20poga.png)

20. att. Largona logs, starta poga

5.Datu bāzes izveide:

- Pēc servera palaišanas atveriet datu bāzi, noklikšķinot uz pogas "Database" galvenajā Laragon logā.
- Pēc datu bāzes atvēršanas noklikšķiniet uz "File" kreisajā augšējā stūrī un izvēlieties "Run SQL file".
- Atlasiet failu "database.sql", kas atrodas lejupielādētā repozitorija mapē "sql".
- Šis fails izveidos datu bāzi ar visām nepieciešamajām tabulām.

![DP4-1 Konstantīns Kotovičs Logs ar datubāzes pievienošanu](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/21.%20att.%20Logs%20ar%20datubāzes%20pievienošanu.png)

21. att. Logs ar datubāzes pievienošanu

6.Vietnes palaišana:

- Atveriet jebkuru interneta pārlūku datorā.
- Adreses joslā ievadiet: http://localhost/autosalons/index.php.
- Nospiediet Enter, lai atvērtu vietni.

Pēc šo soļu izpildes, vietne būs gatava lietošanai lokālajā vidē.