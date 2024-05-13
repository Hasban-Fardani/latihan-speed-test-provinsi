const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

let image_source = 'athena.jpg'
let filter_type = 'darken'

canvas.width = 460
canvas.height = 320
ctx.fillStyle = 'green'
ctx.fillRect(0, 0, canvas.width, canvas.height);

function filter() {
    const image = new Image();
    const color = filter_type === 'darken' ? 'rgba(0, 0, 0, 0.5)' : 'rgba(255, 255, 255, 0.5)' ;
    image.src = './img/' + image_source;
    image.onload = () => {
        ctx.drawImage(image, 10, 10)
        ctx.fillStyle = color
        ctx.drawImage(image, 240, 10)
        ctx.fillRect(240, 10, 200, 300)
    }
}

function changeFilter(e) {
    filter_type = e.value
    filter()
}

function changeImage(e) {
    image_source = e.value
    filter()
}

window.onload = () => {
    filter()
}