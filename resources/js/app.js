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



var delete_ss = document.getElementById('dlt_ss')
var add_ss = document.getElementById('add_ss');
// Add Soft Skills

add_ss.addEventListener('click', () =>{
    delete_ss.disabled = false; // Enable button delete
    delete_ss.style.filter = 'none'; // Remove grayscale
    var clone = document.getElementById('ss').cloneNode(true); // Clone div Soft skills
    document.getElementById('ss_content').appendChild(clone); // Add the clone as a child of the parent 'ss_content'
    var count = document.getElementById('ss_content').getElementsByTagName('div').length; // Calculate the number of div in the parent 'ss_content'
    if (count > 1){ // If there are more than 1 div, display the Delete button
        delete_ss.style.display = 'flex';

        if(count >= 5){ // If there are 5 or more div, disable button add (so there are 5 options max) & add grayscale
            add_ss.disabled = true;
            add_ss.style.filter = "grayscale(100%)";
        }
    }

})

// Delete Soft Skills
delete_ss.addEventListener('click', () =>{
    var count = document.getElementById('ss_content').getElementsByTagName('div').length;
    add_ss.disabled = false; // Enable button Add
    add_ss.style.filter = 'none'; // Remove grayscale 
    if(count > 1){
        var parent = document.getElementById('ss_content');
        parent.removeChild(parent.lastChild); // Remove the last child of  the parent 'ss_content'

        if(count == 2){ // If there are 1 div (2 because it will refresh when user click), disable button delete (so there is alway one div) & add grayscale
            delete_ss.disabled = true;
            delete_ss.style.filter = "grayscale(100%)";
        }
    }
})



// .appendChild(document.getElementById('ss_content'));