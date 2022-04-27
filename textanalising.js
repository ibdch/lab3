 function analis(){
    alert("Вы нажали на кнопку");
 
let textarea=document.getElementById("input")
let text = textarea.value
text=text.toLowerCase()
text=text.replace(/["."]/g,". ")
text=text.replace(/\s{2,}/g, ' ')
console.log(text)

let newtext=text.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"")
console.log(newtext)
let countword = newtext.split(" ").length
let splitword=newtext.split(" ")
let wordrepeats = []
console.log(countword)
let setsplitword=new Set(splitword) //множество не повторяющихся эллементов
let setdelword = new Set(["а","с","но","и","за","в","же","не","что","для","на"])
let cleartext = new Set([...setsplitword].filter(x=>!setdelword.has(x)))
cleartext.forEach(el => {
    let count =0
    splitword.forEach (sub =>{
        if (el== sub){
            count++     
        }
    })
    wordrepeats.push({word:el,count:count})
});
let maxcount=0
let targetword
wordrepeats.forEach(el=>{
    if (el.count > maxcount){
        maxcount=el.count
        targetword=el
    }
})
console.log(maxcount)
console.log(targetword)
console.log(wordrepeats);
let nausiam=(maxcount/countword)*100
console.log(nausiam)
alert(nausiam);
document.getElementById("toshnota").innerHTML="Тошнота текста-"+nausiam+"%"
document.getElementById("toshnotaWord").innerHTML="Частоповторяемое слово-"+targetword.word
debugger;
 insert(text,nausiam)
}

let insert = async(text,nausiam)=>{
    const url = 'http://localhost/insertesse.php';
    const data = { text: text, nausiam:nausiam };
    
    
      const response = await fetch(url, {
        method: 'POST', // или 'PUT'
        body: JSON.stringify(data), // данные могут быть 'строкой' или {объектом}!
        headers: {
          'Content-Type': 'application/json'
        }
      });
      const json = await response.json();
      console.log('Успех:', JSON.stringify(json));
    
}
