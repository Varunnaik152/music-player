console.log("Welcome to Music Player");


// Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('songs/21.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
let songItems = Array.from(document.getElementsByClassName('songItem'));

let songs = [
    {songName: "Singara Siriye (Kantara)", filePath: "songs/21.mp3", coverPath: "covers/21.png"},
    {songName: "Devle Devle Devle (Gaalipata 2)", filePath: "songs/22.mp3", coverPath: "covers/22.png"},
    {songName: "Naanaadada Maathellava (Gaalipata 2)", filePath: "songs/23.mp3", coverPath: "covers/23.png"},
    {songName: "Baaro Raja (Lucky Man)", filePath: "songs/24.mp3", coverPath: "covers/24.png"},
    {songName: "Manasella Neene (Lucky Man)", filePath: "songs/25.mp3", coverPath: "covers/25.png"},
    {songName: "Andada Chandada Gombe Naa", filePath: "songs/22.mp3", coverPath: "covers/26.png"},
    {songName: "Mayaviye", filePath: "songs/22.mp3", coverPath: "covers/27.png"},
    {songName: "Santanendare Yaru", filePath: "songs/22.mp3", coverPath: "covers/28.png"},
    {songName: "O Sukumaariye (Abbara)", filePath: "songs/22.mp3", coverPath: "covers/29.png"},
    {songName: "Thale Kettaga Onde Formula (Abbara)", filePath: "songs/24.mp3", coverPath: "covers/30.png"},
   
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
        audioElement.src = `songs/${songIndex+21}.mp3`;
        masterSongName.innerText = songs[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
    })
})
document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=29){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `songs/${songIndex+21}.mp3`;
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
    audioElement.src = `songs/${songIndex+21}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

