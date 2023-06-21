let indexsong = 0;
let isLocked = false;
let songLength = null;
let selectedSong = null;
let loadingProgress = 0;
let sogIsPlayed = false;
let progress_elmnt = null;
let songName_elmnt = null;
let sliderImgs_elmnt = null;
let singerName_elmnt = null;
let progessBar_elmnt = null;
let playlistSongs_elmnt = [] ;
let loadingProgress_elmnt = null;
let musicPlayerInfo_elmnt = null;
let progressBarIsUpdating = false;
let broadcastGuarantor_elmnt = null;
const root = querySelector("#root");

function App({songs}) {
    function handLeChangeMusic({isPrev = false, playListIndex = null}){
        if (playListIndex||playListIndex === 0) {
            indexsong = playListIndex;
        } else {
            indexsong = isPrev ? indexsong -= 1 : indexsong += 1;
        }

        if (indexsong < 0) {
            indexsong = 0;
            return;
        } else if (indexsong > songLength) {
            indexsong = songLength;
            return;
        }

        selectedSong.pause();
        selectedSong.currentTime = 0;
        progressBarIsUpdating = false;
        selectedSong = playlistSongs_elmnt[indexsong];
        selectedSong.paused && songIsPlayed ?
        selectedSong.play():
        selectedSong.pause();

        setBodyBg(songs[indexsong].bg);
        setProperty(sliderImgs_elmnt, "--index", -indexsong);
        updateInfo(singerName_elmnt, songs[indexsong].artist);
        updateInfo(songName_elmnt, songs[indexsong].songName);
    }

    setBodyBg(songs[0].bg);

    return (
        dom("div", { class: "music-player flex-column"},
        dom(Slider, {slides: songs, handLeChangeMusic: handLeChangeMusic}),
        dom(Playlist, { list: songs, handLeChangeMusic: handLeChangeMusic})));
}

function Slider({ slides, handLeChangeMusic}){
    function handLeResizeSlider({target}) {
        if (isLocked) {
            return;
        } else if (target.classList.contains("music-player__info")){
            this.classList.add("resize");
        }
    }
}
