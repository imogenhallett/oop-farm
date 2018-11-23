/**
 * Function to remove the default paragraph from the info display panel
 */
function removeDefault() {
    var element = document.getElementById('default')
    if (element) {
        document.getElementById('default').parentNode.removeChild(element);
    }
}

/**
 * Function to insert the returned data in the page element barn-facts
 * @param data animal data to be outputted from backend
 */
function addFacts(data) {
    var element = document.getElementById('barn-facts')

    var html = '<p>You added a ' + data[0].species + ' to the barn.  The farmer will feed the ' + data[0].species + ' ' +
        data[0].feedingTimes + ' a day. Did you know that a ' + data[0].species + ' eats '
        +data[0].eats +' and gives us ' + data[0].produces +'?</p> <p>' + data[0].joke + '</p>' +
        '<p>'+ data[0].punch +'</p>'

    element.innerHTML = html;
}

/**
 * Function to add animal avatar to the barn
 * @param animalID the type of animal e.g cow, sheep, pig, chicken
 */
function addAnimalImgToBarn(animalID) {
    var element = document.getElementById('barn-'+animalID)

    var img = document.createElement('img')
    img.src = 'img/animals/' + animalID + '.png'

    element.classList.add("added");
    element.innerHTML = '<img src="'+img.src+'"/>'
}

/**
 * Function to perform an ajax POST to post.php
 * @param obj an object with key of animal type and value of add
 */
function doAjaxCall(obj){
    obj = JSON.stringify(obj)
    var ajax = new XMLHttpRequest()

    ajax.open("POST", "post.php", true)

    ajax.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText)
            console.log(data)
            removeDefault()
            addAnimalImgToBarn(data[0].species)
            addFacts(data)
        }
        if (this.status == 500) {
            console.log (this.statusText)
        }
    }

    ajax.setRequestHeader("Content-type", "application/json")
    ajax.send(obj)
}

document.querySelectorAll('.add-animal').forEach(function (animal) {
    var obj = {}
    animal.addEventListener('click', function () {
        obj[animal.dataset.animal] = 'add';
        doAjaxCall(obj)
    })
})