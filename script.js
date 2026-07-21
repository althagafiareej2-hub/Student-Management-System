document.getElementById("myForm").addEventListener("submit", function(e){

e.preventDefault();

let formData=new FormData();

formData.append("name",document.getElementById("name").value);

formData.append("age",document.getElementById("age").value);


fetch("insert.php",{

method:"POST",

body:formData

})

.then(res=>res.text())

.then(data=>{

document.getElementById("tableBody").innerHTML=data;

document.getElementById("myForm").reset();

});

});


function toggleStatus(id){

let formData=new FormData();

formData.append("id",id);


fetch("toggle.php",{

method:"POST",

body:formData

})

.then(res=>res.text())

.then(data=>{

document.getElementById("tableBody").innerHTML=data;

});

}