import '../../css/welcome.css';
import { landing, login, logout, register } from '@/routes';
import { type SharedData } from '@/types';
import Header from '@/components/Header';
import { usePage } from '@inertiajs/react';
import BigPost from '@/components/BigPost';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <div className="flex flex-col min-h-screen">
            <Header/>
            <BigPost img="/portada.png" title="Estamos haciendo Ghost Castle!" text="Ghost Castle será un juego “auto-battler”, donde los usuarios toman el rol de un personaje adentrándose en el castillo, seleccionando oponentes entre las criaturas que yacen adentro, luchando con ellas, consiguiendo objetos de las mismas, y combinando los objetos de manera estratégica con su equipamiento, antes de volver a pelear. Las batallas se desarrollan automáticamente, según las estadísticas del jugador y su oponente. El usuario luchará inicialmente contra entidades creadas para el juego con comportamientos predefinidos, llamados NPCs (non-playable characters), y después contra los “espíritus” de otros jugadores que murieron en el castillo, de manera asincrónica (utilizando estados guardados en el servidor). El juego le permitirá al usuario dejar la aplicación en cualquier momento, y resumir después, manteniendo su progreso."/>
        </div>
    );
}
