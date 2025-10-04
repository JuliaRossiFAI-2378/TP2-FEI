import '../../css/dashboard.css';
import Header from '@/components/Header';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/react';

export default function FAQ(){
    return(
        <div className="flex flex-col min-h-screen">
            <Header/>
                <div className="flex-grow flex flex-row justify-center items-start gap-6 p-8 px-20">
                    <div className="px-16 py-14">
                        <p className="text-white pb-4 text-3xl flex justify-center">
                            Preguntas Frecuentes
                        </p>
                <div className="mx-auto w-full max-w-lg divide-y divide-white/5 rounded-xl bg-indigo-950/70 shadow-2xl saturate-50">
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
        </div>
    </div>)
}