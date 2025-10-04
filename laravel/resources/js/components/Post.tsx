import { Link } from '@inertiajs/react';

export default function Post({ img, routeLink, title, text }) {
  console.log(routeLink);
  return (
    <div className="bg-indigo-950/70 shadow-2xl text-left rounded max-w-sm p-6 flex flex-col items-center justify-center gap-4 saturate-50">
        {img && (<img className="w-sm rounded" src={img}/>)}
        <Link href={routeLink} className="self-start">
            <p className="px-2 py-2 text-xl  text-white font-bold hover:text-green-700 hover:cursor-pointer" >{title}</p>
        </Link>
        <p className="overflow-hidden line-clamp-3" >{text}</p>
        <Link href={routeLink} className="self-start">
            <p className="px-2text-sm  text-white font-bold hover:text-red-700 hover:cursor-pointer" >Leer mas</p>
        </Link>
    </div>
  );
}
