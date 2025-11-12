// get classes of html tags
// document.getElementsByClassName('className')
// this will return an array, same as getElementsByTagName(), querySelectorAll()

const tohide = document.getElementsByClassName('hide-me')
const buttonhide = document.getElementById('hide-class')
// htmlelement.class
// htmlelement#id
const allParagraphs = document.querySelectorAll('p.highlight')

// apply a class on a lot of html tags
allParagraphs.forEach((item) => {
    item.classList.add('apply-background-color')
    item.onclick = () => {
        // window.close()
        // console.log(item.innerText)
        console.log(item.getAttribute("test"))
    }
})

buttonhide.onclick = () => {
    // tohide.style.visibility = "hidden" -> this will never work
    // iterate getElementsByClassName() to even apply changes/events
    for(let hide of tohide){
        hide.style.visibility = "hidden"
    }
}
