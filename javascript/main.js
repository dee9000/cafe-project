
let form, list, image, span
window.addEventListener('load', ()=>{
    form = document.querySelector("#form")
    cocoa = document.querySelector("#cocoa")
    image = document.querySelector("#image")
    span = document.querySelector("#title")

    form.addEventListener('change', (event)=>{  //event is a built in attribute of addevent listener function

        event.preventDefault() //avoids a refresh
        const formData = new FormData(form) //every form has form data,formData is a built in DOM class. Will take in certain values: take this form and give us the value
        console.log("formData", formData)
        const data = Object.fromEntries(formData)
        console.log("data", data)

        //getting the http request api
        fetch(`https://api.sampleapis.com/coffee/hot`)
        .then((response)=>{
            return response.json()
        })
        .then((data)=>{
            console.log("response", data)
        })

    })
})