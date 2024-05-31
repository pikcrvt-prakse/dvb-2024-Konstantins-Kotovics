# DATU STRUKTŪRU APRAKSTS

Datu bāze sastāv no 11 tabulām, kas satur sevī informāciju par lietotāju, komentāriem, piedāvājumiem, piedāvājuma informāciju, pasūtījumiem, krāsām un ziņām.
1.	Tabula "user" glabā datus par lietotāju.
2.	Tabula "comments" glabā datus par komentāriem.
3.	Tabula "offers" glabā datus par piedāvājumiem.
4.	Tabula "offersinfo" glabā datus par piedāvājuma detalizētu informāciju.
4.	Tabula "specific_details" starptabula, kas glabā ārējās atslēgas no citām tabulām, lai veidotu dažādus komplektācija variantus, kas vienam un tam pašam modelim var atšķirties.
4.	Tabula "transmission" glabā datus par komplektācijas transmisiju.
4.	Tabula "engine" glabā datus par komplektācijas dzinēju.
6.	Tabula "car_colors" glabā datus par komplektācijas krāsu.
5.	Tabula "order" glabā datus par pasūtījumiem.
7.	Tabula "notifications" glabā datus par pašu ziņojumu un saturu.
7.	Tabula "notification_topics" glabā datus par ziņojumu tēmām un kādas no tiem parādās lietotājam.

Tabula “user” ir saistīta ar tabulu “comments”, “order” un “notification_topics”.

Tabulas “user” struktūra

1. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                       |
|-----|-------------------|----------|--------|---------------------------------------------------------------|
| 1   | userID            | int      | 10     | lietotāja identifikatora kods, primārā atslēga;               |
| 2   | password          | varchar  | 255    | lietotāja parole;                                             |
| 3   | username          | varchar  | 20     | lietotājvārds;                                                |
| 4   | roleID            | int      | 10     | lietotāja loma*;                                              |
| 5   | email             | varchar  | 40     | lietotāja ē-pasts;                                            |
| 6   | rules_accepted    | tinyint  | 1      | identifikators, vai lietotājs ir pieņēmis foruma noteikumus;  |
| 7   | picture           | blob     | -      | lietotāja profila attēls;                                     |

*Lietotājs ir klients vai apkalpojošais personāls (0 vai 1).

Tabula “comments” ir saistīta ar tabulu “user”.

Tabulas “comments” struktūra

2. tabula

| Nr. | Nosaukums          | Tips     | Garums | Piezīme                                                      |
|-----|--------------------|----------|--------|--------------------------------------------------------------|
| 1   | commentID          | int      | 10     | komentārija identifikatora kods, primārā atslēga;            |
| 2   | date               | date     | -      | komentārija datums;                                          |
| 3   | comment            | varchar  | 700    | komentārijs, kuru ieraksta lietotājs;                        |
| 4   | userID             | int      | 10     | ārēja atslēga, kas norāda uz lietotāju, kurš atstāja komentāru; |
| 5   | parent_comment_id  | int      | 10     | saite uz vecāku komentāru, ja tā ir atbilde;                 |

* Saite uz vecāku komentāru ir lauks datubāzē, kas norāda uz komentāru, uz kuru konkrētais komentārs atbild.

Tabula “offers” ir saistīta ar tabulām “offersinfo” un “order”.

Tabulas “offers” struktūra

3. tabula

| Nr. | Nosaukums   | Tips     | Garums | Piezīme                                      |
|-----|-------------|----------|--------|----------------------------------------------|
| 1   | offerID     | int      | 10     | piedāvājuma identifikatora kods, primārā atslēga; |
| 2   | type        | varchar  | 20     | automašīnas modelis;                         |
| 3   | manufacture | varchar  | 20     | automašīnas marka;                           |

Tabula “offersinfo” ir saistīta ar tabulu “offers” un “specific_details”.

Tabulas “offersinfo” struktūra

4. tabula

| Nr. | Nosaukums           | Tips     | Garums | Piezīme                                                 |
|-----|---------------------|----------|--------|---------------------------------------------------------|
| 1   | offerInfoID         | int      | 10     | Piedāvājuma informācijas identifikatora kods, primārā atslēga; |
| 2   | price               | float    | -      | automašīnas cena;                                       |
| 3   | yearOfManufacture   | int      | 10     | automašīnas izdošanas gads;                             |
| 4   | weight              | float    | -      | automašīnas svars;                                      |
| 5   | body_type           | varchar  | 20     | automašīnas virsbūves tips;                             |
| 6   | offersID            | int      | 10     | ārēja atslēga, kas norāda uz piedāvājumu;               |

Tabula “specific_details” ir saistīta ar tabulām: “offersinfo”, “order”, "car_colors", “transmission”, “engine”.

Tabulas “specific_details” struktūra

5. tabula

| Nr. | Nosaukums      | Tips       | Garums | Piezīme                                                         |
|-----|----------------|------------|--------|-----------------------------------------------------------------|
| 1   | detailsID      | int        | 10     | Konfigurācijas/komplektācijas identifikatora kods, primārā atslēga; |
| 2   | colorID        | int        | 10     | ārēja atslēga, kas norāda uz krāsu;                             |
| 3   | offersInfoID   | int        | 10     | ārēja atslēga, kas norāda uz piedāvājumu (automašīnu, konkrēto modeli); |
| 4   | transmissionID | int        | 10     | ārēja atslēga, kas norāda uz transmisiju;                       |
| 5   | engineID       | int        | 10     | ārēja atslēga, kas norāda uz dzinēju;                           |
| 6   | active_status  | int        | 10     | statuss, lai lietotājam netiktu rādīti piedāvājumi, kas ir atzīmēti kā neaktīvi; |
| 7   | created_at     | timestamp  | -      | ārēja atslēga, kas norāda uz piedāvājumu;                       |

