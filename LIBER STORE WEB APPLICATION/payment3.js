const butt = document.querySelector('.clickme');
butt.addEventListener("click", function(e) {
    e.preventDefault();
    let tem = confirm('ORDER PLACED SUCESSFULLY');
        new Promise((res, rej) => {
            if (tem == true) {
                res(true)
            } else {
                rej(false)
            }
        }).then((v) => {
            window.location.href = 'index3.html'
        }).catch((v) => {
            window.location.href = 'payment1.html'
        })
});