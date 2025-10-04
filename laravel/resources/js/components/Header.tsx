import { Button } from '@headlessui/react';
import { home, logout, FAQ, login, register } from '@/routes';
import { Link, usePage } from '@inertiajs/react';
import { type SharedData } from '@/types';

export default function Header(){
    const { auth } = usePage<SharedData>().props;

    return(
        <header className='bg-[#212121] py-12 px-5 flex justify-between items-center'>
            <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet"/>
            <Link href={home()}><span className="text-5xl" style={{fontFamily: "'UnifrakturCook', cursive", WebkitTextStroke: "1px black", textShadow: `2px -2px 0 black, 3px 3px 0 black`}} >GHOST CASTLE</span></Link>
            <nav className='grid grid-cols-4 gap-12'>
                {auth.user ? (
                    <>
                <Link href={home()}><Button className=" px-5 py-2 text-white text-l w-full rounded bg-red-900 data-hover:bg-red-800 hover:cursor-pointer">Inicio</Button></Link>
                <Link href={FAQ()}><Button className=" px-5 py-2 text-l w-full rounded bg-red-900 data-hover:bg-red-800 hover:cursor-pointer">FAQ</Button></Link>
                <Link href={logout()}><Button className=" px-5 py-2 text-l w-full rounded bg-red-900 data-hover:bg-red-800 hover:cursor-pointer">Logout</Button></Link>
                    </>
            ) : (
                <>
                <Link href={login()}><Button className=" px-5 py-2 text-white text-l w-full rounded bg-red-900 data-hover:bg-red-800 hover:cursor-pointer">Login</Button></Link>
                <Link href={register()}><Button className=" px-5 py-2 text-white text-l w-full rounded bg-red-900 data-hover:bg-red-800 hover:cursor-pointer">Registro</Button></Link>
            </>    
            )}
            </nav>
        </header>
    )
}