import '../../css/welcome.css';
import { landing, login, logout, register } from '@/routes';
import { type SharedData } from '@/types';
import Header from '@/components/Header';
import { Head, Link, usePage } from '@inertiajs/react';
import BigPost from '@/components/BigPost';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <div className="flex flex-col min-h-screen">
            <Header/>
            <BigPost title="Quienes Somos?" text='Somos estudiantes de ultimo año en la carrera "Desarollo Web" de la Universidad del Comahue. Hace tiempo que venimos disfrutando de los juegos auto-battler, y decidimos hacer el nuestro. '/>
        </div>
    );
}
