require('./bootstrap');
document.getElementById('next_inscription').addEventListener('click', () =>{
    document.getElementById('content_inscription_1').style.display = "none";
    document.getElementById('content_inscription_2').style.display = "flex";
    document.getElementById('submit_inscription').style.display = "flex";
    document.getElementById('next_inscription').style.display = "none";
})

document.getElementById('back_inscription').addEventListener('click', () =>{
    document.getElementById('content_inscription_1').style.display = "flex";
    document.getElementById('content_inscription_2').style.display = "none";
    document.getElementById('submit_inscription').style.display = "none";
    document.getElementById('next_inscription').style.display = "block";
})