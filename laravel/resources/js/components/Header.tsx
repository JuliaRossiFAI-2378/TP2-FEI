import { Button } from '@headlessui/react';
import { landing, logout, FAQ } from '@/routes';
import { Link } from '@inertiajs/react';
export default function Header(){
    return(
        <header className='bg-[#212121] py-3 px-5 flex justify-between items-center'>
            <img src='/icon2.png' className='max-h-10' />
            <nav className='grid grid-cols-4 gap-12'>
                {/*
                    por alguna razon los comentarios html no funcionan aca ??? 😭😭😭
                    anyways, el active no funciona pero ya son las 6am como para fijarme por que 😭
                    tampoco pone el mouse en modo clickiacion cuando le haces hover (en el ejemplo de la pagina tampoco lo tiene)
                */}
                <Link href={landing()}><Button className="text-xl w-full rounded bg-red-800 data-hover:bg-red-900 data-active:bg-red-950">Inicio</Button></Link>
                <Link href={FAQ()}><Button className="text-xl w-full rounded bg-orange-800 data-hover:bg-orange-900 data-active:bg-orange-950">FAQ</Button></Link>
                <Link href={logout()}><Button className="text-xl w-full rounded bg-slate-800 data-hover:bg-slate-900 data-active:bg-slate-950">Logout</Button></Link>
                <span className="text-xl">Ghost Castle</span>
            </nav>
        </header>
    )
}