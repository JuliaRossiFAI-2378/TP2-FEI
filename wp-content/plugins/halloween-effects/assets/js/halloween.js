jQuery(document).ready(function($) {
    var settings = window.halloweenSettings;
  
    if (!settings) {
        console.error('halloween settings not found');
        return;
    }
  
    var musicOption = settings.musicOption;
    var applyTo = settings.applyTo;
    var pageId = settings.pageId;
    var EnablePumpkin = settings.enablePumpkin;
    const color = settings.color;
    var EnableFonts = settings.enableFont;
    
  
    // Check if snow should be applied to this page
    if (applyTo === 'all' || (applyTo === 'single' && $('body.page-id-' + pageId ).length > 0 )) {               
        $(window).on('resize', function() {
          var pageHeight = $(document).height(); // Recalculate the page height
          $('.halloween-container').css('height', pageHeight); // Adjust snow container height
        });
  
        // Music functionality (if any selected)
        if (musicOption !== 'none' && typeof window.halloween_music_url !== 'undefined') {
            var musicSrc = window.halloween_music_url.musicURL;
            var music = new Audio(musicSrc + musicOption + '.mp3');
            music.loop = true;
  
            // Play music on first click
            function playMusic() {
                music.play();
                document.removeEventListener('click', playMusic);
            }
            document.addEventListener('click', playMusic);
        }


        function createGhosts() {
            const ghostCount = 5; // Number of ghosts to create at once
            const pageWidth = document.documentElement.clientWidth; // Full width of the page
            const pageHeight = document.documentElement.scrollHeight; // Full height of the page, including scrollable content
                    
            for (let i = 0; i < ghostCount; i++) {
                const ghost = $(`<div class="halloween-ghost"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 435.000000 574.000000"
 preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,574.000000) scale(0.100000,-0.100000)"
fill="${color}" stroke="none"><path d="M1995 5693 c-302 -35 -538 -120 -790 -281 -333 -213 -656 -622 -793
-1002 -91 -252 -111 -383 -122 -810 -13 -481 -33 -766 -81 -1140 -11 -85 -24
-191 -30 -235 -6 -44 -25 -183 -44 -310 -108 -735 -135 -1119 -92 -1310 83
-366 327 -605 620 -605 115 0 182 21 368 115 216 109 270 127 379 127 101 0
165 -21 285 -93 121 -72 189 -92 315 -92 188 0 330 66 512 240 113 108 157
133 243 133 96 0 166 -40 331 -186 121 -108 183 -149 275 -181 206 -73 409
-19 572 150 117 121 252 358 311 546 81 255 84 506 15 1106 -153 1337 -192
1627 -250 1875 -167 708 -456 1228 -864 1559 -201 163 -455 296 -682 356 -124
34 -361 52 -478 38z m335 -195 c164 -25 353 -91 485 -166 33 -19 102 -66 153
-105 70 -53 92 -75 92 -93 0 -23 -3 -24 -61 -24 -45 0 -71 -6 -95 -21 -34 -21
-54 -19 -54 6 0 8 -11 22 -25 31 -15 10 -25 26 -25 40 l0 24 -41 -26 c-62 -39
-107 -51 -200 -55 -92 -4 -132 11 -150 58 l-8 23 -48 -30 c-60 -37 -142 -53
-207 -41 -26 5 -56 6 -67 4 -26 -7 -69 23 -69 47 0 27 -13 25 -61 -10 -54 -39
-83 -43 -214 -33 l-110 8 -17 33 c-9 18 -19 28 -23 23 -3 -6 -27 -23 -53 -38
-42 -25 -57 -28 -157 -30 -126 -2 -155 8 -155 56 0 40 4 43 247 173 152 81
379 146 563 162 62 5 222 -3 300 -16z m-1030 -398 c0 -5 -12 -10 -26 -10 -14
0 -23 -4 -19 -10 3 -6 48 -10 100 -10 89 0 95 -1 119 -27 l25 -27 10 27 c12
32 46 42 104 32 23 -4 83 -8 134 -9 78 -1 96 -4 122 -23 l30 -23 24 24 c28 28
101 44 122 26 10 -8 47 -11 117 -9 l103 4 15 -30 15 -30 29 34 c29 32 31 33
85 26 31 -4 88 -6 128 -5 74 1 101 -7 140 -42 l21 -20 16 31 c20 38 55 48 116
32 26 -7 59 -9 74 -5 48 12 136 -5 161 -31 l21 -24 21 20 20 21 27 -28 c14
-16 26 -32 26 -36 0 -4 -18 -17 -40 -28 -40 -20 -59 -44 -46 -57 3 -4 24 3 45
15 21 12 48 22 58 22 25 0 61 -36 87 -85 16 -30 18 -40 8 -56 -18 -28 -15 -31
18 -24 32 7 33 6 44 -47 6 -25 3 -28 -19 -28 -19 0 -29 -9 -42 -35 -9 -19 -19
-35 -22 -35 -6 1 -26 26 -82 103 -23 31 -63 36 -95 12 -18 -14 -17 -14 13 -15
33 0 51 -14 32 -25 -6 -4 -8 -18 -4 -32 5 -23 4 -25 -17 -19 -44 13 -183 27
-215 21 -45 -8 -50 -23 -14 -36 17 -6 31 -17 31 -24 0 -25 21 -27 44 -6 28 26
44 26 76 1 24 -19 24 -20 4 -20 -42 0 -46 -24 -9 -53 40 -32 55 -34 55 -8 0
11 10 32 23 47 21 23 26 25 46 15 19 -11 26 -10 42 5 10 9 22 14 25 11 12 -12
-6 -38 -41 -58 -25 -15 -35 -28 -35 -45 0 -38 25 -28 43 16 9 24 22 40 32 40
21 0 68 -25 84 -44 11 -14 11 -16 -4 -16 -9 0 -30 -13 -46 -29 -21 -22 -29
-39 -29 -66 l0 -37 27 32 c48 57 107 62 82 7 -6 -14 -9 -33 -5 -43 5 -14 12
-10 41 24 41 48 81 60 122 38 19 -10 23 -15 11 -16 -10 0 -32 -13 -51 -29 -18
-16 -46 -33 -63 -37 -60 -14 -203 -76 -208 -90 -10 -25 19 -26 59 -3 l38 23
18 -23 19 -23 29 31 c16 17 35 31 43 31 7 0 26 7 43 16 25 13 36 13 72 2 34
-10 44 -18 48 -40 11 -48 -4 -89 -36 -100 -28 -10 -56 -44 -45 -55 3 -3 17 2
30 11 31 20 66 21 92 1 10 -8 31 -15 47 -15 44 0 31 -23 -28 -49 -44 -19 -63
-22 -103 -16 -46 6 -52 4 -83 -24 -30 -27 -31 -30 -13 -31 11 0 25 5 31 11 18
18 35 0 28 -30 -9 -36 -33 -60 -78 -78 -29 -12 -36 -20 -31 -32 3 -9 6 -20 5
-26 -10 -75 8 -100 32 -43 22 50 50 71 86 63 29 -6 31 -5 31 23 0 34 53 102
64 83 10 -16 48 -14 73 4 19 13 22 13 37 -9 8 -14 25 -26 38 -28 17 -2 24 -14
34 -53 7 -27 24 -90 37 -140 118 -432 189 -909 232 -1565 13 -212 31 -473 40
-580 35 -459 38 -535 26 -649 -15 -139 -58 -284 -122 -413 -59 -117 -118 -182
-207 -227 -69 -35 -219 -81 -263 -81 -47 0 -122 44 -319 188 -209 152 -314
209 -406 218 -127 13 -193 -20 -409 -206 -257 -220 -366 -239 -610 -102 -155
87 -185 99 -267 112 -138 22 -216 2 -508 -130 -238 -108 -256 -114 -355 -115
-86 0 -93 2 -143 34 -95 60 -181 181 -246 342 -53 132 -69 222 -70 394 0 167
7 224 69 570 79 434 117 773 180 1595 37 480 73 861 96 1005 30 194 122 439
226 603 85 135 281 352 318 352 6 0 17 -12 23 -26 12 -25 32 -25 32 0 0 16 42
36 78 36 15 1 38 7 52 15 30 17 50 19 50 5z m785 0 c4 -6 -6 -10 -22 -10 -22
0 -25 2 -13 10 19 12 27 12 35 0z m-388 -6 c-3 -3 -12 -4 -19 -1 -8 3 -5 6 6
6 11 1 17 -2 13 -5z m1743 -494 c7 -17 11 -32 9 -33 -2 -1 -20 -8 -38 -15 -41
-14 -54 -3 -44 38 9 37 12 40 37 40 17 0 27 -9 36 -30z m27 -82 c-3 -8 -6 -5
-6 6 -1 11 2 17 5 13 3 -3 4 -12 1 -19z"/>
<path d="M1582 4737 c-57 -57 -61 -72 -34 -116 l17 -29 40 34 c35 30 37 34 18
34 -13 0 -23 6 -23 14 0 22 17 28 40 16 16 -8 20 -21 20 -59 0 -55 20 -82 48
-65 33 21 37 41 20 91 -10 26 -22 67 -28 91 -16 62 -49 59 -118 -11z m93 3 c0
-8 -10 -16 -22 -18 -22 -3 -32 16 -16 32 12 11 38 2 38 -14z m35 -124 c0 -8
-4 -17 -9 -21 -12 -7 -24 12 -16 25 9 15 25 12 25 -4z"/>
<path d="M1370 4732 c0 -4 4 -21 9 -38 5 -19 5 -37 0 -45 -7 -11 -16 -6 -39
21 -29 34 -29 35 -30 10 0 -14 12 -43 26 -64 22 -33 25 -41 13 -50 -18 -14
-49 -70 -49 -88 0 -23 34 -48 64 -48 32 0 67 25 101 72 14 18 32 43 41 56 17
23 16 24 -32 70 -27 26 -57 62 -66 80 -15 29 -38 44 -38 24z m55 -162 c4 -6 2
-17 -4 -24 -6 -6 -9 -25 -8 -41 2 -23 -4 -32 -26 -43 -22 -11 -31 -11 -43 -2
-21 18 -17 32 22 78 37 43 48 49 59 32z"/>
<path d="M938 4639 c-30 -24 -38 -38 -38 -63 0 -47 15 -56 96 -56 54 0 75 -4
85 -16 12 -15 9 -16 -39 -9 -49 6 -53 5 -82 -23 -16 -17 -30 -37 -30 -46 0
-25 45 -47 109 -53 59 -6 61 -5 71 21 15 40 12 108 -6 134 -13 20 -24 22 -95
22 -73 0 -79 2 -79 20 0 24 27 37 43 21 16 -16 47 -14 53 4 9 22 -16 75 -35
75 -9 -1 -33 -14 -53 -31z m106 -175 c29 -11 18 -42 -19 -54 -40 -13 -55 -7
-55 21 0 26 43 45 74 33z"/>
<path d="M1210 4644 c-13 -33 -13 -57 2 -88 16 -37 42 -41 80 -14 18 13 34 24
36 24 2 1 -8 25 -22 53 -23 44 -30 51 -56 51 -24 0 -33 -6 -40 -26z m60 -65
c-6 -10 -15 -19 -20 -19 -13 0 -24 46 -15 67 6 16 8 16 26 -5 14 -18 16 -28 9
-43z"/>
<path d="M1769 4645 c-3 -5 -9 -22 -13 -37 -8 -37 15 -58 65 -58 53 0 74 13
88 51 13 37 4 53 -13 25 -6 -10 -19 -28 -28 -40 -17 -21 -17 -21 -18 15 0 49
-10 55 -31 19 -24 -39 -37 -38 -41 3 -2 17 -6 28 -9 22z"/>
<path d="M1958 4640 c-9 -6 -22 -26 -28 -45 -14 -44 -1 -65 40 -65 33 0 48 16
56 58 10 51 -24 77 -68 52z m39 -37 c2 -6 -4 -18 -13 -27 -23 -23 -40 -6 -24
24 11 21 31 23 37 3z"/>
<path d="M1120 4601 c0 -28 8 -49 26 -70 14 -17 29 -31 34 -31 4 0 -3 30 -16
68 -13 37 -24 68 -24 70 0 1 -4 2 -10 2 -5 0 -10 -18 -10 -39z"/>
<path d="M2103 4590 c-13 -34 -33 -40 -33 -11 0 11 -4 23 -10 26 -6 4 -10 -5
-10 -20 0 -37 -23 -76 -60 -103 -37 -28 -37 -59 0 -80 23 -13 33 -12 99 14 40
16 76 34 78 41 3 7 -2 22 -11 35 -10 14 -16 43 -16 75 0 60 -18 72 -37 23z
m-13 -114 c0 -8 -7 -16 -15 -20 -8 -3 -15 -9 -14 -13 4 -24 -3 -32 -28 -29
-16 2 -34 4 -41 5 -8 1 -12 10 -10 23 5 33 108 66 108 34z"/>
<path d="M2785 4542 c-11 -8 -38 -102 -31 -109 2 -2 25 10 51 26 50 32 64 31
108 -7 21 -19 37 -7 40 32 2 24 -3 29 -53 46 -58 20 -98 25 -115 12z"/>
<path d="M2665 4492 c-32 -11 -51 -25 -64 -49 -17 -33 -13 -39 12 -16 12 11
39 30 60 42 20 13 37 25 37 27 0 5 -21 3 -45 -4z"/>
<path d="M766 4348 c5 -121 3 -136 -15 -165 -14 -22 -33 -35 -59 -43 -53 -14
-71 -35 -48 -58 13 -14 20 -14 36 -4 27 17 57 15 64 -4 9 -23 7 -259 -4 -506
-9 -210 -8 -248 11 -248 33 0 62 220 75 583 l7 189 52 -7 c42 -5 54 -3 58 9 7
18 -2 25 -58 46 -65 25 -77 59 -73 210 l3 125 -27 3 -27 3 5 -133z m11 -595
c-1 -60 -3 -11 -3 107 0 118 2 167 3 108 2 -60 2 -156 0 -215z"/>
<path d="M1485 4287 c-107 -49 -179 -186 -191 -365 -9 -122 8 -219 56 -318 43
-90 76 -123 145 -149 39 -16 51 -16 92 -4 88 24 171 134 204 269 21 86 17 252
-9 336 -26 84 -87 179 -137 213 -43 29 -117 37 -160 18z"/>
<path d="M2582 4279 c-128 -64 -204 -289 -172 -512 12 -87 56 -197 97 -242 87
-97 189 -106 277 -25 85 79 128 204 129 380 2 152 -38 271 -119 354 -66 68
-135 83 -212 45z"/>
<path d="M3433 4184 c-29 -14 -53 -54 -32 -54 13 0 75 57 69 64 -3 2 -20 -2
-37 -10z"/>
<path d="M3686 3864 c-9 -8 -16 -22 -16 -30 0 -11 9 -8 35 12 19 14 35 28 35
30 0 11 -41 2 -54 -12z"/>
<path d="M3290 3828 c-60 -37 -90 -73 -90 -106 0 -26 2 -25 23 13 18 32 32 43
69 55 57 18 60 22 51 47 -8 19 -10 19 -53 -9z"/>
<path d="M3676 3790 c-30 -9 -66 -37 -66 -52 0 -5 13 -2 30 7 37 19 60 19 60
0 0 -8 -7 -15 -15 -15 -20 0 -19 -26 1 -34 9 -3 28 0 42 7 22 10 28 20 30 55
3 40 2 42 -25 41 -15 0 -41 -5 -57 -9z"/>
<path d="M3616 3654 c-3 -9 -6 -27 -6 -41 0 -21 2 -24 15 -13 8 7 15 25 15 41
0 31 -14 39 -24 13z"/>
<path d="M1012 3353 c-31 -32 -72 -66 -89 -75 -44 -23 -42 -44 8 -130 l41 -70
16 33 c12 23 27 36 49 41 35 9 56 36 44 56 -5 9 -12 8 -27 -3 -29 -22 -54 -19
-54 8 0 32 18 47 57 47 56 0 73 -27 73 -115 0 -62 4 -79 20 -95 28 -28 64 -25
89 6 30 38 26 78 -14 150 -22 39 -35 76 -35 99 0 65 -33 104 -88 105 -28 0
-43 -10 -90 -57z m126 5 c16 -16 15 -40 -1 -62 -11 -16 -15 -16 -50 -1 -20 8
-37 22 -37 29 0 37 62 60 88 34z m-185 -114 c8 -8 -3 -34 -14 -34 -5 0 -9 9
-9 20 0 19 11 26 23 14z m261 -96 c11 -31 0 -78 -18 -78 -17 0 -26 22 -26 64
0 53 27 62 44 14z"/>
<path d="M557 3385 c-8 -18 11 -31 25 -17 11 11 3 32 -12 32 -4 0 -10 -7 -13
-15z"/>
<path d="M650 3380 c0 -11 7 -20 15 -20 8 0 15 9 15 20 0 11 -7 20 -15 20 -8
0 -15 -9 -15 -20z"/>
<path d="M3252 3384 c-44 -30 -23 -86 52 -137 37 -25 32 -35 -15 -33 -32 0
-45 -5 -60 -23 -31 -38 -21 -151 14 -173 15 -10 69 -10 83 0 21 14 34 51 34
101 0 27 5 72 11 99 11 44 10 54 -10 94 -24 50 -56 88 -74 88 -7 0 -23 -7 -35
-16z m58 -53 c13 -26 13 -31 -4 -31 -18 0 -39 27 -31 40 10 16 23 12 35 -9z
m24 -186 c-14 -73 -25 -95 -49 -95 -18 0 -26 8 -35 35 -14 42 2 75 47 97 34
17 45 6 37 -37z"/>
<path d="M1358 3340 c-22 -49 -58 -187 -58 -223 0 -41 13 -77 25 -66 14 14 46
198 43 248 -2 31 -6 49 -10 41z"/>
<path d="M620 3291 l-65 -6 25 -17 c33 -24 54 -23 87 7 15 13 26 24 23 23 -3
-1 -34 -4 -70 -7z"/>
<path d="M2399 3278 c-23 -14 -29 -25 -29 -51 0 -46 25 -79 58 -75 36 4 37 20
1 41 -29 16 -30 19 -16 40 11 16 26 23 60 25 73 5 87 -8 87 -77 0 -31 7 -79
16 -105 20 -58 13 -110 -18 -144 l-23 -25 30 7 c67 16 81 64 49 172 -8 29 -14
68 -12 86 l3 33 75 3 c41 2 80 8 87 14 16 13 17 54 1 64 -6 4 -85 8 -176 8
-140 1 -168 -1 -193 -16z m326 -28 c-3 -5 -12 -10 -20 -10 -8 0 -17 5 -20 10
-4 6 5 10 20 10 15 0 24 -4 20 -10z"/>
<path d="M2100 3240 c-24 -24 -25 -38 -4 -69 15 -21 15 -23 -5 -37 -26 -19
-27 -45 -3 -67 25 -23 54 -21 86 4 35 28 33 55 -10 95 -34 33 -38 54 -8 54 19
0 18 26 -2 34 -25 9 -33 7 -54 -14z m57 -111 c16 -16 5 -39 -18 -39 -14 0 -19
7 -19 25 0 26 18 33 37 14z"/>
<path d="M1996 3207 c-3 -12 -6 -32 -6 -45 0 -31 -27 -82 -44 -82 -18 0 -26
22 -26 73 0 23 -4 49 -10 57 -7 11 -11 9 -19 -13 -22 -57 -5 -141 30 -152 11
-4 33 -3 50 0 50 11 31 -17 -25 -37 -26 -9 -58 -24 -71 -32 -28 -19 -43 -62
-28 -84 30 -48 90 -40 154 22 25 23 51 45 59 48 11 3 11 9 -3 28 -11 16 -17
44 -17 81 0 82 -11 147 -25 153 -7 2 -16 -5 -19 -17z m-6 -236 c0 -21 -53 -71
-75 -71 -33 0 -40 17 -18 42 28 31 93 52 93 29z"/>
<path d="M2807 3223 c-12 -11 -7 -33 8 -39 20 -8 45 13 38 32 -5 14 -34 19
-46 7z"/>
<path d="M1722 3185 c-57 -64 -50 -156 11 -163 31 -4 57 12 57 34 0 10 -10 13
-32 12 -32 -3 -33 -2 -32 35 2 49 35 87 62 71 12 -8 18 -27 20 -70 2 -32 7
-63 12 -68 15 -15 32 45 27 97 -8 90 -70 116 -125 52z"/>
<path d="M3082 3184 c-53 -37 -69 -124 -29 -168 32 -38 99 -40 118 -5 11 21
10 22 -30 16 -49 -6 -71 10 -71 54 0 28 30 69 50 69 16 0 12 -12 -11 -37 -19
-20 -20 -23 -6 -29 21 -8 65 25 73 54 8 28 -20 62 -50 62 -12 0 -32 -7 -44
-16z"/>
<path d="M554 3138 c4 -29 8 -69 9 -89 3 -47 22 -69 58 -69 20 0 34 8 45 26
15 22 16 31 5 61 -12 31 -11 37 8 57 24 25 28 56 7 56 -7 0 -25 -9 -39 -20
-32 -25 -35 -25 -59 5 -31 40 -41 32 -34 -27z"/>
<path d="M1400 3164 c-15 -39 -12 -110 5 -124 22 -18 136 -25 180 -10 46 15
70 63 60 121 -7 42 -25 53 -26 17 -1 -36 -24 -91 -42 -102 -25 -16 -37 8 -37
72 0 65 -17 66 -39 1 -21 -59 -29 -69 -52 -69 -17 0 -19 7 -19 60 0 63 -13 78
-30 34z"/>
<path d="M2960 3170 c-8 -5 -30 -10 -49 -10 -28 0 -32 -3 -26 -17 5 -10 12
-52 17 -93 5 -41 13 -79 18 -84 10 -10 30 56 30 100 0 20 11 45 30 69 17 21
30 39 30 41 0 8 -36 3 -50 -6z"/>
<path d="M2817 3125 c-17 -42 -1 -186 17 -157 16 27 19 118 4 147 -13 23 -16
25 -21 10z"/>
</g></svg></div>`); // Ghost image
                $('body').append(ghost);
                
                // Randomize ghost's size, position, and animation properties
                const randomSize = Math.random() * 30 + 50; // Ghost size between 20px and 40px
                const randomLeft = Math.random() * pageWidth; // Random horizontal position
                const randomTop = Math.random() * pageHeight; // Random vertical position
                const randomDuration = Math.random() * 6 + 4; // Animation duration (4s to 10s)
            
                // Apply styles directly to the <img> inside the div
                ghost.css({
                    'width': randomSize + 'px',
                    'height': randomSize + 'px',
                    'position': 'absolute',
                    'left': randomLeft + 'px',
                    'top': randomTop + 'px',
                    'animation-duration': randomDuration + 's',
                    'pointer-events': 'none',
                    'z-index': 9999,         
                });
            
                // Apply animation class to the <img> instead of the div
                ghost.addClass('ghost-animation');
            
                // Remove ghost after animation ends
                setTimeout(() => {
                    ghost.remove();
                }, randomDuration * 1000); // Remove ghost after animation duration
            }
        }
        
        // Trigger ghost creation at intervals
        setInterval(createGhosts, 3000);

        if(EnablePumpkin === "1"){
            console.log("Pumpkin Enabled");            
            $('img:not(.featured-image):not(.icon):not(.avatar)').each(function () {
                const pumpkinImageUrl = window.halloweenSettings.pumpkinImageUrl; // Replace with your image URL
                let PumpkinPosition = settings.pumpkinPosition;
            
                // Ensure the image is not already wrapped
                if (!$(this).parent().hasClass('pumpkin-wrapper')) {
                    const img = $(this);
            
                    // Wrap the image in a container
                    img.wrap('<div class="pumpkin-wrapper" style="position: relative; display: inline-block;"></div>');
            
                    // Create and append the pumpkin overlay if not already present
                    const pumpkinOverlay = $('<div class="pumpkin-overlay"></div>').css({
                        position: 'absolute',
                        width: '150px',
                        height: '150px',
                        backgroundImage: `url(${pumpkinImageUrl})`,
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        backgroundPosition: 'center',
                        pointerEvents: 'none',
                        zIndex: 2, // Ensure it appears above the image
                    });
            
                    img.parent().append(pumpkinOverlay);
            
                    // Apply the initial position
                    updatePumpkinPosition(pumpkinOverlay, PumpkinPosition);
                }
            
                // Listen for position change and update dynamically
                $('#pumpkin_position_select').on('change', function () {
                    PumpkinPosition = $(this).val(); // Get the updated position
                    $('.pumpkin-overlay').each(function () {
                        updatePumpkinPosition($(this), PumpkinPosition);
                    });
                });
            
                // Function to update pumpkin position
                function updatePumpkinPosition(pumpkinElement, position) {
                    let cssProperties = {};
                    switch (position) {
                        case 'top-left':
                            cssProperties = { top: '-20px', left: '-20px', right: 'auto', bottom: 'auto' };
                            break;
                        case 'top-right':
                            cssProperties = { top: '-20px', right: '-20px', left: 'auto', bottom: 'auto' };
                            break;
                        case 'bottom-left':
                            cssProperties = { bottom: '-20px', left: '-20px', right: 'auto', top: 'auto' };
                            break;
                        case 'bottom-right':
                            cssProperties = { bottom: '-20px', right: '-20px', left: 'auto', top: 'auto' };
                            break;
                        default:
                            cssProperties = { top: '-20px', left: '-20px' }; // Default to top-left
                    }
            
                    // Apply position styles
                    pumpkinElement.css(cssProperties);
                }
            });
        } 
        
        if(EnableFonts === "1"){
            const fontLink = document.createElement('link');
            fontLink.rel = 'stylesheet';
            fontLink.href = 'https://fonts.googleapis.com/css2?family=Creepster&display=swap';
            document.head.appendChild(fontLink);
          
            // Step 2: Apply the font-family to headings (h1-h6) in your plugin
            const style = document.createElement('style');
            style.textContent = `
              h1, h2, h3, h4, h5, h6 {
                font-family: 'Creepster', cursive !important;
              }
            `;
            document.head.appendChild(style);
        }
    }
});  