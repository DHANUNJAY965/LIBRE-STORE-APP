

const title = document.getElementById('title');
const author = document.getElementById('author');
const year = document.getElementById('year');

const booklist = document.getElementById('book-list');
const button = document.querySelector('.btn');
const button2 = document.querySelector('.btn2');
const button3 = document.querySelector('.btn3');

button.addEventListener("click", function(e) {
    e.preventDefault();

    if (title.value === "" && author.value === "" && year.value === "")
    {
        alert("fill the form");
    }
    else{
        const newRow = document.createElement("section");

        //creating new title 
        const newTitle = document.createElement("div");
        newTitle.innerHTML = title.value;
        newRow.appendChild(newTitle);

        //creating new author
        const newAuthor = document.createElement("div");
        newAuthor.innerHTML = author.value;
        newRow.appendChild(newAuthor);

        //creating new year
        const newYear = document.createElement("div");
        newYear.innerHTML = year.value;
        newRow.appendChild(newYear);

        booklist.appendChild(newRow);
    }
})
button2.addEventListener("click", function(e) {
    e.preventDefault();
    let tem = confirm('ENTERED DETAILS HAVE BEEN SUBMITTED SUCESSFULY WE WILL CONTACT THROUGH MAIL FOR FORTHUR DETAILS');
        new Promise((res, rej) => {
            if (tem == true) {
                res(true)
            } else {
                rej(false)
            }
        }).then((v) => {
            window.location.href = 'index3.html'
        }).catch((v) => {
            window.location.href = 'store2.html'
        })
});

button3.addEventListener("click", function(e) {
    e.preventDefault();
    let tem = confirm('PLEASE CLICK ON OK BUTTON TO GO BACK TO THE STORER');
        new Promise((res, rej) => {
            if (tem == true) {
                res(true)
            } else {
                rej(false)
            }
        }).then((v) => {
            window.location.href = 'index3.html'
        }).catch((v) => {
            window.location.href = 'store2.html'
        })
});