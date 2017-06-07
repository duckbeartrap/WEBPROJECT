var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,4000);
var previous = document.getElementById('previous');

next.onclick = function() {
    pauseSlideshow();
    nextSlide();
};

previous.onclick = function() {
    pauseSlideshow();
    previousSlide();
};

function nextSlide() {
    goToSlide(currentSlide+1);
}

function previousSlide() {
    goToSlide(currentSlide-1);
}

function goToSlide(n) {
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

function pauseSlideshow() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide,4000);
}

function playSlideshow() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide,4000);
}

function popupfunctioncontact(){
    document.getElementById('providercontact').style.display = "block";
    document.getElementById('mypopupbackgroundcontact').style.display = "block";
}
function popupfunctioncompanyinfo(){
    document.getElementById('providercompany').style.display = "block";
    document.getElementById('mypopupbackgroundcompany').style.display = "block";
}
document.getElementById('closecontact').onclick = function(){
    document.getElementById('providercontact').style.display = "none";
    document.getElementById('mypopupbackgroundcontact').style.display = "none";
}
document.getElementById('closecompany').onclick = function(){
    document.getElementById('providercompany').style.display = "none";
    document.getElementById('mypopupbackgroundcompany').style.display = "none";
}


//setTimeout(function(){ popup();}, 30000); //popup window-s gamochenis dro!!!
    
function popup(){
    document.getElementById('video').play();
    document.getElementById('providerhello').style.display = "block";
    document.getElementById('mypopupbackgroundhello').style.display = "block";
    
}


document.getElementById('closehello').onclick = function(){
    document.getElementById('video').pause();
    document.getElementById('providerhello').style.display = "none";
    document.getElementById('mypopupbackgroundhello').style.display = "none";  

}

function Checking(){
        var a = document.contactform.first_name.value;
        var b = document.contactform.last_name.value;
        var c = document.contactform.ID.value;
        var d = document.contactform.Birthdate.value;
        var e = document.contactform.subject.value;
        var f = document.contactform.pass.value;
        var f1 = document.contactform.rpass.value;
        var g = document.contactform.sel.value;
        var h = document.contactform.textarea1.value;
        var i = document.contactform.txt;
        if (a == null || a == "") {
             alert("First Name must be filled out");
             document.contactform.first_name.style.background = "yellow";
             return false;
        }
        else if(b==null || b=="")
        {
            alert("Last Name must be filled out");
            document.contactform.last_name.style.background = "yellow";
            return false;
        }
        else if(c==null || c=="")
        {
            alert("ID must be filled out");
            document.contactform.ID.style.background = "yellow";
            return false;
        }
        else if(d==null || d=="")
        {
            alert("Birthdate must be filled out");
            document.contactform.Birthdate.style.background = "yellow";
            return false;
        }
        else if(e==null || e=="")
        {
            alert("Gender must be filled out");
            return false;
        }
        else if(!i.disabled && i.value==""){
            alert("other must be filled out");
            document.contactform.txt.style.background = "yellow";
            return false;
        }
        else if(f==null || f=="")
        {
            alert("Password must be filled out");
            document.contactform.pass.style.background = "yellow";
            return false;
        }
        else if(f==null || f=="")
        {
            alert("Password must be filled out");
            document.contactform.pass.style.background = "yellow";
            return false;
        }
        else if(f1==null || f1=="")
        {
            alert("Password must be filled out");
            document.contactform.rpass.style.background = "yellow";
            return false;
        }
        else if(g==null || g=="---")
        {
            alert("Please Select Document");
            document.contactform.sel.style.background = "yellow";
            return false;
        }
        else if(h==null || h=="")
        {
            alert("textarea must be filled out");
            document.contactform.rpass.style.background = "yellow";
            return false;
        }
        else{
            alert("Submited");
            return true;
        }
    }
function handle(val){
        if(val=="other")
            document.contactform.txt.disabled=false;
        else
            document.contactform.txt.disabled=true;
}


function resme(){
    var header = document.getElementById('headus');
    var ul = document.getElementById('resme');
if($(window).width() < 800){
    if (ul.style.display === 'none') {
        ul.style.display = 'block';
    }
    else{
        ul.style.display = 'none';
    }
}

else{
    ul.style.display = 'block';
}
}