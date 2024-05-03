@extends('games::layouts.master')

@section('content')
    <h1 class="mt-4">COMPONENTES</h1>

    <p class="h3 m-4 text-center">Acordeones</p>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Temporada 1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Descripción:</strong> La telenovela narra la historia de Aurelio Casillas (Rafael Amaya), uno de
                    los narcotraficantes más importantes de México en los años 90. La única ambición de Aurelio era
                    convertirse en el narcotraficante más poderoso de México, sin importarle ser cauteloso y mucho menos
                    llamativo. Logró tener fortuna, mujeres, casas, edificios y mansiones sin mucho esfuerzo. Cuando era
                    pequeño, Aurelio no sabía leer ni escribir. Perdió a su padre desde joven y tuvo que sostener a su
                    familia junto con su hermano Víctor Casillas (Raúl Méndez). Con la ayuda de Daniel Jiménez Arroyo "El
                    Letrudo" (Juan Ríos), Aurelio aprendió a escribir y leer. Ximena (Ximena Herrera), la mujer de su vida y
                    madre de sus 3 hijos Heriberto (Ruy Senderos), Rutila (Carmen Aub) y Luz Marina (Gala Montes de Oca)
                    vivió en el mundo del narcotráfico desde pequeña: su padre, Don Cleto (Javier Díaz Dueñas), era uno de
                    los narcos más poderosos de la época. A los 15 años, ella conoce a Aurelio y se enamora perdidamente de
                    él. Tras seguir creciendo y obtener fama y fortuna, Aurelio se hace enemigo del Cártel de los Robles, en
                    el cual la hermana menor de los Robles, Mónica Robles (Fernanda Castillo), maneja las finanzas de sus
                    hermanos; sin embargo, su lado débil es su secreto enamoramiento hacia Aurelio. Ella oculta sus
                    sentimientos para no perder el control y no ser derrotada fácilmente por sus enemigos. Cuando Aurelio
                    asesina a sus dos hermanos, Isidro (Guillermo Quintanilla) y Guadalupe (Marco Pérez) Mónica intenta
                    vengarse, pero solo pierde el control sobre sí misma y continúa enamorada de Aurelio, ayudándolo con sus
                    crímenes en lo sucesivo. Marco Mejía (Gabriel Porras), un policía de México que perdió a su padre por
                    culpa de Aurelio, logra hacer que el rostro de Casillas sea revelado por la prensa y medios noticiosos,
                    los cuales le apodaron "El señor de los cielos". Tras haberse revelado el rostro de Aurelio, la policía
                    y sus enemigos comienzan a atacar su organización para quitarle todo su poder. Después de varios meses,
                    Marco logra hacer caer a Aurelio, expropiándole sus terrenos, mansiones y joyas. Aurelio, tras verse
                    acorralado, decide hacerse una operación de rostro, muriendo en una camilla de hospital. Al final,
                    Heriberto cumple la promesa que le hizo a su padre, antes de morir, y mata a Marco Mejía.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Temporada 2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Descripción:</strong> Todos creen que El señor de los Cielos murió en aquella camilla de
                    hospital, pero es mentira. Ahora Aurelio regresará de la muerte a vengarse de los que osaron
                    traicionarle. Aurelio Casillas vuelve para buscar venganza de sus enemigos con la ayuda de su resucitada
                    e inquebrantable amante Mónica Robles y su fiel hermano Víctor "Chacorta" Casillas. Buscará retomar el
                    vuelo y recuperar la silla del Capo de Capos, pero él no es el único contendiente, pues ahora José María
                    "El Chema" Venegas (Mauricio Ochmann) buscará reclamar para sí ese título y enviar de nuevo al Señor de
                    los Cielos a donde cree que debe estar. Además, ahora la solitaria agente Leonor "La colombiana"
                    Ballesteros (Carmen Villalobos) deberá atrapar a Casillas sin la ayuda de su compañero Marcos Mejía, que
                    fue asesinado por Heriberto Casillas y Chacorta. Ella tendrá la ayuda del Gobernador de Jalisco Pedro
                    Nevárez (Irineo Álvarez), su hija Victoria Nevárez (Marlene Favela) y su marido Ignacio Miravalle
                    (Alejandro de la Madrid). Con la muerte del gobernador todos deberán tomar bando del Chema o Aurelio,
                    pues ambos iniciarán una carrera para llegar a la presidencia de Jalisco y reclamar dicho territorio, en
                    una historia de tragedias y muerte, Aurelio deberá enfrentar una guerra larga, sangrienta y de desgaste,
                    pues con la muerte de su amada Ximena, el atentado en contra de su sobrino Víctor Casillas Jr. "El
                    Chacortita" (Jorge Luis Moreno) a manos del Tostado (Sebastián Caicedo) que este fue asesinado por
                    Aurelio cubriendo a Tijeras (Tommy Vásquez), su amor fugaz por Victoria y con la sombra del Chema
                    Venegas persiguiéndole deberá retomar el vuelo a su preciado cielo, pero con la sorpresa de que su hija
                    Rutila lo hará abuelo de su peor enemigo.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Temporada 3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Descripción:</strong> El señor de los cielos está en prisión sin saber si es de día o de noche
                    siendo golpeado y torturado diariamente por los soldados de la marina comandados por Marcado (Sebastián
                    Ferrat) y Medardo (Alejandro Peniche), dos generales corruptos del cuerpo de seguridad de Rodrigo Rivero
                    (Manuel Balbi) y sumado a la recompensa que su rival El Chema puso sobre su cabeza. Pero cuando el
                    ambicioso agente de la CIA Tim Rowlings (Sergio Mur) ve una manera de escalar en la organización ofrece
                    un trato a Casillas: trabajar para la ley, pero con la presión de su familia amenazada, el atentado que
                    sufre su sobrino Víctor Casillas Jr., la vida que lleva su hija Rutila ahora atada a Venegas quien con
                    humillaciones y maltratos pagará el precio por su venganza,7​ su hijo y su mujer Mónica Robles sitiados
                    en toda América y con la brutal muerte de su hermano "Chacorta" deberá ceder y ser liberado a cualquier
                    precio. Pero la agente Ballesteros después de ver lo difícil y el número de bajas que sufrió para
                    meterlo preso no cede, además esto la desestabilizará pues comienza a sentir atracción por Casillas por
                    lo que deberá ceder y con su nueva familia su amiga Julia Rowlings (Sandra Beltrán) y su nueva pareja
                    Omar Terán (Jesús Móre) deberá regresar en sí y decidir qué camino debe elegir. Aurelio libre y con el
                    regreso de viejos conocidos como el diputado Silva (Juan Ignacio Aranda), Don Feyo Aguilera (Leonardo
                    Daniel) y Lilo (Edgardo González) el agente cubano, y la obligada entrada del Tijeras, el hermano gemelo
                    del Tostado Eleazar Yepes y junto a la nueva generación de cabecillas del narcotráfico SuperJavi
                    (Alejandro López), Víctor Jr. deberá luchar en dos frentes, el ahora exiliado Marcado que traicionó a
                    Venegas y fundó su propio grupo los Emes, y su viejo rival el General Gárnica (Tomás Goros) salió de la
                    cárcel después de asesinar a Ernesto Gamboa (Sahit Sosa) por órdenes de Venegas que iniciará una guerra
                    larga que acabará con el fin de uno de los tres. Pero Aurelio no es el único con problemas, pues Venegas
                    se verá en una encrucijada entre el amor que tiene con Rutila, la desesperada lucha que lleva contra los
                    Emes, la muerte de su Agente Andrews (Ari Sebastián Brickman) a manos de Víctor, y la poca atención que
                    presta a sus negocios causaran en él una mentalidad que lo hará tropezar una y otra vez al grado de que
                    terminará trabajando como en sus inicios. Pero el destino siempre da vueltas, la aparición de Esperanza
                    Salvatierra (Sabrina Seara), la rivalidad que surge con Don Feyo a causa de la infidelidad de su esposa
                    La Condesa (Verónica Montes) y a últimos aires Mónica lo traiciona con Víctor que se enfrentará a su tío
                    a causa de una decisión que Aurelio tomó con tal de que entrara al negocio, con la adicción de su hija
                    Luz Marina con las drogas y su nueva enfermedad verá si es capaz de evitar que se le caiga el cielo.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Temporada 4
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Descripción:</strong> Aurelio desatará una vez más una guerra en México, pero en esta ocasión no
                    será contra el gobierno, la DEA u otros cárteles… sino contra su propia familia. Después de que Emiliana
                    lograra meterse en la vida de Aurelio Casillas y de que los federales lograron localizar a los prófugos
                    más famosos de la televisión, el futuro de Aurelio y compañía parecía más negro que nunca. A lo anterior
                    hay que sumarle que Mónica ya estaba casada con Víctor, y que en medio de su boda, recibió un tiro que
                    al parecer es mortal y esta guerra ahora sí es mundial y personal.
                </div>
            </div>
        </div>
    </div>
@endsection
