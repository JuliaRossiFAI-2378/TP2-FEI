export default function Post({ img, routeLink, title, text }) {
  console.log(routeLink);
  return (
    <div className="flex flex-col items-center justify-center" >
        <div className="bg-indigo-950/70 shadow-2xl text-left rounded max-w-4xl p-6 flex flex-col items-center justify-center gap-4 saturate-50">
            {img && (<img className="w-sm rounded" src={img}/>)}
            <p className=" px-2 py-2 text-3xl  text-white font-bold" >{title}</p>
            <p className="text-xl" >{text}</p>
        </div>
    </div>
  );
}