Tabula “engine” ir saistīta ar tabulu “specific_details”.

Tabulas “engine” struktūra

6. tabula

| Nr. | Nosaukums      | Tips     | Garums | Piezīme                                                   |
|-----|----------------|----------|--------|-----------------------------------------------------------|
| 1   | engineID       | int      | 10     | dzinēja identifikatora kods, primārā atslēga;              |
| 2   | engine_type    | varchar  | 50     | dzinēja tips, kas pieder konfigurācijai;                   |
| 3   | engine_price   | float    | -      | dzinēja cena, kas pieder konfigurācijai;                   |

Tabula “transmission” ir saistīta ar tabulu “specific_details”.

Tabulas “transmission” struktūra

7. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                  |
|-----|-------------------|----------|--------|----------------------------------------------------------|
| 1   | transmissionID    | int      | 10     | transmisijas identifikatora kods, primārā atslēga;       |
| 2   | transmission_type | varchar  | 20     | transmisijas tips, kas pieder konfigurācijai;            |
| 3   | transmission_price| float    | -      | transmisijas cena, kas pieder konfigurācijai;            |

Tabula “car_colors” ir saistīta ar tabulu “specific_details”.

Tabulas “car_colors” struktūra

8. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                  |
|-----|-------------------|----------|--------|----------------------------------------------------------|
| 1   | colorID           | int      | 10     | krāsas identifikatora kods, primārā atslēga;              |
| 2   | color             | varchar  | 50     | krāsas nosaukums, kas pieder konfigurācijai;              |
| 3   | image             | blob     | -      | piedavājuma attēls, kas pieder konfigurācijai;            |
| 4   | color_price       | float    | -      | krāsas cena, kas pieder konfigurācijai;                   |

Tabula “order” ir saistīta ar tabulu “offers”, “user” un “specific_details”.

Tabulas “order” struktūra

9. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                     |
|-----|-------------------|----------|--------|-------------------------------------------------------------|
| 1   | orderID           | int      | 10     | pasūtijuma identifikatora kods, primārā atslēga;             |
| 2   | orderDate         | date     | -      | pasūtijuma datums;                                           |
| 3   | name              | varchar  | 20     | pasūtītāja vārds;                                            |
| 4   | surname           | varchar  | 20     | pasūtītāja uzvārds;                                          |
| 5   | telephone         | varchar  | 20     | pasūtītāja telefonas numurs;                                 |
| 6   | status            | varchar  | 15     | pasūtijuma apstiprinājums;                                   |
| 7   | orderOfferID      | int      | 10     | ārēja atslēga, kas norāda uz piedāvājumu;                    |
| 8   | orderUserID       | int      | 10     | ārēja atslēga, kas norāda uz lietotāju;                      |
| 9   | orderDetailsID    | int      | 10     | ārēja atslēga, kas norāda uz izvēlēto konfigurāciju;         |

Tabula “notifications” ir saistīta ar tabulu “notification_topics”.

Tabulas “notifications” struktūra

10. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                     |
|-----|-------------------|----------|--------|-------------------------------------------------------------|
| 1   | notification_id   | int      | 10     | ziņojuma identifikatora kods, primārā atslēga;               |
| 2   | message           | text     | -      | ziņojuma teksts;                                             |
| 3   | created_at        | timestamp| -      | ziņojuma datums un laiks;                                    |
| 4   | is_read           | tinyint  | 1      | ziņojuma izlasīšanas statuss;                                 |
| 5   | topic_id          | int      | 10     | ārēja atslēga, kas norāda uz ziņojuma tēmu;                  |

*Izlasīšanas statuss mainās, kad lietotājs atver logu ar ziņojumiem (“NULL” vai 1).

Tabula “notification_topics” ir saistīta ar tabulu “user”.

Tabulas “notification_topics” struktūra

11. tabula

| Nr. | Nosaukums         | Tips     | Garums | Piezīme                                                   |
|-----|-------------------|----------|--------|-----------------------------------------------------------|
| 1   | topic_id          | int      | 10     | ziņojuma tēmas identifikatora kods, primārā atslēga;        |
| 2   | topic_name        | varchar  | 255    | ziņojuma tēmas nosaukums;                                   |
| 3   | status            | varchar  | 10     | ziņojuma tēmas attēlošanas statuss;                         |
| 4   | userID            | int      | 10     | ārēja atslēga, kas norāda uz lietotāju;                     |

*Attelosanas statuss ietekmē to, vai lietotājs redzēs paziņojumus par konkrētām tēmām (“disable” vai “enable”).

Fiziskajā līmenī dati ir organizēti un glabājas, izmantojot tabulu saišu shēmu. Šī struktūra nodrošina efektīvu datu glabāšanu un atgriešanu, nodrošinot labu veiktspēju un optimizētu datu piekļuvi.

![DP4-1 Konstantīns Kotovičs Datubāzes fiziskās struktūras shēma](https://github.com/rvt-prog-kval-24/DP41-KonstantinsKotovics-TimeklaLietotneAutomasinuMeklesanaiUnPardosanaiTiessaiste/blob/main/documentation/atteli/16.%20att.%20Datubāzes%20fiziskās%20struktūras%20shēma.png)

16. att. Datubāzes fiziskās struktūras shēma
