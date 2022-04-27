
let text="Идейные соображения высшего порядка, а также консультация с широким активом представляет собой интересный эксперимент проверки форм развития. С другой стороны реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки новых предложений. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности требуют определения и уточнения новых предложений. Не следует, однако забывать, что рамки и место обучения кадров влечет за собой процесс внедрения и модернизации модели развития."
text=text.toLowerCase()
let newtext=text.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"")
console.log(newtext)
let countword = newtext.split(" ").length
let splitword=newtext.split(" ")
let wordrepeats = []
console.log(countword)
let setsplitword=new Set(splitword) //множество не повторяющихся эллементов
let setdelword = new Set(["а","с","но","и","за","в","же","не","что"])
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
