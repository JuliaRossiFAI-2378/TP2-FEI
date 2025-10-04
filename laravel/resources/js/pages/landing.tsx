import '../../css/dashboard.css';

export default function Landing() {
    return (
        <>
            <header className='bg-[#212121] py-3 px-5 flex justify-between items-center'>
                <img src='/icon2.png' className='max-h-10' />
                <nav>
                    <span className='text-xl'>Ghost Castle</span>
                </nav>
            </header>
            <body className='w-100%'>
                <div className="flex justify-center">
                    <div className="max-w-sm rounded overflow-hidden shadow-lg">
                        <img className="w-full" src="/portada.png" alt="Sunset in the mountains" />
                        <div className="px-6 py-4">
                            <div className="font-bold flex justify-center text-gray-400 text-xl">Ghost Castle</div>
                                <p className="text-orange-800 text-base">
                                Ghost Castle será un juego “auto-battler”, donde los usuarios toman el rol de un personaje adentrándose en el castillo, 
                                seleccionando oponentes entre las criaturas que yacen adentro, luchando con ellas, consiguiendo objetos de las mismas, 
                                y combinando los objetos de manera estratégica con su equipamiento, antes de volver a pelear. Las batallas se desarrollan 
                                automáticamente, según las estadísticas del jugador y su oponente. El usuario luchará inicialmente contra entidades creadas 
                                para el juego con comportamientos predefinidos, llamados NPCs (non-playable characters), y después contra los “espíritus” de 
                                otros jugadores que murieron en el castillo, de manera asincrónica (utilizando estados guardados en el servidor). El juego 
                                le permitirá al usuario dejar la aplicación en cualquier momento, y resumir después, manteniendo su progreso.
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </>
       
    );
}
