import '../../css/dashboard.css';
import Header from '@/components/Header';
import Post from '@/components/Post';
import { post1, post2, post3, post4 } from '@/routes';

export default function Landing() {
    return (
        <div className="flex flex-col min-h-screen">
            <Header/>
                <div className="flex-grow flex flex-row flex-wrap justify-start items-start gap-6 p-8 px-20">
                    <Post img="/portada.png" routeLink={post1()} title="Estamos haciendo Ghost Castle!" text="Ghost Castle será un juego “auto-battler”, donde los usuarios toman el rol de un personaje adentrándose en el castillo, seleccionando oponentes entre las criaturas que yacen adentro, luchando con ellas, consiguiendo objetos de las mismas, y combinando los objetos de manera estratégica con su equipamiento, antes de volver a pelear. Las batallas se desarrollan automáticamente, según las estadísticas del jugador y su oponente. El usuario luchará inicialmente contra entidades creadas para el juego con comportamientos predefinidos, llamados NPCs (non-playable characters), y después contra los “espíritus” de otros jugadores que murieron en el castillo, de manera asincrónica (utilizando estados guardados en el servidor). El juego le permitirá al usuario dejar la aplicación en cualquier momento, y resumir después, manteniendo su progreso." />
                    <Post img="question.jpg" routeLink={post2()} title="Quienes Somos?" text='Somos estudiantes de ultimo año en la carrera "Desarollo Web" de la Universidad del Comahue. Hace tiempo que venimos disfrutando de los juegos auto-battler, y decidimos hacer el nuestro. ' />
                    <Post img="tools.jpg" routeLink={post3()} title="Herramientas utilizadas" text='Obviamente no podemos hacer el juego con nuestras propias manos. Aca les dejamos una lista de todas las herramientas que utilizamos durante su creación, y puede que aumente: -laravel -react -xampp -useAudio.' />
                    <Post img="sprint.jpeg" routeLink={post4()} title="Ya aprobamos el 25%!!!" text="Buenas noticias, aprobamos el primer sprint funcional, y muy bien. No solo cumplimos con todas las funcionalidades que habiamos planteado, sino que tambíen entregamos una funcionaldiad por adelantado! Nada mal eh?" />
                </div>
        </div>
    );
}
