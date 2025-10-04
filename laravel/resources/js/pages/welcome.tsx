import '../../css/welcome.css';
import { landing, login, logout, register } from '@/routes';
import { type SharedData } from '@/types';
import Header from '@/components/Header';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <div className="flex flex-col min-h-screen">
            <Header/>
        </div>
    );
}
