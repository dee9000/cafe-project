
//i want everything to be fully loaded before running the code
document.addEventListener('DOMContentLoaded', ()=>{
    //store the id in a variable
    const dropDown = document.getElementById('drinks'); 
    //fetch the url for the location to return a json object
    fetch('https://api.sampleapis.com/coffee/hot')
    .then(res =>{
        return res.json();
    })
    //we take the data returned, create an empty variable
    .then(data =>{
        let output = "";
        data.forEach(drink =>{
            output += `<option value="${drink.title}">${drink.title}</option>`;
        })
        dropDown.innerHTML = output;
    })
    .catch(err =>{
        console.log(err);
    })

})