# bs-example
### contra
- bootstrap.html linia 14,  h-100  acel h-100 creeaza probleme pentru ca daca continutul depasteste 100% din inaltimea ecranului si sa zicem ca pui un footer la acelasi nivel va fi afisat unde stie el ca se termina 100% din ecran prin urmare va fi pus sub elementele care fac overflow la acel 100%; recomand daca chiar ai nevoie de el sa il schimbi cu min-height:100%; sau il pot folosii doar daca esti sigura ca, continutul acelui element cu h-100 nu va depasii 100% din ecran;
- bootstrap.html linia 14,  text-center nu il punem pe body ca nu vreau peste tot in pagina sa am text centrat sunt si portiuni care pot fi dezvoltate si vreau sa fie cu textul aliniat la stanga (default)
- `.cover-container` ar trebuii sa respecte regula de denumire si sa fie `.container-cover`
- liniile 58-61  in loc de text-black pune .text-dark si elimina clasa text-white-50, sau pastreaza doar text-white-50 daca vrei ca textul sa fie alb, dar banuiesc ca voiai sa fie negru.
- assets/css/boostrap.css linia 27 `.carousel` nu stilizam clasele bootstrap, pentru asta vei face o clasa intermediara a ta iar pentru acel margin bottom pot folosii si mb-4 sau mb-5 clase utilitare bootstrap.
- de mutat folderul bootstrap-5.0.0 la nivelul lui assets/libs/
- de schimbat denumirea fisierului assets/css/`bootstrap.css` in `app.css` sau `main.css` sau chiar si `style.css`

### pro
> este bine structurata

> ca design arata bine

> imi place ca ai descarcat bootstrap

> o bila alba pentru folosirea utilitarelor pentru control pe rezolutie  `float-md-end` `float-md-start`

>  assets/css/`bootstrap.css` `.nav-masthead .nav-link + .nav-link`, frumos folosit nice touch
