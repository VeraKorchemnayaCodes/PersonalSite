const change = document.querySelectorAll('.change');

change.forEach((changeItem) => {
    changeItem.addEventListener('click', () => {
        const parent = changeItem.parentNode;
        if(parent.classList.contains('active')){
            parent.classList.remove('active');
            parent.nextElementSibling.classList.add('active');
        }
    });
});
