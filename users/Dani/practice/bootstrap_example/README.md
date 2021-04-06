# bs-example

### contra
- index.html 12-27: 1 acel stil ar trebuii in fisier separat pus, 2 nu este folosit deloc deci cred ca ar trebuii sters.
- linia 35: `w-1=300` banuiesc ca voiai sa folosesti w-100 dar nu vad de ce ca este copil imediat al lui body si oricum are display block deci va lua 100% din body, iar daca folosesti w-100 nu mai are rost `mx-auto`
- linia 35: `cover-container` nu respecta regula de naming -> `.container-cover`
- linia 37: `body` trebuie sa existe 1 singura data in pagina si copil direct al elementului html.
- linia 37: `text-center` nu pun text center pe toata pagina pentru ca exista cazuri in care nu vreau sa fie centrat si trebuie sa vin cu text-start sau text-left sa ii redau comportamentul default cand nu ar trebuii sa fac asta
- linia 41: `inner` clasa nu este declarata, nu recomad oricum sa ai o astfel de clasa  pentru ca se gaseste la nivelul mai multor componente redate de browser si are un alt scop.
- linia 51:  `d-inline-block` nu te ajuta cu nimic acea clasa pentru ca urmeaza un singur element care are display:block, deci si cu si fara ea layout-ul tau este acelasi.
- linia 52:  style inline...
- linia 92: `mastfoot` cred ca erea mai ok .footer-master sau doar pentru acea culoare folosit clasa utilitara bootstrap `.text-muted`
- cover.css liniile 6-20 nu stilizam direct elementele `a` sau clase bootstrap `.btn-secondary`


### pro
> ma bucur ca ai folosit mai multe componente bootstrap

> o bila alba pentru ca ai folosit si clase utilitare de la ei.

> ma bucura sa vad si acel `@media` recomand sa folosesti px pentru controlul pe rezolutii, em-ul are alte utilizari.
