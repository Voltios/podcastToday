const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', e => {
    cursor.style.top = (e.pageY - 9) + "px";
    cursor.style.left = (e.pageX - 7) + "px";
})
document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 450)
});