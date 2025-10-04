import ReactPlayer from "react-player";

export default function OverlayVideo() {
    return (
        <div className="fixed inset-0 z-9999 pointer-events-none">
            <video
            src="/videos/videoplayback.mp4"
            poster="/videosinload.png"//entiendo que esto se muestra mientras el video carga
            autoPlay
            loop
            muted
            className=" w-full h-full object-cover z-50 opacity-50 pointer-events-none"
            />
        </div>
  );
}
