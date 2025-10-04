import { SpeakerWaveIcon, SpeakerXMarkIcon } from '@heroicons/react/24/solid';
import { useState } from "react";
import useSound from "use-sound";

const track = "/sounds/Oxygen Mask - Andy G. Cohen.m4a";

export default function MusicButton() {
    const [playing, setPlaying] = useState(false);
    const [play, { stop }] = useSound(track, {
        volume: 0.5,
        loop: true,
        interrupt: false,
    });

    const toggle = () => {
        if (playing) {
            stop();
            setPlaying(false);
        } else {
            play();
            setPlaying(true);
        }
    };

    return (
        <button onClick={toggle} className="fixed bottom-4 right-4 p-3 rounded-full text-white shadow-lg bg-red-950 hover:bg-red-900 hover:cursor-pointer">
            {playing ? <SpeakerWaveIcon className="h-6 w-6" /> : <SpeakerXMarkIcon className="h-6 w-6" />}
        </button>
    );
}
