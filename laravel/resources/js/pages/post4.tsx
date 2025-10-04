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
            <BigPost title="Ya aprobamos el 25%!!!" text="Buenas noticias, aprobamos el primer sprint funcional, y muy bien. No solo cumplimos con todas las funcionalidades que habiamos planteado, sino que tambíen entregamos una funcionaldiad por adelantado! Nada mal eh?" />
        </div>
    );
}
