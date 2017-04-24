function zoomFunction(key){
    var modal = document.getElementsByClassName('myModal')[key];
    var img = document.getElementsByClassName('myImg')[key];
    var img2 = document.getElementsByClassName('myImg2')[key];
    var modalImg = document.getElementsByClassName('img01')[key]; 
    var captionText = document.getElementsByClassName('caption')[key];   
    modal.style.display = "block";
    modalImg.src = img2.src;
    captionText.innerHTML = img.alt;      
}

function exitFunction(key){
    var modal = document.getElementsByClassName('myModal')[key];
    modal.style.display = "none";
}