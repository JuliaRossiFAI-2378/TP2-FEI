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
            <BigPost title="Herramientas utilizadas" text='Obviamente no podemos hacer el juego con nuestras propias manos. Aca les dejamos una lista de todas las herramientas que utilizamos durante su creación, y puede que aumente: -laravel -react -xampp -useAudio.' />
        </div>
    );
}
