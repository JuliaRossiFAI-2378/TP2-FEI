import '../../css/dashboard.css';
import Header from '@/components/Header';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/react';

export default function FAQ(){
    return(
        <>
        <Header/>
        <div className="px-16 py-14">
            <p className="text-orange-800 text-[35px] text-base flex justify-center">
            Seccion de preguntas frecuentes
            </p>
        </div>
        {/*
            debo admitir que la verdad no entendi que era el mailing list pero ya era tarde para vos y
            te estabas yendo a dormir asique no pude preguntar 😭😭
            anyways, espero te parezca aceptable esto como la ultima funcionalidad, con esto ya nos quedan las 3:
            login, el sonido cuando puedas y esto que aplica el plugin (? idk if se llama plugin) de headless ui
        */}
        <div className='pb-20'>
            <div className="mx-auto w-full max-w-lg divide-y divide-white/5 rounded-xl bg-white/5">
                <Disclosure as="div" className="p-6 " >
                    <DisclosureButton className="group flex w-full items-center justify-between">
                        <span className="text-white group-data-hover:text-white/80">
                        Hay alguna tienda para comprar mas materiales?
                        </span>
                    </DisclosureButton>
                    <DisclosurePanel className="mt-2  text-white/50">
                        No, los materiales solo pueden ser conseguidos despues de un combate.
                    </DisclosurePanel>
                </Disclosure>
                <Disclosure as="div" className="p-6">
                    <DisclosureButton className="group flex w-full items-center justify-between">
                        <span className=" font-medium text-white group-data-hover:text-white/80">
                        Tiene modo de combate PvP?
                        </span>
                    </DisclosureButton>
                    <DisclosurePanel className="mt-2 text-white/50">No. Osea, si, pero no. <br/> Tiene combates asincronicos contra "fantasmas" de jugadores que perdieron en esa misma etapa del juego</DisclosurePanel>
                </Disclosure>
                <Disclosure as="div" className="p-6">
                    <DisclosureButton className="group flex w-full items-center justify-between">
                        <span className=" font-medium text-white group-data-hover:text-white/80">
                        Me olvide que estaba en una partida y cerr&eacute; el navegador, perdi todo mi progreso?
                        </span>
                    </DisclosureButton>
                    <DisclosurePanel className="mt-2 text-white/50">No, las partidas son guardadas autom&aacute;ticamente.</DisclosurePanel>
                </Disclosure>
                <Disclosure as="div" className="p-6">
                    <DisclosureButton className="group flex w-full items-center justify-between">
                        <span className=" font-medium text-white group-data-hover:text-white/80">
                        Pueden darme un super item para pasarme el juego automaticamente?
                        </span>
                    </DisclosureButton>
                    <DisclosurePanel className="mt-2 text-white/50">No.</DisclosurePanel>
                </Disclosure>
            </div>
        </div>
        </>
    )
}