

async function start(){
  //asynchronous function to fetch the data
  const response = await fetch('https://api.sampleapis.com/coffee/hot') //Traditionally this will return a promise, a way of letting this operation run in the background but will keep lettng other codes afterwards run
//however; the method await will not allow anything else below this to run until the fetch is done in this case
  const data = await response.json()
  console.log(data)
}


start()
function myFunction(){
    
}