insert INTO programas
values (
        null,
        "Gent amb trellat",
        "Un podcast de Nerea Pedrón i Gema Dalia.",
        1,
        "https://open.spotify.com/show/3xKLNISLH2jtZ10smgCTmz",
        100,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "DesVARiando",
        "Bienvenidos a DesVARiando, un programa en el que se analiza el fútbol de manera rigurosa, o al igual no tanto....",
        2,
        "https://open.spotify.com/show/0XctocTbaR5tHbDcJAJCmf",
        20,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "The elden ring podcast",
        "Discussing Elden Ring. News, analysis, speculation and more. Produced by Albert Chessa.",
        2,
        "https://open.spotify.com/show/21qLcBwJdIi7A989louJUb",
        80,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    );
insert into categorias
values (
        null,
        "deportes",
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "actualidad",
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "musica",
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "videojuegos",
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "tecnologia",
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    );
insert into programa_categoria
values (null, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
    (null, 2, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
    (null, 2, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
    (null, 3, 4, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
    (null, 3, 5, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
insert into episodios
VALUES(
        null,
        "Capitol 01/T1 - Fill predilecte",
        "https://open.spotify.com/episode/5XY3Qg3vONCrU6NWe86fH0",
        "Holiiii, som Gema i Nerea. Vos donem la benvingudissima al nostre primer capitol d'aquest podcast que hem creat amb moltissima il.lusió, un lloc on desconnectar, on riure i on reivindicar-nos. Esperem que ho gaudiu tant com nosaltres!!",
        1,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "Capítol 02/T1 - Teletransport involuntari",
        "https://open.spotify.com/episode/5KxIhZwFpxXtnHjX5VDLtl",
        "Que esta passant entre Polonia i Bielorrusia? Pablo Casado ha gastat la porta magica de Doraemon i s.ha teletransportat involuntariament a la misa en honor a Franco! Els pijos madrilenys ataquen de nou i Esperanza Gracia ens dona la bona nit per Twitter.",
        1,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "1X00: The first dance",
        "https://open.spotify.com/episode/5aViCTajwjdlwug3YnZo8X",
        "Bienvenidos a DesVARiando, un programa en el que se analiza el fútbol de manera rigurosa, o quizás no tanto...",
        2,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    ),
    (
        null,
        "1X01: Juez de línea? Seguro que le gustaban mucho las rayas",
        "https://open.spotify.com/episode/5bVK8uoeMxTpoxm7BuzRv7",
        "En nuestro primer programa, hablamos del VAR, un tema que nos inspiró para nuestro nombre, y por ello, era obligatorio que se hablará de ello para empezar. Además hablamos también del arbitraje en la actualidad y en Europa. Para terminar, Jero nos trae un juego sobre árbitros que nada tiene que ver con el Indicius de Colgados del Aro.",
        2,
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
    );