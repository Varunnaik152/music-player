console.log("Welcome to Music Player");


// Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('songs/41.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
let songItems = Array.from(document.getElementsByClassName('songItem'));

let songs = [
    {songName: "Bullet Song (The Warrior)", filePath: "songs/41.mp3", coverPath: "covers/41.jpg"},
    {songName: "Dhada Dhada (The Warrior)", filePath: "songs/42.mp3", coverPath: "covers/42.jpg"},
    {songName: "Whistle Song (The Warriorr)", filePath: "songs/43.mp3", coverPath: "covers/43.jpg"},
    {songName: "Colours Song (The Warriorr)", filePath: "songs/44.mp3", coverPath: "covers/44.jpg"},
    {songName: " Aakashame Nuvvani (Diamond Raja)", filePath: "songs/45.mp3", coverPath: "covers/45.jpg"},
    {songName: "Inthandham (Sita Ramam)", filePath: "songs/42.mp3", coverPath: "covers/46.jpg"},
    {songName: "Kaanunna Kalyanam (Sita Ramam)", filePath: "songs/42.mp3", coverPath: "covers/47.jpg"},
    {songName: "Oh Prema (Sita Ramam)", filePath: "songs/42.mp3", coverPath: "covers/48.jpg"},
    {songName: "Nannu Nenu Adiga (Karthikeya 2)", filePath: "songs/42.mp3", coverPath: "covers/49.jpg"},
    {songName: "Krishna Trance (Karthikeya 2)", filePath: "songs/44.mp3", coverPath: "covers/50.jpg"},
   
]

songItems.forEach((element, i)=>{ 
    element.getElementsByTagName("img")[0].src = songs[i].coverPath; 
    element.getElementsByClassName("songName")[0].innerText = songs[i].songName;
})
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity = 1;
    }
    else{
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity = 0;
    }
})
// Listen to Events
audioElement.addEventListener('timeupdate', ()=>{ 
    // Update Seekbar
    progress = parseInt((audioElement.currentTime/audioElement.duration)* 100); 
    myProgressBar.value = progress;
})

myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;
})
const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');
    })
}
Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{ 
        makeAllPlays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src = `songs/${songIndex+41}.mp3`;
        masterSongName.innerText = songs[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
    })
})
document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=49){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `songs/${songIndex+41}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');

})
document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex<=0){
        songIndex = 0
    }
    else{
        songIndex -= 1;
    }
    audioElement.src = `songs/${songIndex+41}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

