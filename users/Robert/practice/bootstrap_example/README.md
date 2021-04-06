# bs-example

### contra 
-  cover.css linia 29,   height: 100%; nu se foloseste pentru ca iti aduce probleme in cazul acesta daca pui un footer la linia 131 o sa vezi ca nu se afiseaza corect, iti recomand fie sa il scoti fie sa pui `min-height`
-  linia 45 `.cover-container` nu respecta regula de naming, ar trebuii sa fie `.container-cover`
- index.html linia [28 29] clasa `.mb-500` nu este declarata, nu ai nevoie de acel wrapper cu clasa `inner`, sau daca vrei sa-l pastrezi oricum clasa `inner` nu  face nimic.
- text-center pe body ... ma abtin de la comentarii :)
- nu as pune si header-ul si continutul sub aceiasi umbrela in special ca pe cover-container ai din nou .h-100 si tot ce vei pune ca sibling iti va venii sub el daca el are un height mai mare de 100.

### pro
> imi place ca ai folosit mai multe componente bootstrap.

> ma bucur ca ai folosit si clase utilitare de la ei.

> arata decent. 
