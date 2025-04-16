var app = document.getElementById('app')

var Typewriter = new Typewriter(app, {
    loop: false,
    // delay: 30,
    delay: 1,
});

Typewriter
    .pauseFor(30)
    .typeString('El SUJETO')
    .pauseFor(300)
    .deleteChars(6)
    .typeString('EXPERIMENTO 001 es nuestro más grande éxito en lo que respecta nuestros experimentos. Representa la cara del proyecto EnderTuki, estando al mando de el escuadrón de abejas. El trato físico está completamente prohibido, que su aspecto tierno no te engañe. Inició como un proyecto tierno y dócil, las distintas pruebas fueron incapacitando sus sentidos y se convirtió en un sujeto de pruebas agresivo e incontrolable. Progresivamente, fue descendiendo a un nivel agresivo impactante. Esto hizo que tengamos que cambiar totalmente el contenido que se sube a su respectivo canal, siendo este, un proyecto magnífico. Actualmente permanece en un estado de hibernación al igual que los demás clones, siendo usado únicamente para la creación de contenido, debido a su gran habilidad y flexibilidad, encerrado en una cámara de alta seguridad.')
    .start()