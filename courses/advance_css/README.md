Advance CSS
## Topice
- Denumirea claselor
- Cand se foloseste !important
- Animatii
- @media -Device Breakpoints
- Grid



##  Denumirea claselor

> clasele se denumesc cu liniuta si litere mici ex: `text-primary`, `container-fluid`, `container`, `card`, `btn`, `btn-danger`, `bg-primary`
> diferenta dintre `btn` (prescurtare de la button) si `btn-danger`, clasa `btn` va contine stilurile generale ale unui buton precum: `line-height`, `font-size`, `border-radius`, pe cand `btn-danger` va altera numai `background` si `border-color`
> aceasta separare se face deoarece imi doresc un button care sa arate la fel in toate paginile dar nu peste tot imi doresc aceiasi culoare, butonul de delete doresc sa il evidentiez cu rosu.

> daca dorim sa realizam componente precum : `card`, `nav`, `list`, `modal`, `spinner`  denumirea acestora va fi primul nume al clasei urmat de derivare ex:  `card-product`, `list-categories`, `text-primary`, nu se va tine cont de sintaxa frazei (in engleza adjectivul este pus in fata substantivului). Nu tinem cont de sintaxa pentru ca aceste componente sunt folosite in mai multe sectiuni ale aplicatiei noastre si cand vrem sa refolosim componenta stim ca vrem de ex un card (nu stim toate derivatiile acestei clase) iar editorul ne va afisa toate optiunile disponibile sub cheia card.

##  Cand se foloseste !important 
> `!important` se foloseste numai pentru clasele care altereaza un singur atribut ex: `.bg-primary{ background-color: blue; }` sau pentru a acoperi un bug de browser.
> `nu` se foloseste `!important` in selectii precum `.card > card-body > .title { color: red!important; }` pentru ca cine doreste sa supreascrie clasa `title` copil al clasei `.card-body` va trebuii sa foloseasca un selector cu importanta mai mare.

##  Animatiile - Sunt folosite pentru a altera gradual stilurile unui element
> Sintaxa: `@keyframes animationname {keyframes-selector {css-styles;}}`
> Ex: ` @keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
    }
    15% {
        box-shadow: 0 0 0 10px rgba(44, 144, 44, 0.7);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    }
}`

> Cum atribuim o animatiei unui element
> Creăm o clasa care va avea acest comportament cand utilizatorul trece cu mouse-ul peste buton in acest scop ne folosim de pseudoclasa `:hover`
>`.btn-gesof-animation:hover {
    animation: slide-in 1s 1, pulse 2s infinite;
}`

> In codul html vom avea: 
> `<button class="btn btn-gesof btn-gesof-animation"> HOVER ME </button>`

> Prescurtarea `animation` este o scurtatura pentru: `animation-name`, `animation-duration`, `animation-timing-function`, `animation-delay`, `animation-iteration-count`, `animation-direction`, `animation-fill-mode`, `and animation-play-state`, exact in aceasta ordine.
> Puteti citi mai multe despre fiecare in parte folosind urmatorul link: [W3-Animations]

## Device Breakpoints
> nu putem vorbi despre puncte de intrerupere fara sa includem regula css `@media`
> Regula `@media` este folosita in interogari media pentru a aplica diferite stiluri in functie de rezolutia dispozitivului media (telefon, tableta, pc, etc).
> Punctele de intrerupe se pot definii pentru orice rezolutie folosind urmatoarea sintaxa:
> `@media not|only mediatype and (mediafeature and|or|not mediafeature) {
  CSS-Code;
}`
> ex:
> `@media (min-width: 768px) {
    .col-md-4 {
        width: 33.33333%;
    }
}`

Cele mai comune breakpoint-uri sunt urmatoarele:

| Breakpoint | Class infix | Dimensions |
| ------ | ------ | ------ |
| X-Small | None | <576px |
| Small | sm | ≥576px |
| Medium | md | ≥768px |
| Large | lg | ≥992px |
| Extra large    | xl | ≥1200px |
| Extra extra large  | xxl | ≥1400px |
`Acestea sunt cele mai comune breakpoint-uri insa vom definii si altele pentru a obtine un control cat mai granulat asupra componentelor prezente in html-ul descris de noi.` Daca avem de afisat un text si acesta nu se afisaza corect la 600px vom scrie un media query care sa altereze marimea fontului acelui text pentru acea rezolutie si vom avea:
> `@media (min-width: 600px) {
    .nume_clasa_sau_selector {
        font-size: 1.6rem;
    }
}`
> `@media (min-width: 620px) {
    .nume_clasa_sau_selector {
        font-size: 1.7rem;
    }
}`
> `@media (min-width: 700px) {
    .nume_clasa_sau_selector {
        font-size: 1.8rem;
    }
}`

## Grid
> este un concept ce cuprinde o multitudine de clase si tehnici cu ajutorul carora vom construi layout-ul unei pagini web. Acest proiect contine doar o mica parte flexibilitatea unui sitem grid complet;
> in acest proiect clasa `row` este parintele sistemului de coloane `col-md-4` `col-12`
> `row` are margini negative pentru ca se foloseste de regula cu un container care are padding pozitiv, prin urmare margina negativa anuleaza padding-ul pozitiv al containerului, tipul de display este `flex` (copii elementului care are aplicata aceasta clasa vor ocupa un width variabil in functie de continutul acestora). `flex-wrap` ii dicteaza elementului sa treaca elementele copil pe urmatoarea linie daca acestea nu au spatiu suficient.
> `col-12`  va da elementului care are aplicata aceasta clasa o latime de 100% din parinte;
> `col-md-4` este activata folosind `@media` cand se atinge rezolutia minima de 768px (vedeti tabelul cu cele mai comune breackpoint-uri prezentat mai sus), elementul va avea un width de `100%/4` = `33,33333%`
> de ce 100%/4 ?, daca numarul maxim de coloane este 12 atunci vom avea 12 impartit la numarul de coloane dorit, in acest caz 12/3 = 4
> `<div class="container bg-primary">`
> `<div class="row">` <!-- afisaza copii inline si daca nu au spatiu coboara-i pe linia 2, de asemenea anuleaza padding-ul container-ului -->
>       `<div class="col-12 col-md-4">` <!-- ocup 100% din parinte pana la punctul de intrerupere (768px) acolo col-md-4 va aplica un width de 33,33% , asta inseamna ca vom avea 3 elemente pe linie. -->
>           `<div class="card"> <!--content of the card--> </div>` 
> `</div>`
> `</div>`
> `</div>`
> Acest system va afisa elementele copil ale lui row la un width de 100% pana la rezolutiia de 768px si la un width de 33,33% dupa ce aceasta rezolutie este depasita.
[W3-Animations]: <https://www.w3schools.com/css/css3_animations.asp>
